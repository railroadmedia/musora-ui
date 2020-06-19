<template>
    <div class="m-1 px-2 py-1 flex items-center bg-light-gray rounded-full font-roboto" v-show="filter.active">
        <span class="capitalize">{{ filter.label }}</span>
        <i class="icon-info badge-filter text-dark-gray text-base ml-1 cursor-pointer" @click.stop.prevent="handleClick()"></i>
    </div>
</template>

<script lang="ts">
import Filter from '../../models/filter';

export default {
    props: {
        filter: {
            type: Filter,
        },
    },
    methods: {
        handleClick() {
            this.$emit('filterBadgeClicked', this.filter);
        },
    },
};
</script>
