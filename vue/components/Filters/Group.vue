<template>
    <div class="w-full mb-2">
        <div class="text-dark-gray text-xs border-2 border-light-gray rounded-lg">
            <div
                class="collapse-trigger flex content-center justify-between px-3 py-2 font-semibold small:text-sm cursor-pointer font-roboto"
                :class="{active: !filterGroup.collapsed}"
                @click.stop.prevent="toggleCollapse()"
            >
                <span class="uppercase">{{ filterGroup.title }}</span>
                <i class="icon-home text-lg font-bold" v-show="filterGroup.collapsed"></i>
                <i class="icon-hammer text-lg font-bold" v-show="!filterGroup.collapsed"></i>
            </div>
            <div class="collapse-container overflow-hidden">
                <div style="max-height: 230px;" class="mb-3 font-semibold" data-simplebar>
                    <filter-checkbox
                        v-for="filter in filterGroup.filters"
                        :key="filter.id"
                        :filter="filter"
                        :filter-group="filterGroup.id"
                        theme="side"
                    ></filter-checkbox>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import FilterCheckbox from '../Blocks/FilterCheckbox';
import FilterGroup from '../../models/filterGroup';

// todo - update global css for collapsable

export default {
    components: {
        'filter-checkbox': FilterCheckbox,
    },
    props: {
        filterGroup: {
            type: FilterGroup,
        },
    },
    mounted(): void {
        this.collapsed = this.filterGroup.collapsed || false;
    },
    methods: {
        toggleCollapse(): void {
            this.$emit('collapseToggle', this.filterGroup);
        }
    },
}
</script>
