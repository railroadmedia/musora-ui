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

            result.push(
                new ContentModel(
                    item.id,
                    '#', // todo - update url
                    this.getContentTumbnail(relatedDataMap),
                    item.attributes.title,
                    this.getContentInstructors(relatedDataMap),
                    item.attributes.type,
                    item.attributes.difficulty,
                    undefined, // todo - update contentIcon
                    item.attributes.publishedOn,
                    item.attributes.artist,
                    undefined, // todo - update genre
                    undefined, // todo - update likes
                    undefined // todo - update liked
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

        included.forEach((includedObject) => {
            if (relations[includedObject.type] && relations[includedObject.type][includedObject.id]) {
                if (!result[includedObject.type]) {
                    result[includedObject.type] = {};
                }
                // todo - update with instructors relation details
                result[includedObject.type][includedObject.id] = includedObject;
            }
        });

        return result;
    }

    static getContentTumbnail(contentRelatedData): string {
        // todo - refactor into generic method, when several similar related data objects are needed
        let thumbnail = this.defaultContentThumbnail;
        let contentDataItems = contentRelatedData.contentData || {};
        const ids = Object.keys(contentDataItems);

        ids.forEach((id) => {
            let item = contentDataItems[id];

            if (item.attributes.key == 'thumbnail_url') {
                thumbnail = item.attributes.value;
            }
        });

        return thumbnail;
    }

    static getContentInstructors(contentRelatedData): InstructorModel[] {
        let result = [];
        let instructorsData = contentRelatedData.instructor || {};
        const ids = Object.keys(instructorsData);

        // todo - update

        ids.forEach((id) => {
            let item = instructorsData[id];

            result.push(
                new InstructorModel(id, item.attributes.name)
            );
        });

        return result;
    }
}
