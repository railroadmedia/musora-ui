import Video from '../models/video';
import ContentModel from '../models/content';
import Rudiment from '../models/rudiment';

// todo - to be removed

export default class Videos {
    static getVideoFromObject(value: {
        url: string,
        thumbnail: string,
        title: string,
        teacher: string,
        contentType: string,
        difficulty: string,
        contentIcon?: string,
        date?: string,
        artist?: string,
        genre?: string,
        likes?: number,
        liked?: boolean,
        id?: number,
        progress?: number,
    }): ContentModel {
        return new ContentModel(
            value.id,
            value.url,
            value.thumbnail,
            value.title,
            // value.teacher,
            [],
            value.contentType,
            value.difficulty,
            value.contentIcon,
            value.date,
            value.artist,
            value.genre,
            value.likes || 0,
            value.liked || false,
            value.progress
        );
    }

    static getVideosFromArray(
        list: {
            url: string,
            thumbnail: string,
            title: string,
            teacher: string,
            contentType: string,
            difficulty: string,
            contentIcon?: string,
            date?: string,
            artist?: string,
            genre?: string,
            likes?: number,
            liked?: boolean,
            id?: string,
            progress?: number,
        }[]
    ): ContentModel[] {
        let result = [];

        list.forEach((value, index: number) => {
            try {
                let id = Math.floor(Math.random() * Math.floor(10000));
                result.push(
                    new ContentModel(
                        id,
                        value.url,
                        value.thumbnail,
                        value.title,
                        // value.teacher,
                        [],
                        value.contentType,
                        value.difficulty,
                        value.contentIcon,
                        value.date,
                        value.artist,
                        value.genre,
                        value.likes,
                        value.liked || false,
                        value.progress
                    )
                );
            } catch (e) {
                // todo - add exception handling
            }
        });

        return result;
    }

    static getRudimentsFromArray(
        list: {
            url: string,
            thumbnail: string,
            title: string,
            teacher: string,
            sheet: string,
            type?: string,
            id?: string,
        }[]
    ): Rudiment[] {
        let result = [];

        list.forEach((value, index: number) => {
            try {
                let id = value.id || (index.toString() + value.title.substr(0, 3) + value.teacher.substr(0, 3));
                result.push(
                    new Rudiment(
                        id,
                        value.url,
                        value.thumbnail,
                        value.title,
                        value.teacher,
                        value.sheet,
                        value.type
                    )
                );
            } catch (e) {
                // todo - add exception handling
            }
        });

        return result;
    }
}
