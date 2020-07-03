<template>
    <div>
        <div class="mx-auto w-full container px-3 h-full pt-4">
            <div class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6 uppercase">
                <div class="large:flex-1 rounded-lg overflow-hidden bg-edge-blue">
                    <edge-group-filters
                        :filters="edgeFilters"
                        :title="edgeFiltersTitle"
                        filterEventGroup="edgeFilterClick"
                    ></edge-group-filters>
                </div>
            </div>
        </div>

        <div class="mx-auto w-full container lg:pl-3 h-full">
            <div class="flex flex-col medium:flex-row py-4">
                <div class="w-full mb-2 small:mb-0 medium:w-56 flex flex-col-reverse small:flex-col px-3 lg:px-0">
                    <filters-group
                        :filter-group="filtersGroup"
                        @collapseToggle="handleCollapseToggle"
                        v-if="filtersGroup"
                    ></filters-group>
                </div>

                <div class="w-full lg:ml-5">
                    <div class="px-3">
                        <div class="flex content-center justify-between text-medium-gray text-xs">
                            <div>
                                <span class="font-semibold">{{ results.count }}</span> <span class="capitalize">{{ results.type }}</span>
                            </div>
                            <div>
                                <span class="font-semibold">Sort by: </span>
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

                    <div class="hidden small:flex text-xs flex-wrap items-center text-medium-gray py-2 px-3">
                        <div class="py-2 mr-1" v-show="$_hasActiveFiler">
                            <a
                                href="#"
                                class="text-edge-blue uppercase font-bold font-roboto"
                                @click.stop.prevent="clearFilters()"
                            >clear all</a>
                        </div>
                        <filter-badge
                            v-for="filter in filtersGroup.filters"
                            :key="filter.id"
                            :filter="filter"
                            @filterBadgeClicked="handleFilterBadgeClicked"
                        ></filter-badge>
                    </div>

                    <div class="py-2">
                        <my-list-content-card
                            v-for="item in videos"
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
import FiltersService from '../../services/filters';
import VideosService from '../../services/videos';

import EdgeGroupFilters from '../Filters/EdgeGroup';
import FiltersGroup from '../Filters/Group';
import FilterBadge from '../Blocks/FilterBadge';
import MyListContentCard from '../ContentCards/MyList';

export default {
    components: {
        'edge-group-filters': EdgeGroupFilters,
        'filters-group': FiltersGroup,
        'filter-badge': FilterBadge,
        'my-list-content-card': MyListContentCard,
    },
    props: {
        videosList: {
            type: Array,
        },
        edgeFiltersList: {
            type: Array,
            default: () => [],
        },
        filtersList: {
            type: Object,
        },
        edgeFiltersTitle: {
            type: String,
            default: () => '',
        },
    },
    data(): object {
        return {
            videos: [],
            edgeFilters: [],
            filtersGroup: undefined,
            results: {
                count: 114,
                type: 'lessons',
                sort: 'Newest First'
            },
            sortOptions: ['Newest First', 'Alphabetical'],
        };
    },
    computed: {
        $_hasActiveFiler(): boolean {
            let has = false;

            this.filtersGroup.filters.forEach((filter) => {
                has = has || filter.active;
            });

            return has;
        },
    },
    mounted(): void {
        this.videos = VideosService.getVideosFromArray(this.videosList);
        this.edgeFilters = FiltersService.getFiltersFromArray(this.edgeFiltersList, 'edge-group');
        this.filtersGroup = FiltersService.getFilterGroupsFromArray([this.filtersList]).pop();

        this.$root.$on('filterClicked', this.handleFilterClick);
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
            } else {
                this.filtersGroup.filters = this.filtersGroup.filters.map((item) => {
                    if (item.id == filter.id) {
                        item.active = !item.active;
                    }
                    return item;
                });
            }
        },

        handleCollapseToggle(filterGroup) {
            this.filtersGroup.collapsed = !this.filtersGroup.collapsed;
        },

        clearFilters() {
            this.filtersGroup.filters = this.filtersGroup.filters.map((item) => {
                item.active = false;
                return item;
            });
            // todo - update with API call
        },

        handleFilterBadgeClicked(filter) {
            this.filtersGroup.filters = this.filtersGroup.filters.map((item) => {
                if (item.id == filter.id) {
                    item.active = false;
                }
                return item;
            });
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