<template>
    <div class="mx-auto w-full container h-full pt-8 pb-40 sm:pb-32">
        <method-level-card
            v-for="(item, index) in content"
            :key="item.id"
            :content="item"
            :index="index"
            @toggleAddToPrimary="toggleAddToPrimary"
        ></method-level-card>
    </div>
</template>

<script lang="ts">
import PrimaryListMixin from '../../mixins/primaryList';
import ContentService from '../../services/content';
import MethodLevelCard from '../ContentCards/MethodLevel';

export default {
    components: {
        'method-level-card': MethodLevelCard,
    },
    mixins: [PrimaryListMixin],
    props: {
        preloadData: {
            type: String
        },
    },
    data() {
        return {
            content: [],
        }
    },
    mounted(): void {
        let preloadData = JSON.parse(this.preloadData);

        this.content = ContentService.getContentFromResponse(preloadData);
    },
};
</script>
