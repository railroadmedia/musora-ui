<template>
    <div>
        <method-content-card
            v-for="item in content"
            :key="item.id"
            :content="item"
            @toggleAddToPrimary="toggleAddToPrimary"
        ></method-content-card>
    </div>
</template>

<script lang="ts">
import PrimaryListMixin from '../../mixins/primaryList';
import ContentService from '../../services/content';
import MethodContentCard from '../ContentCards/Method';

export default {
    components: {
        'method-content-card': MethodContentCard,
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
