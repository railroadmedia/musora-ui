<template>
    <div class="flex-1 rounded-lg overflow-hidden">
        <h4
            class="collapse-trigger py-2 px-2 cursor-pointer small:cursor-default small:px-0 flex justify-between small:block small:text-center text-white bg-edge-dark-blue font-bold text-sm small:text-lg uppercase"
            :class="{active: !collapsed}"
            @click.stop.prevent="toggleCollapse()"
        >
            <span class="font-bold font-roboto-cond">{{ title }}</span>
            <div class="small:hidden flex items-center">
                <i class="fas fa-angle-down text-xl font-semibold small:hidden" v-show="collapsed"></i>
                <i class="fas fa-angle-up text-xl font-semibold small:hidden" v-show="!collapsed"></i>
            </div>
        </h4>
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

export default {
    components: {
        'filter-checkbox': FilterCheckbox,
    },
    props: {
        title: {
            type: String,
        },
        filterGroup: {
            type: FilterGroup,
        }
    },
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
        toggleCollapse(): void {
            this.collapsed = !this.collapsed;
        }
    },
};
</script>
