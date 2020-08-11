<template>
    <div class="w-full mb-2">
        <div class="text-dark-gray text-xs border-2 border-light-gray rounded-lg">
            <div
                class="collapse-trigger flex content-center justify-between px-3 py-2 small:text-sm cursor-pointer"
                :class="{active: !filterGroup.collapsed}"
                @click.stop.prevent="toggleCollapse()"
            >
                <span class="uppercase font-bold font-roboto-cond">{{ filterGroup.title }}</span>
                <i class="fas fa-angle-down text-lg font-bold" v-show="filterGroup.collapsed"></i>
                <i class="fas fa-angle-up text-lg font-bold" v-show="!filterGroup.collapsed"></i>
            </div>
            <div class="collapse-container overflow-hidden">
                <div style="max-height: 230px;" class="mb-3 font-semibold" data-simplebar>
                    <simplebar>
                        <filter-checkbox
                            v-for="(filter, index) in filterGroup.filters"
                            :key="index"
                            :filter="filter"
                            :filter-group="filterGroup.id"
                            theme="side"
                        ></filter-checkbox>
                    </simplebar>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import FilterCheckbox from '../Blocks/FilterCheckbox';
import FilterGroup from '../../models/filterGroup';
import simplebar from 'simplebar-vue';

// todo - update global css for collapsable

export default {
    components: {
        'filter-checkbox': FilterCheckbox,
        simplebar
    },
    props: {
        filterGroup: {
            type: FilterGroup,
            default: () => {
                return new FilterGroup('', '', []);
            }
        },
    },
    methods: {
        toggleCollapse(): void {
            this.$emit('collapseToggle', this.filterGroup);
        }
    },
}
</script>
