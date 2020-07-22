import User from '../models/user';

export default class Users {

    static getUserFromObject(value: {
        id: string,
        avatar: string,
        name: string,
        membership: string,
        level: string
    }): User {
        return new User(
            value.id,
            value.avatar,
            value.name,
            value.membership,
            value.level
        );
    }

    static getUser(data): User {
        return new User(
            data.id,
            data.attributes.avatar,
            data.attributes.display_name,
            data.attributes.access_level,
            data.attributes.level_number
        );
    }
}
