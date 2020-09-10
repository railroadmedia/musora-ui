<template>
    <div class="">
        <div
            v-for="item in content"
            :key="item.id"
            class="border-b border-light-gray py-3 pl-3"
        >
            <related-video :content="item"></related-video>
        </div>
    </div>
</template>

<script lang="ts">
import ContentService from '../../services/content';
import RelatedVideo from '../ContentCards/RelatedVideo';

export default {
    components: {
        'related-video': RelatedVideo,
    },
    props: {
        preloadData: {
            type: String
        },
    },
    mounted(): void {
        let preloadData = JSON.parse(this.preloadData);

        this.content = ContentService.getContentFromResponse(preloadData);
    },
    data() {
        return {
            content: [],
        }
    },
}
</script>
