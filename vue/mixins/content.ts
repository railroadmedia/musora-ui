import Filter from '../models/filter';
import FilterGroup from '../models/filterGroup';
import PaginationModel from '../models/pagination';

import ContentService from '../services/content';
import FiltersService from '../services/filters';

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
            default: () => 'relevance',
        },
        statuses: {
            type: Array,
            default: () => ['published'],
        },
        infiniteScroll: {
            type: Boolean,
            default: () => false,
        },
        resultsType: {
            type: String,
            default: () => 'lessons',
        },
        preloadData: {
            type: String
        },
        topicsFiltersKey: {
            type: String,
            default: () => 'topic',
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
            content: [],
            filters: [],
            loading: false,
            resetFilters: {topic: true, difficulty: true},
            pagination: new PaginationModel(this.initialLimit, this.initialPage, this.initialSort),
            limitOptions: [10, 20, 30, 40, 50],
            sortOptions: {
                'relevance': 'Relevance',
                'trend': 'Trending',
                'popular': 'Most Popular',
                'newest': 'Newest First',
                'oldest': 'Oldest First',
            },
        }
    },
    computed: {
        $_hasActiveFiler(): boolean {
            let has = false;

            this.filters.forEach((group) => {
                group.filters.forEach((filter) => {
                    has = has || filter.active;
                });
            });

            return has;
        },

        $_filters(): Filter[] {
            let result = [];

            this.filters.forEach((group) => {
                group.filters.forEach((filter) => {
                    result.push(filter);
                });
            });

            return result;
        },

        $_topics(): FilterGroup {
            let result;

            this.filters.forEach((group) => {
                if (group.id == this.topicsFiltersKey) {
                    result = group;
                }
            });

            return result;
        },

        $_difficulty(): FilterGroup {
            let result;

            this.filters.forEach((group) => {
                if (group.id == 'difficulty') {
                    result = group;
                }
            });

            return result;
        },

        $_sideFilters(): FilterGroup[] {
            let result = [];

            this.filters.forEach((group) => {
                if (group.id != 'topic' && group.id != 'difficulty' && group.id != this.topicsFiltersKey) {
                    result.push(group);
                }
            });

            return result;
        },

        $_sort: {
            get() {
                return this.pagination.sort;
            },
            set(value) {
                this.pagination.sort = value;
                this.fetchData(true);
            }
        },

        $_limit: {
            get() {
                return this.pagination.limit;
            },
            set(value) {
                this.pagination.limit = value;
                this.fetchData(true);
            }
        },
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

        setupContent(response, appendContent) {
            if (!appendContent) {
                this.content = [];
            }

            this.content = [
                ...this.content,
                ...ContentService.getContentFromResponse(response)
            ];
        },

        infiniteScrollEventHandler() {
            const scrollPosition = window.pageYOffset + window.innerHeight;
            const scrollBuffer = (document.body.scrollHeight * 0.75);

            if (!this.loading && (scrollPosition >= scrollBuffer) && (this.pagination.page < this.pagination.pages)) {
                this.fetchData(false, true);
            }
        },

        clearFilters() {
            this.filters = this.filters.map((group) => {

                group.filters = group.filters.map((item) => {
                    item.active = false;
                    return item;
                });

                return group;
            });

            this.fetchData(true);
        },

        clearFilterGroup(filterGroup) {
            this.filters = this.filters.map((group) => {
                if (group.id == filterGroup.id) {
                    group.filters = group.filters.map((item) => {
                        item.active = false;
                        return item;
                    });
                }

                return group;
            });

            this.fetchData(true);
        },

        resetSideFilters() {
            this.$_sideFilters.forEach((group) => {
                group.filters = group.filters.map((item) => {
                    item.active = false;
                    return item;
                });
            });
        },

        handleFilterClick(filter) {

            this.filters = this.filters.map((group) => {

                if (group.id == filter.groupId) {

                    group.filters = group.filters.map((item) => {
                        if (item.id == filter.id) {
                            item.active = !item.active;
                        }
                        return item;
                    });
                }

                return group;
            });

            if (this.resetFilters[filter.groupId]) {
                this.resetSideFilters();
            }

            this.fetchData(true);
        },

        handleFilterBadgeClicked(filter) {
            this.filters = this.filters.map((group) => {

                if (group.id == filter.groupId) {

                    group.filters = group.filters.map((item) => {
                        if (item.id == filter.id) {
                            item.active = false;
                        }
                        return item;
                    });
                }

                return group;
            });

            this.fetchData(true);
        },

        handleCollapseToggle(filterGroup) {
            this.filters = this.filters.map((group) => {
                if (group.id == filterGroup.id) {
                    group.collapsed = !group.collapsed;
                }

                return group;
            });
        },

        fetchData(resetPage, appendContent) {
            // noop - components will implement the method
        }
    },
};
