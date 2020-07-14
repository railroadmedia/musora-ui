<template>
    <div>
        <div class="mx-auto w-full container px-3 h-full pt-4">
            <div class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6 uppercase">
                <div class="large:flex-1 rounded-lg overflow-hidden bg-edge-blue">
                    <topics-group-filters
                        :filter-group="$_topics"
                        :title="topicsFiltersTitle"
                        v-if="$_topics"
                    ></topics-group-filters>
                </div>
            </div>
        </div>

        <div class="mx-auto w-full container lg:pl-3 h-full">
            <div class="flex flex-col medium:flex-row py-4">
                <div class="w-full mb-2 small:mb-0 medium:w-56 flex flex-col-reverse small:flex-col px-3 lg:px-0">
                    <filters-group
                        :filter-group="$_sideFilters"
                        @collapseToggle="handleCollapseToggle"
                        v-if="$_sideFilters"
                    ></filters-group>
                </div>

                <div class="w-full lg:ml-5">
                    <div class="px-3">
                        <div class="flex content-center justify-between text-medium-gray text-sm">
                            <div>
                                <span class="font-semibold">{{ pagination.total }}</span> <span class="capitalize">{{ resultsType }}</span>
                            </div>
                            <div>
                                <span class="font-semibold">Sort by: </span>
                                <select class="bg-white" v-model="$_sort">
                                    <option
                                        v-for="(text, value, index) in sortOptions"
                                        :key="index"
                                        :value="value"
                                    >{{ text }}</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="hidden small:flex text-xs flex-wrap items-center text-medium-gray py-2 px-3">
                        <div class="py-2 mr-1" v-show="$_hasActiveFiler">
                            <a
                                href="#"
                                class="text-edge-blue uppercase font-bold font-roboto"
                                @click.stop.prevent="clearFilters()"
                            >clear all</a>
                        </div>
                        <filter-badge
                            v-for="filter in $_filters"
                            :key="filter.id"
                            :filter="filter"
                            @filterBadgeClicked="handleFilterBadgeClicked"
                        ></filter-badge>
                    </div>

                    <div class="py-2">
                        <my-list-content-card
                            v-for="item in content"
                            :key="item.id"
                            :content="item"
                        ></my-list-content-card>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import ContentService from '../../services/content';
import FiltersService from '../../services/filters';

import Filter from '../../models/filter';
import FilterGroup from '../../models/filterGroup';

import TopicsGroupFilters from '../Filters/TopicsGroup';
import FiltersGroup from '../Filters/Group';
import FilterBadge from '../Blocks/FilterBadge';
import MyListContentCard from '../ContentCards/MyList';

import ContentMixin from '../../mixins/content';

export default {
    components: {
        'topics-group-filters': TopicsGroupFilters,
        'filters-group': FiltersGroup,
        'filter-badge': FilterBadge,
        'my-list-content-card': MyListContentCard,
    },
    mixins: [ContentMixin],
    props: {
        preloadData: {
            type: String
        },
        topicsFiltersTitle: {
            type: String,
            default: () => '',
        },
    },
    data(): object {
        return {
        };
    },
    computed: {
        $_filters(): Filter[] {
            let result = [];

            if (!this.$_sideFilters) {
                return [];
            }

            this.$_sideFilters.filters.forEach((filter) => {
                result.push(filter);
            });

            return result;
        },

        $_sideFilters(): FilterGroup {
            let result;

            this.filters.forEach((group) => {
                if (group.id == 'content-type') {
                    result = group;
                }
            });

            return result;
        },
    },
    mounted(): void {

        let preloadData = JSON.parse(this.preloadData);

        this.setupFilters(preloadData);
        this.setupContent(preloadData);
        this.setupPagination(preloadData);

        this.$root.$on('filterClicked', this.handleFilterClick);
    },
    methods: {

        setupFilters(response) {

            let filterGroups = FiltersService.getFilterGroupsFromResponse(response);
            this.filters = [];

            filterGroups.forEach(filterGroup => {
                if (filterGroup.id == 'topic' || filterGroup.id == 'content-type') {
                    this.filters.push(filterGroup);
                }
            });
        },

        fetchData(resetPage, appendContent) {

            this.loading = true;

            if (resetPage) {
                this.pagination.page = 1;
            } else if (appendContent) {
                this.pagination.page = parseInt(this.pagination.page) + 1;
            }

            let payload = this.getPayload();

            payload = FiltersService.decorateRequestParams(payload, this.filters);

            ContentService
                .getMyList(payload)
                .then((response) => {

                    this.setupFilters(response.data);
                    this.setupContent(response.data, appendContent);
                    this.setupPagination(response.data);

                    setTimeout(() => {
                        this.loading = false;
                    }, 500);
                });

            // todo - add error handling
        },
    },
};
</script>

<style type="text/css">
.my-list-content-card:hover {
    background-color: #f3f9ff;
}
.content-card-play {
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-color: rgba(0,0,0,.4);
}
.my-list-content-card:hover .content-card-play {
    visibility: visible;
    opacity: 1;
}
</style>