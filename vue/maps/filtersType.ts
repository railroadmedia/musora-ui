import Filter from '../models/filter';

export default {
    artist: {
        type: 'string',
        label: 'Artist',
        icon: 'fa-times-circle',
    },
    bpm: {
        type: 'string',
        label: 'Tempo',
        icon: 'fa-times-circle',
    },
    style: {
        type: 'string',
        label: 'Style',
        icon: 'fa-times-circle',
    },
    favorites: {
        type: 'string',
        label: 'favorites',
        icon: 'fa-times-circle',
    },
    difficulty: {
        type: 'string',
        label: 'difficulty'
    },
    topic: {
        type: 'string',
        label: 'Topic'
    },
    'content_type': {
        type: 'string',
        label: 'Content Type',
        icon: 'fa-times-circle',
    },
    instructor: {
        type: 'entity',
        label: 'Instructor',
        icon: 'fa-times-circle',
        constructor: (value, groupId) => {
            return new Filter(
                value.id,
                'instructor', // current block key
                value.slug,
                value.name,
                0,
                false,
                'fa-times-circle', // this.instructor.icon value
                value.id
            );
        }
    },
}
