<template>
    <div class="flex-1 rounded-lg overflow-hidden bg-edge-blue">
        <h4
            class="collapse-trigger py-2 px-2 cursor-pointer small:cursor-default small:px-0 flex justify-between small:block small:text-center text-white bg-edge-dark-blue font-bold text-sm small:text-lg"
            :class="{active: !collapsed}"
            @click.stop.prevent="toggleCollapse()"
        >
            <span class="font-roboto uppercase">{{ title }}</span>
            <div class="small:hidden flex items-center">
                <div class="flex items-center justify-center border rounded-full w-4 h-4 mr-2 text-xs text-medium-gray">?</div>
                <i class="icon-home text-lg font-bold small:hidden" v-show="collapsed"></i>
                <i class="icon-hammer text-lg font-bold small:hidden" v-show="!collapsed"></i>
            </div>
        </h4>
        <div class="collapse-container small:expand">
            <div class="px-2 py-2 small:px-6">
                <div
                    class="grid cursor-pointer"
                    :class="$_gridColsClass"
                >
                    <div
                        class="py-4"
                        v-for="(filter, index) in filterGroup.filters"
                        :key="filter.id"
                        @click.stop.prevent="select(filter)"
                    >
                        <div
                            style="height: 12px;"
                            class="border-2 border-edge-blue bg-white relative"
                            :class="getFilterClasses(filter, index)"
                        >
                            <input type="radio" class="hidden" id="level-one" name="level" value="1">
                            <div
                                style="height: 30px; width: 30px; top: -11px; right: -11px"
                                class="border-4 border-edge-blue bg-white rounded-full absolute z-10"
                                v-show="currentLevel == filter.value"
                            ></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col small:flex-row items-center text-2xl">
                    <div class="w-1/4 hidden small:block"></div>
                    <div class="w-2/4 text-center level-tab">
                        <span class="text-white font-extrabold uppercase">{{ $_levelLabel }}</span>
                    </div>
                    <div class="w-1/4 flex justify-center leading-none py-4 small:justify-end small:py-0">
                        <a href="#" class="rounded-full border-2 border-edge-dark-blue text-edge-dark-blue px-6 text-xs py-1 small:px-8 small:text-base uppercase">all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import Filter from '../../models/filter';
import FilterGroup from '../../models/filterGroup';

export default {
    props: {
        currentLevel: {
            type: String,
        },
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
        $_levelLabel() {
            let label;

            this.filterGroup.filters.forEach((filter) => {
                if (filter.value == this.currentLevel) {
                    label = filter.label;
                }
            });

            return 'LEVEL ' + label;
        },

        $_gridColsClass() {
            return 'grid-cols-' + this.filterGroup.filters.length;
        },
    },
    methods: {
        select(filter: Filter): void {
            this.$emit('levelSelected', {level: filter.value});
        },

        toggleCollapse(): void {
            this.collapsed = !this.collapsed;
        },

        getFilterClasses(filter: Filter, index: number): string[] {
            let classes = [];

            if (index == 0) {
                classes.push('rounded-l-full');
            }

            if (index == this.filterGroup.filters.length - 1) {
                classes.push('rounded-r-full');
            }

            if (this.currentLevel < filter.value) {
                classes.push('bg-edge-dark-blue');
            } else {
                classes.push('bg-white');
            }

            return classes;
        },
    }
};
</script>
