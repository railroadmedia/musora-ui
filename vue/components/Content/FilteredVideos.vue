<template>
    <div class="container w-full h-full mx-auto px-3 pt-4">
        <div class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6">
            <edge-group-filters
                :filters="edgeFilters"
                :title="edgeFiltersTitle"
                filterEventGroup="edgeFilterClick"
            ></edge-group-filters>
            <level-selector
                :current-level="level"
                title="set your skill level"
                @levelSelected="handleLevelSelected"
            ></level-selector>
        </div>

        <div class="flex flex-col medium:flex-row py-4">
            <div class="w-full mb-2 small:mb-0 medium:w-56 flex flex-col-reverse small:flex-col">
                <div class="collapse-trigger small:hidden text-center text-blue-500 uppercase font-semibold text-xs cursor-pointer">
                    <!-- todo: add logic for small screens filters toggle -->
                    <span class="collapse-trigger-open">show filters</span>
                    <span class="collapse-trigger-close">hide filters</span>
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
                    <pre>results</pre>
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

export default {
    components: {
        'edge-group-filters': EdgeGroupFilters,
        'level-selector': LevelSelector,
        'filter-group': FilterGroup,
        'filter-badge': FilterBadge,
    },
    props: {
        videosList: {
            type: Array,
        },
        edgeFiltersList: {
            type: Array,
        },
        edgeFiltersTitle: {
            type: String,
        },
        levelSelector: {
            type: Number,
        },
        filterGroups: {
            type: Array,
        }
    },
    data(): object {
        return {
            videos: [],
            edgeFilters: [],
            filters: [],
            level: 1,
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
    },
};
</script>
