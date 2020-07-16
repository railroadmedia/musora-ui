import Filter from '../models/filter';

export default {
    artist: {
        type: 'string',
        label: 'Artist',
        icon: 'icon-info',
    },
    bpm: {
        type: 'string',
        label: 'Tempo',
        icon: 'icon-info',
    },
    style: {
        type: 'string',
        label: 'Style',
        icon: 'icon-info',
    },
    favorites: {
        type: 'string',
        label: 'favorites',
        icon: 'icon-info',
    },
    difficulty: {
        type: 'string',
        label: 'difficulty'
    },
    topic: {
        type: 'string',
        label: 'Topic'
    },
    'content-type': {
        type: 'string',
        label: 'Content Type',
        icon: 'icon-info',
    },
    instructor: {
        type: 'entity',
        label: 'Instructor',
        icon: 'icon-info',
        constructor: (value, groupId) => {
            return new Filter(
                value.id,
                'instructor', // current block key
                value.slug,
                value.name,
                0,
                false, // todo - fix active
                'icon-info', // this.instructor.icon value
                value.id
            );
        }
    },
}
