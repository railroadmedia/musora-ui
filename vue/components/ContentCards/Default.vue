<template>
    <a :href="content.url" class="content-card">
        <div class="relative">
            <div class="h-40 rounded-lg overflow-hidden">
                <img :src="content.thumbnail" class="object-cover object-center h-full w-full">
            </div>
            <div class="instructor-name absolute rounded-lg bottom-0 left-0 right-0 pt-6 pb-3 px-4 text-white uppercase text-xs font-bold font-roboto">{{ getInstructors(content) }}</div>
            <div class="absolute top-0 right-0 mt-2 mr-2 cursor-pointer z-20" v-if="canAddToList"><i class="icon-add-to-list text-white"></i></div>
            <div class="absolute rounded-lg inset-0 flex items-center justify-center z-10"><i class="icon-approved-teacher text-white text-4xl" v-if="content.progress == 100"></i></div>
            <div class="content-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-3xl" v-if="content.progress != 100"></i></div>
        </div>
        <div class="pt-2">
            <div class="py-1 text-xs text-dark-gray uppercase flex items-center font-semibold"><i class="text-sm mr-1" :class="content.contentIcon" v-if="content.contentIcon"></i> {{ content.contentType }}</div>
            <h3 class="pb-1 font-bold capitalize">{{ content.title }}</h3>
            <p class="text-xs text-medium-gray">{{ content.difficulty }}</p>
        </div>
    </a>
</template>

<script lang="ts">
import ContentModel from '../../models/content';
import ContentInstructorsMixin from '../../mixins/contentInstructors';

export default {
    props: {
        content: {
            type: ContentModel,
        },
        canAddToList: {
            type: Boolean,
            default: () => true,
        },
    },
    mixins: [ContentInstructorsMixin],
};
</script>

<style type="text/css">
.content-card-play {
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-color: rgba(0,0,0,.4);
}
.content-card:hover .content-card-play {
    visibility: visible;
    opacity: 1;
}
.content-card .instructor-name {
    background: -webkit-gradient(linear,left top,left bottom,from(transparent),to(#000));
    background: linear-gradient(180deg,transparent 0,#000);
}
</style>
