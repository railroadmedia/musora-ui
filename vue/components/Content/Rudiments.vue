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
        preloadData: {
            type: String
        },
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
        };
    },
    mounted(): void {
        this.$root.$on('filterClicked', this.handleFilterClick);

        let preloadData = JSON.parse(this.preloadData);

        this.setupFilters(preloadData);
        this.setupContent(preloadData);
        this.setupPagination(preloadData);
    },
    methods: {
        handleFilterClick(filter) {
            // todo - update with API call

            if (filter.groupId == 'edge-group') {
                this.edgeFilters = this.edgeFilters.map((item) => {
                    if (item.id == filter.id) {
                        item.active = !item.active;
                    }

                    return item;
                });
            }
        },

        setupFilters(response) {

            let filterGroups = FiltersService.getFilterGroupsFromResponse(response);

            filterGroups.forEach(filterGroup => {
                if (filterGroup.id == 'topic') {
                    this.topics = filterGroup;
                }
            });
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
    },
};
</script>
