<template>
    <div>
        <div class="mx-auto w-full container px-3 h-full pt-4">
            <topics-group-filters
                :filter-group="topics"
                :title="topicsFiltersTitle"
                v-if="topics"
            ></topics-group-filters>
        </div>
        <div class="mx-auto w-full container h-full py-4">
            <rudiment-content-card
                v-for="item in content"
                :key="item.id"
                :content="item"
            ></rudiment-content-card>
        </div>
    </div>
</template>

<script lang="ts">
import ContentService from '../../services/content';
import FiltersService from '../../services/filters';

import TopicsGroupFilters from '../Filters/TopicsGroup';
import RudimentContentCard from '../ContentCards/Rudiment';

import ContentMixin from '../../mixins/content';

export default {
    components: {
        'topics-group-filters': TopicsGroupFilters,
        'rudiment-content-card': RudimentContentCard,
    },
    mixins: [ContentMixin],
    props: {
        topicsFiltersDisabled: {
            type: Boolean,
            default: () => false,
        },
        topicsFiltersTitle: {
            type: String,
            default: () => '',
        },
    },
    data(): object {
        return {
            content: [],
            topics: null,
            pageContentTypeFilterGroup: null,
            loading: false,
        };
    },
    mounted(): void {
        this.$root.$on('filterClicked', this.handleFilterClick);

        this.topics = FiltersService.getGlobalTopicFilters('topic', 'rudiments', {});

        let preloadData = JSON.parse(this.preloadData);

        this.setupContent(preloadData);
        this.setupPagination(preloadData);

        this.pageContentTypeFilterGroup = FiltersService.getRudimentsFilterGroup();
    },
    methods: {
        handleFilterClick(filter) {

            this.topics.filters = this.topics.filters.map((item) => {
                if (item.id == filter.id) {
                    item.active = !item.active;
                }
                return item;
            });

            this.fetchData(true);
        },

        fetchData(resetPage, appendContent) {
            this.loading = true;

            if (resetPage) {
                this.pagination.page = 1;
            } else if (appendContent) {
                this.pagination.page = parseInt(this.pagination.page) + 1;
            }

            let payload = this.getPayload();

            payload = FiltersService.decorateRequestParams(payload, [this.topics, this.pageContentTypeFilterGroup]);

            console.log('::fetchData payload: %s', JSON.stringify(payload));

            ContentService
                .getContent(payload)
                .then((response) => {

                    this.setupContent(response.data, appendContent);
                    this.setupPagination(response.data);

                    setTimeout(() => {
                        this.loading = false;
                    }, 500);
                });
        },
    },
};
</script>
