<template>
    <div class="container w-full h-full mx-auto px-3 pt-4 pb-20">
        <div
            class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6"
            v-if="!topicsFiltersDisabled || !levelSelectorDisabled"
        >
            <topics-group-filters
                :title="topicsFiltersTitle"
                :filter-group="$_topics"
                v-if="!topicsFiltersDisabled && $_topics"
            ></topics-group-filters>
            <level-selector
                title="set your skill level"
                @levelSelected="handleLevelSelected"
                :filter-group="$_difficulty"
                v-if="!levelSelectorDisabled && $_difficulty"
            ></level-selector>
        </div>

        <div class="flex flex-col medium:flex-row py-4">
            <div class="w-full mb-2 small:mb-0 medium:w-56 flex flex-col-reverse small:flex-col">
                <div
                    class="collapse-trigger small:hidden text-center text-blue-500 uppercase font-semibold text-xs cursor-pointer"
                    :class="{active: !collapsed}"
                    @click.stop.prevent="toggleCollapse()"
                >
                    <span v-show="collapsed">show filters</span>
                    <span v-show="!collapsed">hide filters</span>
                </div>
                <div class="collapse-container small:expand overflow-hidden">
                    <div class="flex flex-col flex-no-wrap">
                        <filter-group
                            v-for="group in $_sideFilters"
                            :key="group.id"
                            :filter-group="group"
                            @collapseToggle="handleCollapseToggle"
                        ></filter-group>
                    </div>
                </div>
            </div>
            <div class="w-full medium:ml-8">
                <div class="my-4 medium:my-0">
                    <div
                        class="flex content-center text-medium-gray text-sm"
                        :class="$_resultsClasses"
                    >
                        <div class="flex-1">
                            <span class="font-bold">{{ pagination.total }}</span> <span class="capitalize">{{ resultsType }}</span>
                        </div>
                        <div class="flex-none flex">
                            <div v-if="showPageSize && pagination.limit">
                                <span class="font-bold">Per Page: </span>
                                <select class="bg-white" v-model="$_limit">
                                    <option
                                        v-for="option in limitOptions"
                                        :key="option"
                                        :value="option"
                                    >{{ option }}</option>
                                </select>
                            </div>
                            <div class="ml-8">
                                <span class="font-bold">Sort by: </span>
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
                </div>

                <div class="hidden small:flex text-xs flex-wrap items-center text-dark-gray py-2">
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

                <div class="grid py-2" :class="$_gridClasses">
                    <div
                        v-for="item in content"
                        :key="item.id"
                    >
                        <default-content-card :content="item"></default-content-card>
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
import LevelSelector from '../Filters/LevelSelector';
import FilterGroupComponent from '../Filters/Group';
import FilterBadge from '../Blocks/FilterBadge';
import DefaultContentCard from '../ContentCards/Default';

import ContentMixin from '../../mixins/content';

export default {
    components: {
        'topics-group-filters': TopicsGroupFilters,
        'level-selector': LevelSelector,
        'filter-group': FilterGroupComponent,
        'filter-badge': FilterBadge,
        'default-content-card': DefaultContentCard,
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
        levelSelectorDisabled: {
            type: Boolean,
            default: () => false,
        },
        levelSelector: {
            type: String,
            default: () => '1',
        },
        cardsPerRow: {
            type: Number,
            default: () => 4,
        },
        showPageSize: {
            type: Boolean,
            default: () => false,
        },
        useEdgeContentTypeFilters: {
            type: Boolean,
            default: () => false,
        },
        useCoursesContentTypeFilters: {
            type: Boolean,
            default: () => false,
        },
        usePlayAlongsContentTypeFilters: {
            type: Boolean,
            default: () => false,
        },
        useStudentFocusContentTypeFilters: {
            type: Boolean,
            default: () => false,
        },
        useProgressFilters: {
            type: Boolean,
            default: () => false,
        },
    },
    data(): object {
        return {
            collapsed: true,
        };
    },
    computed: {

        $_gridClasses(): string[] {
            let classes = {
                4: ['grid-cols-1', 'gap-10', 'small:gap-4', 'small:row-gap-8', 'small:grid-cols-3', 'large:grid-cols-4'],
                5: ['grid-cols-1', 'gap-10', 'small:gap-4', 'small:row-gap-8', 'small:grid-cols-3', 'large:grid-cols-5'],
            };
            return classes[this.cardsPerRow] ? classes[this.cardsPerRow] : classes[4];
        },

        $_resultsClasses(): string[] {
            let classes = [];

            if (this.showPageSize) {
                classes = ['flex-col', 'sm:flex-row'];
            } else {
                classes = ['flex-row'];
            }

            return classes;
        },
    },
    mounted(): void {
        this.$root.$on('filterClicked', this.handleFilterClick);

        let preloadData = JSON.parse(this.preloadData);

        this.setupFilters(preloadData);
        this.setupContent(preloadData);
        this.setupPagination(preloadData);

        this.selectFilterByValue('difficulty', this.levelSelector || 1);
    },
    methods: {

        handleLevelSelected(filter) {

            this.filters = this.filters.map((group) => {

                if (group.id == 'difficulty') {

                    group.filters = group.filters.map((item) => {
                        if (filter && item.id == filter.id) {
                            item.active = true;
                        } else {
                            item.active = false;
                        }
                        return item;
                    });
                }

                return group;
            });

            this.resetSideFilters();

            this.fetchData(true);
        },

        selectFilterByValue(groupId, value) {
            this.filters = this.filters.map((group) => {

                if (group.id == groupId) {

                    group.filters = group.filters.map((item) => {
                        if (item.value == value) {
                            item.active = true;
                        }
                        return item;
                    });
                }

                return group;
            });
        },

        toggleCollapse(): void {
            this.collapsed = !this.collapsed;
        },

        setupFilters(response) {
            let filters = FiltersService.getFilterGroupsFromResponse(response);

            if (this.useEdgeContentTypeFilters) {
                let edgeContentTypeFilterGroup = FiltersService.getEdgeContentTypeFilterGroup(this.filters);

                this.filters = [
                    edgeContentTypeFilterGroup,
                    ...filters
                ];
            }

            if (
                this.useCoursesContentTypeFilters
                || this.usePlayAlongsContentTypeFilters
                || this.useStudentFocusContentTypeFilters
            ) {
                this.filters = filters;
            }

            if (this.useProgressFilters) {
                let progressFilterGroup = FiltersService.getProgressFilterGroup(this.filters);

                this.filters.push(progressFilterGroup);
            }
        },

        getFilters() {
            let filters = [];

            if (this.useEdgeContentTypeFilters) {

                let hasContentTypeFilter = false;

                this.filters.forEach((group) => {
                    if (group.id == 'content-type') {
                        group.filters.forEach((item) => {
                            if (item.active) {
                                hasContentTypeFilter = true;
                            }
                        });
                    }
                });

                if (!hasContentTypeFilter) {
                    // if no content type filter is selected, all content types should be pulled
                    filters = this.filters.map((group) => {

                        let result = group;

                        if (group.id == 'content-type') {

                            let groupCopy = group.copy();

                            groupCopy.filters = group.filters.map((item) => {
                                let copy = item.copy();
                                copy.active = true;
                                return copy;
                            });

                            result = groupCopy;
                        }

                        return result;
                    });
                } else {
                    filters = this.filters;
                }
            }

            if (this.useCoursesContentTypeFilters) {
                filters = [
                    FiltersService.getCoursesFilterGroup(),
                    ...this.filters
                ];
            }

            if (this.usePlayAlongsContentTypeFilters) {
                filters = [
                    FiltersService.getPlayAlongsFilterGroup(),
                    ...this.filters
                ];
            }

            if (this.useStudentFocusContentTypeFilters) {
                filters = [
                    FiltersService.getStudentFocusFilterGroup(),
                    ...this.filters
                ];
            }

            return filters;
        },

        fetchData(resetPage, appendContent) {

            this.loading = true;

            if (resetPage) {
                this.pagination.page = 1;
            } else if (appendContent) {
                this.pagination.page = parseInt(this.pagination.page) + 1;
            }

            let payload = this.getPayload();

            payload = FiltersService.decorateRequestParams(payload, this.getFilters());

            ContentService
                .getContent(payload)
                .then((response) => {

                    this.setupFilters(response.data);
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
