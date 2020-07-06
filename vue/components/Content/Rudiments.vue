<template>
    <div>
        <div class="mx-auto w-full container px-3 h-full pt-4">
            <topics-group-filters
                :filters="edgeFilters"
                :title="edgeFiltersTitle"
                filterEventGroup="edgeFilterClick"
            ></topics-group-filters>
        </div>
        <div class="mx-auto w-full container h-full py-4">
            <rudiment-content-card
                v-for="item in videos"
                :key="item.id"
                :content="item"
            ></rudiment-content-card>
        </div>
    </div>
</template>

<script lang="ts">
import FiltersService from '../../services/filters';
import VideosService from '../../services/videos';

import TopicsGroupFilters from '../Filters/TopicsGroup';
import RudimentContentCard from '../ContentCards/Rudiment'

export default {
    components: {
        'topics-group-filters': TopicsGroupFilters,
        'rudiment-content-card': RudimentContentCard,
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
