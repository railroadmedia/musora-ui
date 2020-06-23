<template>
    <div>
        <div class="mx-auto w-full container px-3 h-full pt-4">
            <edge-group-filters
                :filters="edgeFilters"
                :title="edgeFiltersTitle"
                filterEventGroup="edgeFilterClick"
            ></edge-group-filters>
        </div>
        <div class="mx-auto w-full container h-full py-4">
            <rudiment-video-card
                v-for="item in videos"
                :key="item.id"
                :video="item"
            ></rudiment-video-card>
        </div>
    </div>
</template>

<script lang="ts">
import FiltersService from '../../services/filters';
import VideosService from '../../services/videos';

import EdgeGroupFilters from '../Filters/EdgeGroup';
import RudimentVideoCard from '../VideoCards/Rudiment'

export default {
    components: {
        'edge-group-filters': EdgeGroupFilters,
        'rudiment-video-card': RudimentVideoCard,
    },
    props: {
        videosList: {
            type: Array,
        },
        edgeFiltersList: {
            type: Array,
            default: () => [],
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
        };
    },
    mounted(): void {
        this.videos = VideosService.getRudimentsFromArray(this.videosList);
        this.edgeFilters = FiltersService.getFiltersFromArray(this.edgeFiltersList, 'edge-group');

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
            }
        },
    },
};
</script>
