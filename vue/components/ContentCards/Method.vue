<template>
    <a
        :href="content.url"
        :data-content-id="content.id"
        class="flex flex-col sm:flex-row items-center method-card p-3 border-gray border-b-1 xl:border-b-0"
    >
        <div class="flex-none relative w-full sm:h-64 sm:w-64 rounded-lg overflow-hidden">
            <img :src="getThumbnailUrl(content)" class="object-cover object-center w-auto sm:h-full">
            <div class="bg-method-gradient absolute top-0 left-0 w-full h-full px-3 flex flex-col justify-center items-center leading-none z-10">
                <img src="https://dpwjbsxqtam5n.cloudfront.net/pack-logos/drumeo-method-logo.png" alt="Item Logo" style="max-width: 150px;">
                <p class="text-white uppercase font-extrabold text-5xl">{{ content.level }}</p>
            </div>
            <div class="method-card-icon absolute top-0 left-0 w-full h-full px-3 flex flex-col justify-center items-center leading-none z-20 invisible">
                <i class="icon-live text-3xl text-white"></i>
            </div>
        </div>
        <div class="flex-1 flex flex-row pt-2 pb-4 sm:pt-0 sm:pb-0 items-center">
            <div class="flex-1 sm:px-6 leading-none">
                <div class="my-2 capitalize font-bold text-2xl">{{ content.title }}</div>
                <div class="my-4 text-xs text-medium-gray">with <span class="capitalize">{{ getInstructors(content) }}</span></div>
                <div class="my-2 leading-relaxed text-sm text-dark-gray" v-html="content.description"></div>
                <div class="text-medium-gray text-xs lg:hidden">{{ content.length }} - {{ content.totalXp }} XP</div>
            </div>
            <div class="hidden flex-none sm:flex pl-4 flex-row items-center text-medium-gray text-xs">
                <div class="mx-4 flex items-center hidden lg:block">{{ content.length }}</div>
                <div class="mx-4 flex items-center hidden lg:block">{{ content.totalXp }} XP</div>
                <div
                    class="add-to-list ml-8 flex items-center cursor-pointer hover:text-black"
                    :class="{'is-added': content.isAddedToPrimaryPlaylist}"
                >
                    <i
                        class="fal fa-plus text-3xl"
                        @click.stop.prevent="toggleAddToPrimary()"
                    ></i>
                </div>
                <div class="ml-4 flex items-center cursor-pointer hover:text-black"><i class="icon-live text-3xl"></i></div>
            </div>
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
