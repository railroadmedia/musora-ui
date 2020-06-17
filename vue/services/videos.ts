import Video from '../models/video';

export default class Videos {
    static getVideos(): Video[] {
        return [
            new Video(
                1,
                '#',
                'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                'lesson one title',
                'teacher name',
                'content type',
                'beginner - 1'
            ),
            new Video(
                2,
                '#',
                'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                'lesson two title',
                'teacher name',
                'content type',
                'beginner - 1'
            ),
            new Video(
                3,
                '#',
                'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                'lesson three title',
                'teacher name',
                'content type',
                'beginner - 1'
            ),
            new Video(
                4,
                '#',
                'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                'lesson four title',
                'teacher name',
                'content type',
                'beginner - 1'
            ),
            new Video(
                5,
                '#',
                'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                'lesson five title',
                'teacher name',
                'content type',
                'beginner - 1'
            ),
            new Video(
                6,
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
