<template>
    <div class="w-full small:mt-6">
        <div class="flex flex-row justify-between items-center uppercase font-roboto">
            <div class="text-medium-gray">
                <span class="font-bold font-roboto-cond">{{ sectionTitle }}</span>
            </div>
            <div v-if="content.length">
                <a :href="sectionUrl" class="text-edge-blue text-sm font-bold font-roboto-cond">see all</a>
            </div>
        </div>
        <div class="py-6 small:flex small:space-x-3" v-if="content.length">
            <div
                v-for="(item, index) in content"
                :class="cardClasses[index]"
                :key="item.id"
            >
                <default-content-card
                    :content="item"
                    :text-details-top="cardTextDetailsTop"
                    @toggleAddToPrimary="toggleAddToPrimary"
                ></default-content-card>
            </div>
        </div>
        <div class="py-6" v-if="!content.length">
            <p>Looks like you haven't started any lessons. Once you watch a video, it will show up here for you to access later.</p>
        </div>
    </div>
</template>

<script lang="ts">
import ContentService from '../../services/content';
import DefaultContentCard from '../ContentCards/Default';
import PrimaryListMixin from '../../mixins/primaryList';

export default {
    components: {
        'default-content-card': DefaultContentCard,
    },
    mixins: [PrimaryListMixin],
    props: {
        contentList: {
            type: String,
        },
        sectionTitle: {
            type: String,
        },
        sectionUrl: {
            type: String,
        },
        cardTextDetailsTop:{
            type: String,
            default: () => 'contentType',
        },
    },
    data(): object {
        return {
            content: [],
            cardClasses: [
                ['py-4', 'small:py-0', 'w-full', 'small:w-1/3', 'medium:w-1/4', 'large:w-1/5', 'x-large:w-1/6'],
                ['py-4', 'small:py-0', 'w-full', 'small:w-1/3', 'medium:w-1/4', 'large:w-1/5', 'x-large:w-1/6'],
                ['py-4', 'small:py-0', 'w-full', 'small:w-1/3', 'medium:w-1/4', 'large:w-1/5', 'x-large:w-1/6'],
                ['w-1/2', 'hidden', 'medium:block', 'medium:w-1/4', 'large:w-1/5', 'x-large:w-1/6'],
                ['w-1/5', 'hidden', 'large:block', 'large:w-1/5', 'x-large:w-1/6'],
                ['hidden', 'x-large:block', 'x-large:w-1/6'],
            ],
        };
    },
    mounted(): void {
        let count = 0;
        this.content = [];

        ContentService
            .getContentFromResponse(JSON.parse(this.contentList))
            .forEach((item) => {
                if (count < 6) {
                    this.content.push(item);
                    count++;
                }
            });
    }
};
</script>
