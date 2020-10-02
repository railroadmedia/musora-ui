<template>
    <div class="hover-trans event-card flex flex-row items-center px-3 py-2 space-x-6" :data-content-id="content.id">
        <div
            class="event-month leading-none break-words uppercase p-1 bg-gray text-white font-bold"
            :class="{'invisible': !this.showMonth}"
        >{{ getMonth() }}</div>
        <div class="event-date-thumbnail flex flex-col items-center px-2 py-1 rounded-md bg-black text-white text-xs">
            <div class="font-bold">{{ getDate() }}</div>
            <div>{{ getTime() }}</div>
        </div>
        <div class="flex-1">
            <div class="text-edge-blue text-sm uppercase">{{ getTitle() }}</div>
            <div class="font-bold text-xs">{{ getSubtitle() }}</div>
        </div>
        <div class="event-col text-medium-gray text-xs uppercase">{{ getType() }}</div>
        <div class="event-col text-medium-gray text-xs text-center uppercase">{{ getInstructors(content) }}</div>
        <div class="text-medium-gray text-xs uppercase">{{ content.difficulty }}</div>
        <div
            class="add-to-list cursor-pointer text-gray hover:text-medium-gray hover-trans"
            :class="{'is-added': content.isAddedToPrimaryPlaylist}"
        ><i class="fas fa-plus fa-2x" @click.stop.prevent="toggleAddToPrimary()"></i></div>
        <div class="cursor-pointer text-gray hover:text-medium-gray hover-trans"><i class="fas fa-calendar-plus fa-2x"></i></div>
    </div>

</template>

<script lang="ts">
import ContentModel from '../../models/content';
import ContentInstructorsMixin from '../../mixins/contentInstructors';
import ContentCardMixin from '../../mixins/contentCard';
import { DateTime } from 'luxon';

export default {
    props: {
        content: {
            type: ContentModel,
        },
        showMonth: {
            type: Boolean,
        },
    },
    mixins: [ContentInstructorsMixin, ContentCardMixin],
    methods: {
        getMonth(): string {
            return DateTime.fromSQL(this.content.date).toFormat('LLL');
        },

        getDate(): string {
            return DateTime.fromSQL(this.content.date).toFormat('ccc d');
        },

        getTime(): string {
            return DateTime.fromSQL(this.content.date).toFormat('h:m a');
        },

        getTitle(): string {
            let title = this.content.contentType;

            return title.replace('bundle-', '').replace(/-/g, ' ');
        },

        getSubtitle(): string {
            return this.content.title;
        },

        getType(): string {
            return this.content.status == 'scheduled' ? 'Live Broadcast' : 'Lesson Release';
        },

        toggleAddToPrimary() {
            this.$emit('toggleAddToPrimary', this.content);
        },
    }
};
</script>
