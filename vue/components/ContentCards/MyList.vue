<template>
    <a
        :href="content.url"
        class="py-2 my-list-content-card flex flex-col sm:flex-row items-center px-3 mb-6 sm:mb-0"
        :data-content-id="content.id"
    >
        <div class="flex flex-col sm:flex-row flex-1 sm:items-center w-full sm:w-32">
            <div class="rounded-lg overflow-hidden w-full sm:w-32">
                <div class="rounded-lg overflow-hidden relative pb-9/16">
                    <img :src="content.thumbnail" class="absolute object-cover object-center h-full w-full">
                    <div class="content-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-3xl"></i></div>
                </div>
            </div>
            <div class="flex-1 sm:ml-6">
                <div class="text-dark-gray uppercase text-xs">{{ content.contentType }}</div>
                <div class="font-bold text-lg capitalize">{{ content.title }}</div>
            </div>
        </div>
        <div class="flex w-full flex-1 items-center justify-between">
            <div class="text-medium-gray text-xs capitalize">detail</div>
            <div class="text-medium-gray text-xs capitalize">{{ getInstructors(content) }}</div>
            <div class="text-medium-gray text-xs capitalize">{{ content.date }}</div>
            <div class="" v-if="showRemoveIcon"><i class="fas fa-times text-edge-blue text-3xl"></i></div>
            <div class="" v-if="showAddIcon"><i class="fal fa-plus text-medium-gray hover:text-edge-blue text-3xl"></i></div>
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
            default: () => true,
        },
        showAddIcon: {
            type: Boolean,
            default: () => false,
        },
    },
    mixins: [ContentInstructorsMixin],
};
</script>
