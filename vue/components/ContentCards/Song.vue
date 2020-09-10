<template>
    <a :href="content.url" class="song-card flex space-x-3 ">
        <div class="relative">
            <div class="rounded-lg overflow-hidden w-16">
                <img :src="content.thumbnail" class="w-full h-auto">
            </div>
            <div
                class="rounded-lg overflow-hidden card-icon absolute inset-0 flex items-center justify-center z-10"
                :class="$_iconContainerClasses"><i class="text-2xl text-white" :class="$_icon"></i></div>
            <div
                class="absolute rounded-b-lg overflow-hidden bottom-0 left-0 w-full h-4 flex items-end z-20"
                v-if="content.progress"
            >
                <div class="h-1 bg-edge-blue" :style="$_width"></div>
            </div>
        </div>
        <div class="flex flex-col justify-center">
            <div class="capitalize text-sm font-medium">{{ content.title }}</div>
            <div class="capitalize text-xs text-medium-gray"><span>{{ content.artist }}</span> - <span>{{ content.style }}</span></div>
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
        canAddToList: {
            type: Boolean,
            default: () => true,
        },
    },
    mixins: [ContentInstructorsMixin, ContentCardMixin],
    computed: {
        $_icon() {
            let icon;

            if (!this.content.progress) {
                icon = 'icon-live';
            } else if (this.content.progress == 100) {
                icon = 'icon-check';
            } else {
                icon = 'fas fa-adjust';
            }

            return [icon];
        },
        $_iconContainerClasses() {
            let classes;

            if (!this.content.progress) {
                classes = ['invisible', 'opacity-0'];
            } else {
                classes = [''];
            }

            return classes;
        },
        $_width() {
            return { width: this.content.progress + '%' };
        },
    }
};
</script>

<style type="text/css">
.song-card:hover {
    background-color: #f3f9ff;
}
.card-icon {
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-color: rgba(0,0,0,.4);
}
.song-card:hover .card-icon {
    visibility: visible;
    opacity: 1;
}
</style>
