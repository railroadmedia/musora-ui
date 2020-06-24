import User from '../models/user';

export default class Comment {
    constructor(
        public id: string,
        public author: User,
        public comment: string,
        public likes: number,
        public added: string,
        public replies: Comment[]
    ) {
    }
}
