<template>
    <div class="flex flex-col sm:flex-row py-16" v-if="content">
        <div class="relative">
            <div class="song-thumbnail rounded-lg overflow-hidden">
                <img :src="content.thumbnail" class="object-cover object-center w-full h-full">
            </div>
            <div class="absolute rounded-lg inset-0 flex items-center justify-center z-10"><i class="icon-live text-white text-6xl"></i></div>
        </div>
        <div class="flex-1 flex flex-col pt-6 sm:pt-0 sm:pl-10 sm:justify-center">
            <div class="capitalize text-3xl font-semibold text-center sm:text-left">{{ content.title }}</div>
            <div class="capitalize text-dark-gray pt-2 text-center sm:text-left">{{ $_artist }} - {{ $_style }}</div>
            <div class="py-8 flex flex-col md:flex-row items-center space-y-3 md:space-y-0 md:space-x-3">
                <button-input
                    label="play"
                    icon-class="icon-live"
                    :fixed-width="true"
                ></button-input>
                <button-input
                    label="complete"
                    theme="blue-reversed"
                    icon-class="icon-check"
                    :fixed-width="true"
                ></button-input>
            </div>
            <div class="grid grid-cols-2 row-gap-6 md:flex md:space-x-8">
                <a
                    href="#"
                    class="flex flex-col items-center"
                    :class="$_likeClasses"
                    @click.stop.prevent="toggleLike()"
                ><i class="icon-applause text-xl"></i><span class="text-xs font-semibold">{{ content.likes }}</span></a>
                <a href="#" class="text-medium-gray flex flex-col items-center"><i class="icon-getting-started text-xl"></i><span class="text-xs uppercase font-semibold">share</span></a>
                <a href="#" class="text-medium-gray flex flex-col items-center"><i class="icon-download text-xl"></i><span class="text-xs uppercase font-semibold">download</span></a>
                <a href="#" class="text-medium-gray flex flex-col items-center"><i class="icon-add-to-list text-xl"></i><span class="text-xs uppercase font-semibold">add to list</span></a>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
// import VideosService from '../../services/videos';
import Button from '../Blocks/Button';
import ContentService from '../../services/content';

export default {
    components: {
        'button-input': Button,
    },
    props: {
        preloadData: {
            type: String
        },
        videoData: {
            type: Object,
        },
    },
    data(): object {
        return {
            content: undefined,
        };
    },
    mounted(): void {
        // this.song = VideosService.getVideoFromObject(this.videoData);
        let preloadData = JSON.parse(this.preloadData);

        this.content = ContentService.getContentFromResponse(preloadData)[0];
    },
    computed: {
        $_likeClasses(): string[] {
            let classed = [];

            if (this.content.liked) {
                classed.push('text-edge-blue');
            } else {
                classed.push('text-medium-gray');
            }

            return classed;
        },

        $_artist(): string {
            let artist = this.content.artist;

            if (!artist && this.content.parent) {
                artist = this.content.parent.artist;
            }

            return artist;
        },

        $_style(): string {
            let style = this.content.style;

            if (!style && this.content.parent) {
                style = this.content.parent.style;
            }

            return style;
        },
    },
    methods: {
        toggleLike() {
            // todo - add api call & remove below
            this.content.likes = this.content.likes + (this.content.liked ? -1 : 1);
            this.content.liked = !this.content.liked
        }
    },
}
</script>

<style type="text/css">
.song-thumbnail {
    box-shadow: 0 0 10px rgba(0,0,0,0.7);
    width: 350px;
    height: 350px;
}
</style>
