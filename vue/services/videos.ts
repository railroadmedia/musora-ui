import Video from '../models/video';
import Rudiment from '../models/rudiment';

export default class Videos {
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
            id?: string,
            progress?: number,
        }[]
    ): Video[] {
        let result = [];

        list.forEach((value, index: number) => {
            try {
                let id = value.id || (index.toString() + value.title.substr(0, 3) + value.teacher.substr(0, 3));
                result.push(
                    new Video(
                        id,
                        value.url,
                        value.thumbnail,
                        value.title,
                        value.teacher,
                        value.contentType,
                        value.difficulty,
                        value.contentIcon,
                        value.date,
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

    static getVideos(): Video[] {
        // todo - to be removed
        return [
            new Video(
                '1',
                '#',
                'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                'lesson one title',
                'teacher name',
                'content type',
                'beginner - 1'
            ),
            new Video(
                '2',
                '#',
                'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                'lesson two title',
                'teacher name',
                'content type',
                'beginner - 1'
            ),
            new Video(
                '3',
                '#',
                'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                'lesson three title',
                'teacher name',
                'content type',
                'beginner - 1'
            ),
            new Video(
                '4',
                '#',
                'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                'lesson four title',
                'teacher name',
                'content type',
                'beginner - 1'
            ),
            new Video(
                '5',
                '#',
                'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                'lesson five title',
                'teacher name',
                'content type',
                'beginner - 1'
            ),
            new Video(
                '6',
                '#',
                'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                'lesson five title',
                'teacher name',
                'content type',
                'beginner - 1'
            ),
        ];
    }
}
