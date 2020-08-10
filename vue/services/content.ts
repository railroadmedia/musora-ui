import http from './http';
import ContentModel from '../models/content';
import InstructorModel from '../models/instructor';
import Utils from './utils';
import Errors from './errors';

export default class Content {
    static readonly defaultContentThumbnail = '';

    static toggleLike(content: ContentModel) {

        if (content.liked) {
            return http
                .delete(
                    '/railcontent/content-like',
                    {
                        data: {
                            relationships: {
                                content: {
                                    data: {
                                        type: 'content',
                                        id: content.id
                                    }
                                }
                            }
                        }
                    }
                )
                .then(response => response)
                .catch(error => {
                    Errors.report(error, 'Content::toggleLike delete');
                    return error;
                });
        } else {
            return http
                .put(
                    '/railcontent/content-like',
                    {
                        data: {
                            relationships: {
                                content: {
                                    data: {
                                        type: 'content',
                                        id: content.id
                                    }
                                }
                            }
                        }
                    }
                )
                .then(response => response)
                .catch(error => {
                    Errors.report(error, 'Content::toggleLike put');
                    return error;
                });
        }
    }

    static getContent(payload) {
        payload['version'] = 'new';

        return http
            .get('/railcontent/content', { params: payload })
            .then(response => response)
            .catch(error => {
                Errors.report(error, 'Content::getContent');
                return error;
            });
    }

    static getMyList(payload) {
        payload['version'] = 'new';

        return http
            .get('/railcontent/my-list', { params: payload })
            .then(response => response)
            .catch(error => {
                Errors.report(error, 'Content::getMyList');
                return error;
            });
    }

    static getContentFromResponse(response): ContentModel[] {
        let result = [];

        response.data.forEach(item => {

            let relatedDataMap = Content.getContentRelatedData(item, response.included);
            let thumbnail = this.getContentData(relatedDataMap, 'thumbnail_url') || this.defaultContentThumbnail;
            let sheet = this.getContentData(relatedDataMap, 'sheet_music_thumbnail_url');
            let topic = this.getContentTopic(relatedDataMap);

            let content = new ContentModel(
                item.id,
                item.url || this.getUrl(item),
                thumbnail,
                item.attributes.title,
                this.getContentInstructors(relatedDataMap),
                item.attributes.type,
                item.attributes.difficulty,
                undefined, // todo - update contentIcon
                item.attributes.publishedOn,
                item.attributes.artist,
                item.attributes.style,
                item.attributes.like_count,
                item.attributes.is_liked_by_current_user,
                sheet,
                topic
            );

            if (relatedDataMap.hasOwnProperty('parent')) {
                content.parent = this.getParentContent(relatedDataMap);
            }

            result.push(content);
        });

        return result;
    }

    static getContentRelatedData(content, included) {
        let result = {};
        let relations = {};

        let relationships = content.relationships || {};
        const keys = Object.keys(relationships);

        keys.forEach((key) => {
            let relationship = relationships[key];

            if (relationship.data) {
                relationship.data.forEach(related => {
                    if (!relations[related.type]) {
                        relations[related.type] = {};
                    }
                    relations[related.type][related.id] = true;
                });
            } else {
                console.log(
                    "unhandled one-to-one content relationship: content id: %s, relationship: %s",
                    content.id,
                    JSON.stringify(relationship)
                );
            }
        });

        let includedInstructorsMap = {};
        let relatedInstructorsIds = [];

        let includedParentMap = {};
        let relatedParentIds = [];

        included.forEach((includedObject) => {
            if (includedObject.type == 'instructor' && !includedObject.relationships) {
                includedInstructorsMap[includedObject.id] = includedObject;
            }

            if (includedObject.type == 'parent' && !includedObject.relationships) {
                includedParentMap[includedObject.id] = includedObject;
            }

            if (relations[includedObject.type] && relations[includedObject.type][includedObject.id]) {
                if (!result[includedObject.type]) {
                    result[includedObject.type] = {};
                }
                if (
                    includedObject.type == 'instructor'
                    && includedObject.relationships
                    && includedObject.relationships.instructor
                ) {
                    relatedInstructorsIds.push(includedObject.relationships.instructor.data.id);
                } else if (
                    includedObject.type == 'parent'
                    && includedObject.relationships
                    && includedObject.relationships.parent
                ) {
                    relatedParentIds.push(includedObject.relationships.parent.data.id);
                } else {
                    result[includedObject.type][includedObject.id] = includedObject;
                }
            }
        });

        relatedInstructorsIds.forEach((instructorId) => {
            if (!result['instructor']) {
                result['instructor'] = {};
            }
            if (includedInstructorsMap[instructorId]) {
                result['instructor'][instructorId] = includedInstructorsMap[instructorId];
            }
        });

        relatedParentIds.forEach((parentId) => {
            if (!result['parent']) {
                result['parent'] = {};
            }
            if (includedParentMap[parentId]) {
                result['parent'][parentId] = includedParentMap[parentId];
            }
        });

        return result;
    }

    static getContentData(contentRelatedData, key): string {
        let data;
        let contentDataItems = contentRelatedData.contentData || {};
        const ids = Object.keys(contentDataItems);

        ids.forEach((id) => {
            let item = contentDataItems[id];

            if (item.attributes.key == key) {
                data = item.attributes.value;
            }
        });

        return data;
    }

    static getContentTopic(contentRelatedData): string {
        // todo - if other related entities data is required, this method and getContentData may be refactored in to a general fetcher
        let data = '';

        if (contentRelatedData.topic) {
            let topicId = Object.keys(contentRelatedData.topic)[0];
            if (
                contentRelatedData.topic[topicId]
                && contentRelatedData.topic[topicId].attributes
                && contentRelatedData.topic[topicId].attributes.topic
            ) {
                data = contentRelatedData.topic[topicId].attributes.topic;
            }
        }

        return data;
    }

    static getContentInstructors(contentRelatedData): InstructorModel[] {
        let result = [];
        let instructorsData = contentRelatedData.instructor || {};
        const ids = Object.keys(instructorsData);

        ids.forEach((id) => {
            let item = instructorsData[id];

            result.push(
                new InstructorModel(id, item.attributes.name)
            );
        });

        return result;
    }

    static getParentContent(contentRelatedData): ContentModel {
        let parentData = contentRelatedData.parent;
        let id = Object.keys(parentData)[0];

        let thumbnail = this.getContentData(contentRelatedData, 'thumbnail_url') || this.defaultContentThumbnail;
        let sheet = this.getContentData(contentRelatedData, 'sheet_music_thumbnail_url');
        let topic = this.getContentData(contentRelatedData, 'topic');

        return new ContentModel(
            +id,
            parentData[id].url || this.getUrl(parentData[id]),
            thumbnail,
            parentData[id].attributes.title,
            this.getContentInstructors(contentRelatedData),
            parentData[id].attributes.type,
            parentData[id].attributes.difficulty,
            undefined, // todo - update contentIcon
            parentData[id].attributes.publishedOn,
            parentData[id].attributes.artist,
            parentData[id].attributes.style,
            parentData[id].attributes.like_count,
            parentData[id].attributes.is_liked_by_current_user,
            sheet,
            topic
        );
    }

    static getUrl(content): string {
        return '#'; // todo - update
    }
}
