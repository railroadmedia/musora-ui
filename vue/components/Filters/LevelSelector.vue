<template>
    <div class="flex-1 rounded-lg overflow-hidden bg-edge-blue">
        <div
            class="collapse-trigger py-2 px-2 cursor-pointer small:cursor-default small:px-0 flex justify-center text-white bg-edge-dark-blue font-bold text-sm small:text-lg"
            :class="{active: !collapsed}"
            @click.stop.prevent="toggleCollapse()"
        >
            <div class="flex-1"></div>
            <div class="flex-none font-bold font-roboto-cond uppercase">{{ title }}</div>
            <div class="flex-1 flex items-center pl-2">
                <div class="flex-1">
                    <a
                        class="cursor-pointer flex items-center justify-center border rounded-full w-5 h-5 text-sm text-edge-blue"
                        @click.stop.prevent="showSkillLevelsModal()"
                    >?</a>
                </div>
                <div class="flex leading-none py-4 small:py-0">
                    <a
                        @click.stop.prevent="clearFilterGroup()"
                        class="hover-trans cursor-pointer rounded-full border-2 px-6 text-xs py-1 small:px-8 small:text-base uppercase text-edge-blue hover:border-white hover:bg-white"
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
            <div class="px-2 py-2 small:px-6">
                <div
                    class="grid cursor-pointer"
                    :class="$_gridColsClass"
                >
                    <div
                        class="py-4"
                        v-for="(filter, index) in filterGroup.filters"
                        :key="index"
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
                                v-show="$_activeFilter && $_activeFilter.value == filter.value"
                            ></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col small:flex-row items-center text-2xl">
                    <div class="w-1/4 hidden small:block"></div>
                    <div class="w-2/4 text-center level-tab">
                        <span class="text-white font-extrabold uppercase">{{ $_levelLabel }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import Filter from '../../models/filter';
import FilterGroup from '../../models/filterGroup';

import BlueFiltersMixin from '../../mixins/blueFilters';

export default {
    mixins: [BlueFiltersMixin],
    data(): object {
        return {
            collapsed: true,
        };
    },
    computed: {
        $_levelLabel() {
            let activeFilter = this.$_activeFilter;
            let label = activeFilter ? activeFilter.label : 'all skill levels';

            return label;
        },

        $_gridColsClass() {
            return 'grid-cols-' + this.filterGroup.filters.length;
        },
    },
    methods: {
        select(filter: Filter): void {
            this.$emit('levelSelected', filter);
        },

        getFilterClasses(filter: Filter, index: number): string[] {
            let classes = [];

            if (index == 0) {
                classes.push('rounded-l-full');
            }

            if (index == this.filterGroup.filters.length - 1) {
                classes.push('rounded-r-full');
            }

            if (!this.$_activeFilter || this.$_activeFilter.value < filter.value) {
                classes.push('bg-edge-dark-blue');
            } else {
                classes.push('bg-white');
            }

            return classes;
        },

        showSkillLevelsModal() {
            this.$root.$emit('openModal', {id: 'skill-levels-modal'});
        },
    },
    mounted(): void {
        console.log("LevelSelector::mounted filterGroup: %s", JSON.stringify(this.filterGroup));
    }
};
</script>
