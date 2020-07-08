import http from './http';
import ContentModel from '../models/content';
import InstructorModel from '../models/instructor';
import Utils from './utils';

export default class Content {
    static readonly defaultContentThumbnail = '';

    static getContent(payload) {
        return http.get('/railcontent/content', { params: payload });
    }

    static getContentFromResponse(response): ContentModel[] {
        let result = [];

        response.data.forEach(item => {

            let relatedDataMap = Content.getContentRelatedData(item, response.included);
            let thumbnail = this.getContentData(relatedDataMap, 'thumbnail_url') || this.defaultContentThumbnail;
            let sheet = this.getContentData(relatedDataMap, 'sheet_music_thumbnail_url');

            result.push(
                new ContentModel(
                    item.id,
                    '#', // todo - update url
                    thumbnail,
                    item.attributes.title,
                    this.getContentInstructors(relatedDataMap),
                    item.attributes.type,
                    item.attributes.difficulty,
                    undefined, // todo - update contentIcon
                    item.attributes.publishedOn,
                    item.attributes.artist,
                    undefined, // todo - update genre
                    undefined, // todo - update likes
                    undefined, // todo - update liked
                    sheet
                )
            );
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

        included.forEach((includedObject) => {
            if (includedObject.type == 'instructor' && !includedObject.relationships) {
                includedInstructorsMap[includedObject.id] = includedObject;
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
}
