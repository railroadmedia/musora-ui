<template>
    <div class="flex-1 rounded-lg overflow-hidden bg-edge-blue">
        <div
            class="collapse-trigger py-2 px-2 cursor-pointer small:cursor-default small:px-0 flex justify-center text-white bg-edge-dark-blue font-bold text-sm small:text-lg"
            :class="{active: !collapsed}"
            @click.stop.prevent="toggleCollapse()"
        >
            <div class="flex-1 hidden sm:flex"></div>
            <div class="flex-none font-bold font-roboto-cond uppercase">{{ title }}</div>
            <div class="flex-1 flex items-center pl-2">
                <div class="flex-1">
                    <a
                        class="cursor-pointer flex items-center justify-center border rounded-full w-5 h-5 text-sm text-edge-blue"
                        @click.stop.prevent="showSkillLevelsModal()"
                    >?</a>
                </div>
                <div class="flex leading-none">
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
                <div class="py-2">
                    <vue-slider
                        v-model="$_sliderValue"
                        marks
                        lazy
                        :min="0"
                        :max="9"
                        :height="8"
                        :dot-size="[24, 24]"
                        :tooltip="'none'"
                        :hide-label="true"
                        :step-style="{ backgroundColor: '#0B76DB' }"
                        :process-style="{ backgroundColor: '#fff' }"
                        :rail-style="{ backgroundColor: '#094A86' }"
                        :dot-style="{ boxShadow: '0 0 0 5px #0B76DB' }"
                    >
                        <template v-slot:step="{ label, active }">
                            <div :class="['skill-step', { active }, 'step-' + label]"></div>
                        </template>
                    </vue-slider>
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

import VueSlider from 'vue-slider-component';
import 'vue-slider-component/theme/default.css';

export default {
    components: {
        VueSlider
    },
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

        $_sliderValue: {
            get() {
                return this.$_activeFilter ? this.$_activeFilter.value : 0;
            },
            set(value) {
                if (value == 0) {
                    this.clearFilterGroup();
                } else {
                    let selectedFilter;

                    this.filterGroup.filters.forEach((filter) => {
                        if (filter.value == value) {
                            selectedFilter = filter;
                        }
                    });

                    this.select(selectedFilter);
                }
            }
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
};
</script>
<style>
    .skill-step {
        width: 40%;
        height: 100%;
        background-color: #0B76DB;
        cursor: pointer;
    }
    .skill-step.active {
    }
    .skill-step.step-9 {
        width: 0;
        height: 0;
    }
</style>