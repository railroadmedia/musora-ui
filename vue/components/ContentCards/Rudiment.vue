<template>
    <a href="#" class="rudiment-card flex flex-row items-center px-3 py-1">
        <div class="rudiment-thumbnail-container rounded-lg overflow-hidden relative">
            <img :src="content.thumbnail" class="object-cover object-center w-full h-full">
            <div class="absolute bottom-0 left-0 right-0 rudiment-card-teacher-gradient text-white pl-2 pb-1 uppercase text-xs font-bold">{{ getInstructors(content) }}</div>
            <div class="rudiment-card-play absolute inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-2xl text-white"></i></div>
        </div>
        <div class="flex items-center w-full">
            <div class="flex-1 pl-4 capitalize font-bold">{{ content.title }}</div>
            <div class="flex-none h-16 px-8 hidden small:block" v-if="content.sheet">
                <img :src="content.sheet" class="h-full w-auto">
            </div>
            <div class="flex-none"><i class="rudiment-card-icon fal fa-plus text-3xl cursor-pointer text-medium-gray hover:text-black"></i></div>
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
    },
    mixins: [ContentInstructorsMixin],
    data(): object {
        return {
        };
    },
    mounted(): void {
    },
    methods: {
    },
};
</script>

<style type="text/css">
.rudiment-thumbnail-container {
    max-height: 70px;
    max-width: 123px;
}
.rudiment-card:hover {
    background-color: #f3f9ff;
}
.rudiment-card-teacher-gradient {
    background: -webkit-gradient(linear,left top,left bottom,from(transparent),to(rgba(85, 85, 85, .75)));
    background: linear-gradient(180deg,transparent 0,rgba(85, 85, 85, .75));
}
.rudiment-card-play {
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-color: rgba(0,0,0,.4);
}
.rudiment-card:hover .rudiment-card-play {
    visibility: visible;
    opacity: 1;
}
</style>