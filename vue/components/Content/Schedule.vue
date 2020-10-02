<template>
    <div>
        <event-content-card
            v-for="item in content"
            :key="item.id"
            :content="item"
            :show-month="contentShowMonth[item.id]"
            @toggleAddToPrimary="toggleAddToPrimary"
        ></event-content-card>
    </div>
</template>

<script lang="ts">
import PrimaryListMixin from '../../mixins/primaryList';
import ContentService from '../../services/content';
import EventContentCard from '../ContentCards/Event';
import { DateTime } from 'luxon';

export default {
    components: {
        'event-content-card': EventContentCard,
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
            contentShowMonth: {},
        }
    },
    mounted(): void {
        let preloadData = JSON.parse(this.preloadData);

        this.content = ContentService.getContentFromResponse(preloadData);

        let lastMonth = '';

        this.content.forEach(content => {
            let contentMonth = DateTime.fromSQL(content.date).toFormat('LLL');
            this.contentShowMonth[content.id] = lastMonth != contentMonth;
            lastMonth = contentMonth;
        });
    },
};
</script>
