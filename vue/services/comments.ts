import Comment from '../models/comment';
import Errors from './errors';
import http from './http';
import UserService from '../services/users';

export default class Comments {

    static getCommentsFromResponse(response): Comment[] {
        let result = [];

        response.data.forEach(item => {
            let relatedDataMap = Comments.getCommentRelatedData(item, response.included);
            let author;
            let authodData = relatedDataMap['user'][item.relationships.user.data.id];
            let replies = [];

            if (authodData) {
                author = UserService.getUser(authodData);
            }

            if (relatedDataMap['comment']) {

                let keys = Object.keys(relatedDataMap['comment']);

                if (keys.length) {
                    keys.forEach(commentId => {
                        let replyAuthor;
                        let replyData = relatedDataMap['comment'][commentId];
                        let replyAuthodData = relatedDataMap['user'][replyData.relationships.user.data.id];
                        if (replyAuthodData) {
                            replyAuthor = UserService.getUser(replyAuthodData);
                        }
                        replies.push(
                            new Comment(
                                commentId,
                                replyData.attributes.comment,
                                replyData.attributes.like_count,
                                replyData.attributes.is_liked,
                                replyData.attributes.created_on,
                                [],
                                replyAuthor
                            )
                        );
                    });
                }
            }

            result.push(
                new Comment(
                    item.id,
                    item.attributes.comment,
                    item.attributes.like_count,
                    item.attributes.is_liked,
                    item.attributes.created_on,
                    replies,
                    author
                )
            );
        });

        return result;
    }

    static getCommentRelatedData(comment, included) {
        let result = {};
        let relations = {};
        let relationships = comment.relationships || {};

        const keys = Object.keys(relationships);

        keys.forEach((key) => {
            let relationship = relationships[key];

            if (!relations[key]) {
                relations[key] = {};
            }

            if (relationship.data.length) {
                relationship.data.forEach(related => {
                    if (!relations[related.type]) {
                        relations[related.type] = {};
                    }
                    relations[related.type][related.id] = true;
                });
            } else {
                if (!relations[relationship.data.type]) {
                    relations[relationship.data.type] = {};
                }
                relations[relationship.data.type][relationship.data.id] = true;
            }
        });

        let includedUsersMap = {};
        let relatedUsersIds = [];

        included.forEach((includedObject) => {
            if (includedObject.type == 'user') {
                includedUsersMap[includedObject.id] = includedObject;
            }

            if (
                includedObject.type == 'comment'
                && relations['comment']
                && relations['comment'][includedObject.id]
                && includedObject.relationships
                && includedObject.relationships.user
            ) {
                relatedUsersIds.push(includedObject.relationships.user.data.id);
            }

            if (includedObject.type == 'user' || includedObject.type == 'comment') {
                if (relations[includedObject.type] && relations[includedObject.type][includedObject.id]) {
                    if (!result[includedObject.type]) {
                        result[includedObject.type] = {};
                    }

                    result[includedObject.type][includedObject.id] = includedObject;
                }
            }
        });

        if (!result['user'] && relatedUsersIds.length) {
            result['user'] = {};
        }

        relatedUsersIds.forEach((userId) => {
            result['user'][userId] = includedUsersMap[userId];
        });

        return result;
    }

    static reply(comment, reply) {
        return http
            .put(
                '/railcontent/comment/reply',
                {
                    data: {
                        type: 'comment',
                        attributes: {
                            comment: reply
                        },
                        relationships: {
                            parent: {
                                data: {
                                    type: 'comment',
                                    id: comment.id
                                }
                            }
                        }
                    }
                }
            )
            .then(response => response)
            .catch(error => {
                Errors.report(error, 'Comments::reply');
                return error;
            });
    }

    static addComment(contentId, comment, user) {
        return http
            .put(
                '/railcontent/comment',
                {
                    data: {
                        type: 'comment',
                        attributes: {
                            comment: comment,
                            temporary_display_name: user
                        },
                        relationships: {
                            content: {
                                data: {
                                    type: 'content',
                                    id: contentId
                                }
                            }
                        }
                    }
                }
            )
            .then(response => response)
            .catch(error => {
                Errors.report(error, 'Comments::addComment');
                return error;
            });
    }

    static getComments(payload) {
        return http
            .get('/railcontent/comment', { params: payload })
            .then(response => response)
            .catch(error => {
                Errors.report(error, 'Content::getContent');
                return error;
            });
    }
}
