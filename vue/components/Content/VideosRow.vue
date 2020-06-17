<template>
    <div class="mx-auto w-full container px-3 h-full pt-4">
        <div class="w-full small:mt-6">
            <div class="flex flex-row justify-between items-center uppercase font-roboto">
                <div class="text-medium-gray">
                    <span class="font-bold">{{ title }}</span>
                </div>
                <div class="">
                    <a href="#" class="text-edge-blue text-sm font-bold">see all</a>
                </div>
            </div>
            <div class="py-6 small:flex small:space-x-3">
                <div
                    v-for="(item, index) in videos"
                    :class="cardClasses[index]"
                    :key="item.id"
                >
                    <simple-video-card :video="item"></simple-video-card>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import Videos from '../../services/videos';
import Video from '../../models/video';
import SimpleVideoCard from '../VideoCards/Simple'

export default {
    data() {
        return {
            videos: [],
            title: 'Continue',
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
    components: {
        'simple-video-card': SimpleVideoCard,
    },
    mounted(): void {
        this.videos = Videos.getVideos();
    }
};
</script>
