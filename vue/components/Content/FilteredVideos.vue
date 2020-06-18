<template>
    <div class="container w-full h-full mx-auto px-3 pt-4">
        <div class="w-full mb-6 space-y-4 flex flex-col large:flex-row large:space-x-3 large:space-y-0 large:mt-6">
            <div class="flex-1">
                <edge-group-filters
                    :filters="edgeFilters"
                    :title="edgeFiltersTitle"
                    filterEventGroup="edgeFilterClick"
                ></edge-group-filters>
            </div>
            <div class="flex-1 rounded-lg overflow-hidden">
                <h4 class="collapse-trigger py-2 px-2 cursor-pointer small:cursor-default small:px-0 flex justify-between small:block small:text-center text-white bg-edge-dark-blue font-bold text-sm small:text-lg"><span class="font-roboto">set your skill level</span><div class="small:hidden flex items-center"><div class="flex items-center justify-center border rounded-full w-4 h-4 mr-2 text-xs text-medium-gray">?</div><i class="icon-home text-lg font-bold small:hidden collapse-trigger-open"></i><i class="icon-hammer text-lg font-bold small:hidden collapse-trigger-close"></i></div></h4>
                <div class="collapse-container small:expand">
                    <div class="px-2 py-2 small:px-6">
                        <div class="grid grid-cols-5 cursor-pointer">
                            <div class="py-4 level-select">
                                <div style="height: 12px;" class="border-2 border-edge-blue bg-white relative rounded-l-full level-bar">
                                    <input type="radio" class="hidden" id="level-one" name="level" value="1">
                                    <div style="height: 30px; width: 30px; top: -11px; right: -11px" class="border-4 border-edge-blue bg-white rounded-full absolute hidden z-10 level-ind"></div>
                                </div>
                            </div>
                            <div class="py-4 level-select level-checked">
                                <div style="height: 12px;" class="border-2 border-l-0 border-edge-blue bg-white relative level-bar">
                                    <input type="radio" class="hidden" id="level-two" name="level" value="2">
                                    <div style="height: 30px; width: 30px; top: -11px; right: -11px" class="border-4 border-edge-blue bg-white rounded-full absolute hidden z-10 level-ind"></div>
                                </div>
                            </div>
                            <div class="py-4 level-select">
                                <div style="height: 12px;" class="border-2 border-l-0 border-edge-blue bg-white relative level-bar">
                                    <input type="radio" class="hidden" id="level-three" name="level" value="3">
                                    <div style="height: 30px; width: 30px; top: -11px; right: -11px" class="border-4 border-edge-blue bg-white rounded-full absolute hidden z-10 level-ind"></div>
                                </div>
                            </div>
                            <div class="py-4 level-select">
                                <div style="height: 12px;" class="border-2 border-l-0 border-edge-blue bg-white relative level-bar">
                                    <input type="radio" class="hidden" id="level-four" name="level" value="4">
                                    <div style="height: 30px; width: 30px; top: -11px; right: -11px" class="border-4 border-edge-blue bg-white rounded-full absolute hidden z-10 level-ind"></div>
                                </div>
                            </div>
                            <div class="py-4 level-select">
                                <div style="height: 12px;" class="border-2 border-l-0 border-edge-blue bg-white relative rounded-r-full level-bar">
                                    <input type="radio" class="hidden" id="level-five" name="level" value="5">
                                    <div style="height: 30px; width: 30px; top: -11px; right: -11px" class="border-4 border-edge-blue bg-white rounded-full absolute hidden z-10 level-ind"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col small:flex-row items-center text-2xl">
                            <div class="w-1/4 hidden small:block"></div>
                            <div id="level-tab-1" class="w-2/4 text-center level-tab hidden">
                                <span class="text-white font-extrabold">level 1</span>
                            </div>
                            <div id="level-tab-2" class="w-2/4 text-center level-tab">
                                <span class="text-white font-extrabold">level 2</span>
                            </div>
                            <div id="level-tab-3" class="w-2/4 text-center level-tab hidden">
                                <span class="text-white font-extrabold">level 3</span>
                            </div>
                            <div id="level-tab-4" class="w-2/4 text-center level-tab hidden">
                                <span class="text-white font-extrabold">level 4</span>
                            </div>
                            <div id="level-tab-5" class="w-2/4 text-center level-tab hidden">
                                <span class="text-white font-extrabold">level 5</span>
                            </div>
                            <div class="w-1/4 flex justify-center leading-none py-4 small:justify-end small:py-0">
                                <a href="#" class="rounded-full border-2 border-edge-dark-blue text-edge-dark-blue px-6 text-xs py-1 small:px-8 small:text-base">all</a>
                            </div>
                        </div>
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

export default {
    components: {
        'edge-group-filters': EdgeGroupFilters,
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
    },
    data(): object {
        return {
            videos: [],
            edgeFilters: [],
        };
    },
    mounted(): void {
        this.videos = VideosService.getVideosFromArray(this.videosList);
        this.edgeFilters = FiltersService.getFiltersFromArray(this.edgeFiltersList);

        this.$root.$on('filterClicked', this.handleFilterClick);
    },
    methods: {
        handleFilterClick(event) {
            let filterGroup = event.filterGroup;
            let filter = event.filter;

            console.log(
                'FilteredVideos::handleFilterClick event data filterGroup: %s, filter: %s',
                JSON.stringify(filterGroup),
                JSON.stringify(filter)
            );

            if (filterGroup == 'edgeGroup') {
                this.edgeFilters = this.edgeFilters.map((item) => {
                    if (item.id == filter.id) {
                        item.active = !item.active;
                    }

                    return item;
                });
                // todo - update with API call
            } else {
                // todo - add the side filter groups logic
            }
        }
    },
};
</script>
