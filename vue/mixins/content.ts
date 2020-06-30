export default {
    props: {
        brand: {
            type: String,
            default: () => 'drumeo',
        },
        initialLimit: {
            type: String,
            default: () => '10',
        },
        statuses: {
            type: Array,
            default: () => ['published'],
        },
    },
    computed: {
    },
    data() {
        return {
            limit: this.initialLimit,
            sortBy: '-published_on',
        }
    },
};
