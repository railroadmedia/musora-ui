<template>
    <div class="flex-1 rounded-lg overflow-hidden">
        <div
            class="collapse-trigger py-2 px-2 cursor-pointer small:cursor-default small:px-0 flex justify-center text-white bg-edge-dark-blue font-bold text-sm small:text-lg uppercase"
            :class="{active: !collapsed}"
            @click.stop.prevent="toggleCollapse()"
        >
            <div class="flex-1"></div>
            <div class="font-bold font-roboto-cond">{{ title }}</div>
            <div class="flex-1 flex items-center justify-end pl-2">
                <div class="flex leading-none py-4 small:py-0">
                    <a
                        @click.stop.prevent="clearFilterGroup()"
                        class="cursor-pointer rounded-full border-2 px-6 text-xs py-1 small:px-8 small:text-base uppercase text-edge-blue hover:border-white hover:bg-white"
                        :class="$_buttonAllClasses"
                    >all</a>
                </div>
                <div class="flex items-center px-2">
                    <i class="fas fa-angle-down text-xl font-semibold small:hidden" v-show="collapsed"></i>
                    <i class="fas fa-angle-up text-xl font-semibold small:hidden" v-show="!collapsed"></i>
                </div>
            </div>
        </div>
        <div class="collapse-container small:expand">
            <div class="px-3 py-4 flex flex-wrap bg-edge-blue">
                <div
                    :class="$_badgeClass"
                    v-for="(item, index) in filterGroup.filters"
                    :key="index"
                >
                    <filter-checkbox
                        :filter="item"
                        theme="blue"
                        :extra-padding="filterGroup.filters.length < 6"
                    ></filter-checkbox>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import FilterCheckbox from '../Blocks/FilterCheckbox';
import FilterGroup from '../../models/filterGroup';

import BlueFiltersMixin from '../../mixins/blueFilters';

export default {
    components: {
        'filter-checkbox': FilterCheckbox,
    },
    mixins: [BlueFiltersMixin],
    data(): object {
        return {
            collapsed: true,
        };
    },
    computed: {
        $_badgeClass(): string[] {
            let classes = [];
            let smallWidths = {
                2: 'small:w-1/2',
                3: 'small:w-1/3',
                4: 'small:w-1/4',
            };

            if (this.filterGroup.filters.length < 6) {
                classes.push('p-2');
            } else {
                classes.push('p-1');
            }

            if (this.filterGroup.filters.length < 5) {
                classes.push('w-full');
                classes.push(smallWidths[this.filterGroup.filters.length]);
            } else {
                classes.push('w-1/2');
                classes.push('small:w-1/5');
            }

            return classes;
        }
    },
    methods: {
    },
};
</script>
