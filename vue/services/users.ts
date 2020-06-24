import User from '../models/user';

export default class Users {
    static getUserFromObject(value: {
        id: string,
        avatar: string,
        name: string,
        level: number,
        border: string
    }): User {
        return new User(
            value.id,
            value.avatar,
            value.name,
            value.level,
            value.border
        );
    }
}
