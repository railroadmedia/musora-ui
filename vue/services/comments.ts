import Comment from '../models/comment';
import UserService from '../services/users';

export default class Comments {
    static getCommentsFromArray(list): Comment[] {
        let result = [];

        list.forEach((item) => {
            try {
                let replies;

                if (item.replies && item.replies.length) {
                    replies = Comments.getCommentsFromArray(item.replies);
                }

                result.push(
                    new Comment(
                        item.id,
                        UserService.getUserFromObject(item.author),
                        item.comment,
                        item.likes,
                        item.liked,
                        item.added,
                        replies
                    )
                );
            } catch (e) {
                // todo - add exception handling
            }
        });

        return result;
    }
}
