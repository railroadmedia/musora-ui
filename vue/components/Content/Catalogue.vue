<template>
    <div class="container w-full h-full mx-auto px-3 pt-4 pb-20">
        <div
            class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6"
            v-if="!edgeFiltersDisabled || !levelSelectorDisabled"
        >
            <edge-group-filters
                :title="edgeFiltersTitle"
                :filter-group="$_topics"
                filterEventGroup="edgeFilterClick"
                v-if="!edgeFiltersDisabled && $_topics"
            ></edge-group-filters>
            <level-selector
                :current-level="level"
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
import VideosService from '../../services/videos';

import Filter from '../../models/filter';
import FilterGroup from '../../models/filterGroup';

import EdgeGroupFilters from '../Filters/EdgeGroup';
import LevelSelector from '../Filters/LevelSelector';
import FilterGroupComponent from '../Filters/Group';
import FilterBadge from '../Blocks/FilterBadge';
import DefaultContentCard from '../ContentCards/Default';

import ContentMixin from '../../mixins/content';

export default {
    components: {
        'edge-group-filters': EdgeGroupFilters,
        'level-selector': LevelSelector,
        'filter-group': FilterGroupComponent,
        'filter-badge': FilterBadge,
        'default-content-card': DefaultContentCard,
    },
    mixins: [ContentMixin],
    props: {
        videosList: { // todo - remove
            type: Array,
        },
        edgeFiltersDisabled: { // todo - rename
            type: Boolean,
            default: () => false,
        },
        edgeFiltersTitle: { // todo - rename
            type: String,
            default: () => '',
        },
        levelSelectorDisabled: {
            type: Boolean,
            default: () => false,
        },
        levelSelector: {
            type: String,
            default: () => 1,
        },
        videosPerRow: { // todo - rename
            type: Number,
            default: () => 4,
        },
        preloadData: {
            type: String
        }
    },
    data(): object {
        return {
            videos: [],
            content: [],
            filters: [],
            level: "1",
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

            this.$_sideFilters.forEach((group) => {
                group.filters.forEach((filter) => {
                    result.push(filter);
                });
            });

            return result;
        },

        $_topics(): FilterGroup {
            let result;

            this.filters.forEach((group) => {
                if (group.id == 'topic') {
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
                if (group.id != 'topic' && group.id != 'difficulty') {
                    result.push(group);
                }
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
        // this.videos = VideosService.getVideosFromArray(this.videosList);
        this.level = this.levelSelector || 1;

        this.$root.$on('filterClicked', this.handleFilterClick);

        let preloadData = JSON.parse(this.preloadData);

        // console.log("loaded");

        this.setupFilters(preloadData);
        this.setupContent(preloadData);

        // this.fetchData();
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
            this.fetchData();
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

            this.fetchData();
        },

        handleLevelSelected(event) {
            // todo - refactor
            this.level = event.level;
            this.fetchData();
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
            this.fetchData();
        },

        toggleCollapse(): void {
            this.collapsed = !this.collapsed;
        },

        setupFilters(response) {
            this.filters = FiltersService.getFilterGroupsFromResponse(response);
        },

        setupContent(response) {
            this.content = ContentService.getContentFromResponse(response);

            // console.log("::setupContent content: %s", JSON.stringify(content));
        },

        fetchData() {
            let payload = this.getPayload();

            payload = FiltersService.decorateRequestParams(payload, this.filters);

            ContentService
                .getContent(payload)
                .then((response) => {

                    this.setupFilters(response.data);
                    this.setupContent(response.data);

                    // this.videos = VideosService.getVideosFromResponse(response);
                });

            // todo - add error handling
        },
    },
};
</script>
