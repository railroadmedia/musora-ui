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
            page: 1,
        }
    },
    methods: {
        getPayload() {
            let payload = {
                brand: this.brand,
                limit: this.limit,
                page: this.page,
                statuses: this.statuses,
            };

            return payload;
        },
    },
};
