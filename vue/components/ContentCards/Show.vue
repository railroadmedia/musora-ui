<template>
    <a :href="content.url" class="py-2 my-list-content-card flex flex-col sm:flex-row items-center px-3 mb-6 sm:mb-0">
        <div class="flex flex-col sm:flex-row flex-1 sm:items-center w-full sm:w-32">
            <div class="rounded-lg overflow-hidden w-full sm:w-32">
                <div class="rounded-lg overflow-hidden relative pb-9/16">
                    <img :src="content.thumbnail" class="absolute object-cover object-center h-full w-full">
                    <div class="content-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-3xl"></i></div>
                </div>
            </div>
            <div class="flex-1 sm:ml-6">
                <div class="text-dark-gray uppercase text-xs">{{ getInstructors(content) }}</div>
                <div class="font-bold text-lg capitalize">{{ content.title }}</div>
            </div>
        </div>
        <div class="flex w-full flex-1 items-center justify-end">
            <div class="col text-center text-medium-gray text-xs uppercase" v-if="content.length">{{ getDuration(content) }} mins</div>
            <div class="col text-center text-medium-gray text-xs uppercase" v-if="content.totalXp">{{ content.totalXp }} xp</div>
            <div class="icon-col text-center" v-if="showRemoveIcon"><i class="fa fa-times text-medium-gray hover:text-edge-blue text-3xl"></i></div>
            <div class="icon-col text-center" v-if="showAddIcon"><i class="fa fa-plus text-medium-gray hover:text-edge-blue text-3xl"></i></div>
            <div class="icon-col text-center"><i class="fa fa-play-circle text-medium-gray hover:text-edge-blue text-3xl"></i></div>
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
        showRemoveIcon: {
            type: Boolean,
            default: () => false,
        },
        showAddIcon: {
            type: Boolean,
            default: () => true,
        },
    },
    mixins: [ContentInstructorsMixin],
    methods: {
        getDuration(content) {
            return content.length ? Math.ceil(content.length / 60) : 0;
        }
    },
};
</script>

<style type="text/css">
.col {
    width: 100px;
}
.icon-col {
    width: 50px;
}
</style>