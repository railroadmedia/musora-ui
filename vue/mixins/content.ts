import PaginationModel from '../models/pagination';

export default {
    props: {
        brand: {
            type: String,
            default: () => 'drumeo',
        },
        initialLimit: {
            type: Number,
            default: () => 20,
        },
        initialPage: {
            type: Number,
            default: () => 1,
        },
        initialSort: {
            type: String,
            default: () => '-published_on',
        },
        statuses: {
            type: Array,
            default: () => ['published'],
        },
        infiniteScroll: {
            type: Boolean,
            default: () => false,
        },
    },
    mounted(): void {
        if (this.infiniteScroll) {
            window.addEventListener('scroll', this.infiniteScrollEventHandler);
        }
    },
    beforeDestroy() {
        if (this.infiniteScroll) {
            window.removeEventListener('scroll', this.infiniteScrollEventHandler);
        }
    },
    data() {
        return {
            pagination: new PaginationModel(this.initialLimit, this.initialPage, this.initialSort),
            limitOptions: [10, 20, 30, 40, 50],
            sortOptions: {
                '-published_on': 'Newest First',
                '-test': 'Alphabetical',
            },
        }
    },
    methods: {
        getPayload() {
            let payload = {
                brand: this.brand,
                statuses: this.statuses,
                limit: this.pagination.limit,
                page: this.pagination.page,
                sort: this.pagination.sort,
            };

            return payload;
        },

        setupPagination(response) {
            if (response.meta && response.meta.pagination) {
                let pagination = response.meta.pagination;
                this.pagination.total = pagination.total;
                this.pagination.limit = pagination.per_page;
                this.pagination.page = pagination.current_page;
                this.pagination.pages = pagination.total_pages;
            }
        },

        infiniteScrollEventHandler() {
            // no-op, will be overriden in component
        },
    },
};
