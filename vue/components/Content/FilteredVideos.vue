<template>
    <div class="container w-full h-full mx-auto px-3 pt-4 pb-20">
        <div
            class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6"
            v-if="!edgeFiltersDisabled || !levelSelectorDisabled"
        >
            <edge-group-filters
                :filters="edgeFilters"
                :title="edgeFiltersTitle"
                filterEventGroup="edgeFilterClick"
                v-if="!edgeFiltersDisabled"
            ></edge-group-filters>
            <level-selector
                :current-level="level"
                title="set your skill level"
                @levelSelected="handleLevelSelected"
                v-if="!levelSelectorDisabled"
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
                            v-for="group in filters"
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
                            <span class="font-bold">{{ results.count }}</span> <span class="capitalize">{{ results.type }}</span>
                        </div>
                        <div class="flex-none flex">
                            <div v-if="results.perPage">
                                <span class="font-bold">Per Page: </span>
                                <select class="bg-white" v-model="results.perPage">
                                    <option
                                        v-for="option in perPageOptions"
                                        :key="option"
                                        :value="option"
                                    >{{ option }}</option>
                                </select>
                            </div>
                            <div class="ml-8">
                                <span class="font-bold">Sort by: </span>
                                <select class="bg-white">
                                    <option
                                        v-for="option in sortOptions"
                                        :key="option"
                                        :value="option"
                                    >{{ option }}</option>
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
                        v-for="item in videos"
                        :key="item.id"
                    >
                        <simple-video-card :video="item"></simple-video-card>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import FiltersService from '../../services/filters';
import VideosService from '../../services/videos';

import Filter from '../../models/filter';

import EdgeGroupFilters from '../Filters/EdgeGroup';
import LevelSelector from '../Filters/LevelSelector';
import FilterGroup from '../Filters/Group';
import FilterBadge from '../Blocks/FilterBadge';
import SimpleVideoCard from '../VideoCards/Simple'

export default {
    components: {
        'edge-group-filters': EdgeGroupFilters,
        'level-selector': LevelSelector,
        'filter-group': FilterGroup,
        'filter-badge': FilterBadge,
        'simple-video-card': SimpleVideoCard,
    },
    props: {
        videosList: {
            type: Array,
        },
        edgeFiltersDisabled: {
            type: Boolean,
            default: () => false,
        },
        edgeFiltersList: {
            type: Array,
            default: () => [],
        },
        edgeFiltersTitle: {
            type: String,
            default: () => '',
        },
        levelSelectorDisabled: {
            type: Boolean,
            default: () => false,
        },
        levelSelector: {
            type: Number,
            default: () => 1,
        },
        filterGroups: {
            type: Array,
        },
        videosPerRow: {
            type: Number,
            default: () => 4,
        },
    },
    data(): object {
        return {
            videos: [],
            edgeFilters: [],
            filters: [],
            level: 1,
            results: {
                count: 114,
                type: 'lessons',
                // perPage: 20,
                sort: 'Newest First'
            },
            perPageOptions: [10, 20, 30, 40, 50],
            sortOptions: ['Newest First', 'Alphabetical'],
            collapsed: true,
        };
    },
    computed: {
        $_filters(): Filter[] {
            let result = [];

            this.filters.forEach((group) => {
                group.filters.forEach((filter) => {
                    result.push(filter);
                });
            });

            return result;
        },

        $_hasActiveFiler(): boolean {
            let has = false;

            this.filters.forEach((group) => {
                group.filters.forEach((filter) => {
                    has = has || filter.active;
                });
            });

            return has;
        },

        $_gridClasses(): string[] {
            let classes = {
                4: ['grid-cols-1', 'gap-10', 'small:gap-4', 'small:row-gap-8', 'small:grid-cols-3', 'large:grid-cols-4'],
                5: ['grid-cols-1', 'gap-10', 'small:gap-4', 'small:row-gap-8', 'small:grid-cols-3', 'large:grid-cols-5'],
            };
            return classes[this.videosPerRow] ? classes[this.videosPerRow] : classes[4];
        },

        $_resultsClasses(): string[] {
            let classes = [];

            if (this.results.perPage) {
                classes = ['flex-col', 'sm:flex-row'];
            } else {
                classes = ['flex-row'];
            }

            return classes;
        },
    },
    mounted(): void {
        this.videos = VideosService.getVideosFromArray(this.videosList);
        this.edgeFilters = FiltersService.getFiltersFromArray(this.edgeFiltersList, 'edge-group');
        this.level = this.levelSelector || 1;
        this.filters = FiltersService.getFilterGroupsFromArray(this.filterGroups);

        this.$root.$on('filterClicked', this.handleFilterClick);
    },
    methods: {
        clearFilters() {
            this.filters = this.filters.map((group) => {

                group.filters = group.filters.map((item) => {
                    item.active = false;
                    return item;
                });

                return group;
            });
            // todo - update with API call
        },

        handleFilterClick(filter) {
            // todo - update with API call

            if (filter.groupId == 'edge-group') {
                this.edgeFilters = this.edgeFilters.map((item) => {
                    if (item.id == filter.id) {
                        item.active = !item.active;
                    }

                    return item;
                });
            } else {
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
            }
        },

        handleLevelSelected(event) {
            // todo - update with API call
            this.level = event.level;
        },

        handleCollapseToggle(filterGroup) {
            this.filters = this.filters.map((group) => {
                if (group.id == filterGroup.id) {
                    group.collapsed = !group.collapsed;
                }

                return group;
            });
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
        },

        toggleCollapse(): void {
            this.collapsed = !this.collapsed;
        },
    },
};
</script>
