<template>
    <div class="w-full small:mt-6">
        <div class="flex flex-row justify-between items-center uppercase font-roboto">
            <div class="text-medium-gray">
                <span class="font-bold">{{ sectionTitle }}</span>
            </div>
            <div class="">
                <a :href="sectionUrl" class="text-edge-blue text-sm font-bold">see all</a>
            </div>
        </div>
        <div class="py-6 small:flex small:space-x-3">
            <div
                v-for="(item, index) in videos"
                :class="cardClasses[index]"
                :key="item.id"
            >
                <default-content-card :video="item"></default-content-card>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import VideosService from '../../services/videos';
import DefaultContentCard from '../ContentCards/Default'

export default {
    components: {
        'default-content-card': DefaultContentCard,
    },
    props: {
        videosList: {
            type: Array,
        },
        sectionTitle: {
            type: String,
        },
        sectionUrl: {
            type: String,
        }
    },
    data(): object {
        return {
            videos: [],
            cardClasses: [
                ['py-4', 'small:py-0', 'w-full', 'small:w-1/3', 'medium:w-1/4', 'large:w-1/5', 'x-large:w-1/6'],
                ['py-4', 'small:py-0', 'w-full', 'small:w-1/3', 'medium:w-1/4', 'large:w-1/5', 'x-large:w-1/6'],
                ['py-4', 'small:py-0', 'w-full', 'small:w-1/3', 'medium:w-1/4', 'large:w-1/5', 'x-large:w-1/6'],
                ['w-1/2', 'hidden', 'medium:block', 'medium:w-1/4', 'large:w-1/5', 'x-large:w-1/6'],
                ['w-1/5', 'hidden', 'large:block', 'large:w-1/5', 'x-large:w-1/6'],
                ['hidden', 'x-large:block', 'x-large:w-1/6'],
            ],
        };
    },
    mounted(): void {
        this.videos = VideosService.getVideosFromArray(this.videosList);
    }
};
</script>
