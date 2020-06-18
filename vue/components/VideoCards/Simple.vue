<template>
    <a :href="video.url" class="video-card">
        <div class="relative">
            <div class="rounded-lg overflow-hidden">
                <img :src="video.thumbnail">
            </div>
            <div class="teacher-name absolute rounded-lg bottom-0 left-0 right-0 pt-6 pb-3 px-4 text-white uppercase text-xs font-bold font-roboto">{{ video.teacher }}</div>
            <div class="absolute top-0 right-0 mt-2 mr-2 cursor-pointer z-20" v-if="canAddToList"><i class="icon-add-to-list text-white"></i></div>
            <div class="absolute rounded-lg inset-0 flex items-center justify-center z-10"><i class="icon-approved-teacher text-white text-4xl" v-if="video.progress == 100"></i></div>
            <div class="video-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-3xl" v-if="video.progress != 100"></i></div>
        </div>
        <div class="pt-2">
            <div class="py-1 text-xs text-dark-gray uppercase flex items-center font-semibold"><i class="text-sm mr-1" :class="video.contentIcon" v-if="video.contentIcon"></i> {{ video.contentType }}</div>
            <h3 class="pb-1 font-bold capitalize">{{ video.title }}</h3>
            <p class="text-xs text-medium-gray">{{ video.difficulty }}</p>
        </div>
    </a>
</template>

<script lang="ts">
// todo - rename component
// todo - add hover effect
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
    mounted(): void {
    }
};
</script>
