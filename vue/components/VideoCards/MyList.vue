<template>
    <a :href="video.url" class="py-2 my-list-video-card flex flex-col sm:flex-row items-center px-3 mb-6 sm:mb-0">
        <div class="flex flex-col sm:flex-row flex-1 sm:items-center">
            <div class="relative">
                <div class="rounded-lg overflow-hidden w-full sm:w-32">
                    <img :src="video.thumbnail" class="w-full h-auto">
                </div>
                <div class="video-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-3xl"></i></div>
            </div>
            <div class="flex-1 sm:ml-6">
                <div class="text-dark-gray uppercase text-xs">{{ video.contentType }}</div>
                <div class="font-bold text-lg capitalize">{{ video.title }}</div>
            </div>
        </div>
        <div class="flex w-full flex-1 items-center justify-between">
            <div class="text-medium-gray text-xs capitalize">detail</div>
            <div class="text-medium-gray text-xs capitalize">{{ video.teacher }}</div>
            <div class="text-medium-gray text-xs capitalize">{{ video.date }}</div>
            <div class="" v-if="canAddToList"><i class="icon-add-to-list text-medium-gray hover:text-edge-blue text-xl"></i></div>
            <div class="" v-if="!canAddToList"><i class="icon-legacy text-edge-blue text-3xl"></i></div>
        </div>
    </a>
</template>

<script lang="ts">
import Video from '../../models/video';

export default {
    props: {
        video: {
            type: Video,
        },
        canAddToList: {
            type: Boolean,
            default: () => true,
        },
    },
};
</script>
