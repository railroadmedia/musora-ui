<template>
    <a :href="content.url" class="content-card">
        <div
            class="rounded-lg overflow-hidden relative"
            :class="$_aspectRatio"
        >
            <img :src="getThumbnailUrl(content)" class="absolute object-cover object-center h-full w-full">
            <div class="absolute top-0 right-0 mt-2 mr-2 cursor-pointer z-20" v-if="canAddToList"><i class="fal fa-plus text-xl text-white"></i></div>
            <div class="absolute rounded-lg inset-0 flex items-center justify-center z-10"><i class="icon-approved-teacher text-white text-4xl" v-if="content.progress == 100"></i></div>
            <div class="content-card-play absolute rounded-lg inset-0 flex items-center justify-center invisible opacity-0 z-10"><i class="icon-live text-white text-3xl" v-if="content.progress != 100"></i></div>
        </div>
        <div class="pt-2">
            <div class="uppercase text-xs font-roboto text-dark-gray">{{ getInstructors(content) }}</div>
            <h3 class="capitalize text-sm font-bold leading-none">{{ content.title }}</h3>
            <div class="capitalize text-xs text-medium-gray pt-2 flex items-center">
                <i class="text-sm mr-1" :class="content.contentIcon" v-if="content.contentIcon"></i>{{ getTextDetailsTop(content) }} - {{ content.difficulty }}
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
        canAddToList: {
            type: Boolean,
            default: () => true,
        },
        textDetailsTop: {
            type: String,
            default: () => 'contentType',
        },
    },
    mixins: [ContentInstructorsMixin],
    computed: {
        $_aspectRatio(): string[] {
            if (this.content.contentType == 'song') {
                return ['pb-1/1'];
            }
            return ['pb-9/16'];
        },
    },
    methods: {
        getThumbnailUrl(content: ContentModel) {
            return 'https://cdn.musora.com/image/fetch/w_318,h_179,c_fill/' + content.thumbnail;
        },

        getTextDetailsTop(content: ContentModel) {
            let prop = 'contentType';

            if (content.hasOwnProperty(this.textDetailsTop) && content[this.textDetailsTop]) {
                prop = this.textDetailsTop;
            }

            return content[prop];
        },
    },
};
</script>

<style type="text/css">
/*.content-card-play {
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-color: rgba(0,0,0,.4);
}
.content-card:hover .content-card-play {
    visibility: visible;
    opacity: 1;
}*/
</style>
