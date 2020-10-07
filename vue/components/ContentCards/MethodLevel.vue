<template>
    <a
        :href="content.url"
        :data-content-id="content.id"
        class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 py-6 sm:py-2 px-3 content-card"
    >
        <div class="flex-none font-extrabold text-xl hidden sm:block w-8 flex text-center">{{ index + 1 }}</div>
        <div class="flex-none rounded-lg overflow-hidden w-full sm:w-32">
            <div class="rounded-lg overflow-hidden relative pb-9/16">
                <img :src="getThumbnailUrl(content)" class="absolute object-cover object-center h-full w-full">
                <div class="content-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-3xl"></i></div>
                <div
                    class="absolute rounded-b-lg overflow-hidden bottom-0 left-0 w-full h-4 flex items-end z-20"
                    v-if="content.progress"
                >
                    <div class="h-1 bg-edge-blue" :style="$_width"></div>
                </div>
            </div>
        </div>
        <div class="flex-1 flex flex-col md:flex-row">
            <div class="flex-1 font-bold capitalize sm:text-lg">{{ content.title }}</div>
            <div class="flex-none flex items-center sm:space-x-4 md:space-x-8 text-gray sm:mr-4 md:mr-10">
                <div class="capitalize w-12 flex justify-center">{{ content.length }}</div>
                <div class="uppercase w-16 flex justify-center">{{ content.totalXp }} xp</div>
            </div>
        </div>
        <div class="flex-none hidden sm:flex items-center space-x-12 text-gray">
            <div
                class="add-to-list hover:text-black"
                :class="{'is-added': content.isAddedToPrimaryPlaylist}"
            >
                <i class="fal fa-plus text-3xl" @click.stop.prevent="toggleAddToPrimary()"></i>
            </div>
            <div class="hover:text-black"><i class="fas fa-play-circle text-3xl"></i></div>
        </div>
    </a>
</template>

<script lang="ts">
import ContentModel from '../../models/content';
import ContentInstructorsMixin from '../../mixins/contentInstructors';
import ContentCardMixin from '../../mixins/contentCard';

export default {
    props: {
        content: {
            type: ContentModel,
        },
        index: {
            type: Number,
        },
    },
    mixins: [ContentInstructorsMixin, ContentCardMixin],
    methods: {
        getThumbnailUrl(content: ContentModel) {
            return content.thumbnail;
        },

        toggleAddToPrimary() {
            this.$emit('toggleAddToPrimary', this.content);
        },
    },
};
</script>
