import User from '../models/user';

export default class Users {
    static readonly defaultBorder = 'blue';
    static readonly defaultIconClass = '';

    static getUserFromObject(value: {
        id: string,
        avatar: string,
        name: string,
        level: number,
        border: string,
        iconClass?: string
    }): User {
        return new User(
            value.id,
            value.avatar,
            value.name,
            value.level,
            value.border,
            value.iconClass
        );
    }

    static getUser(data): User {
        return new User(
            data.id,
            data.attributes.avatar,
            data.attributes.display_name,
            data.attributes.access_level,
            Users.defaultBorder,
            Users.defaultIconClass
        );
    }
}
