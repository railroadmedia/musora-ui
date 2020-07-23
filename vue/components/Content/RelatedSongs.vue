<template>
    <div class="space-y-2 py-6 pl-3 grid sm:grid-cols-2 lg:grid-cols-1">
        <song-content-card
            v-for="item in content"
            :key="item.id"
            :content="item"
        ></song-content-card>
    </div>
</template>

<script lang="ts">
import ContentService from '../../services/content';
import SongContentCard from '../ContentCards/Song';

export default {
    components: {
        'song-content-card': SongContentCard,
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