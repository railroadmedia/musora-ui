<template>
    <div class="flex-1 rounded-lg overflow-hidden">
        <h4
            class="collapse-trigger py-2 px-2 cursor-pointer small:cursor-default small:px-0 flex justify-between small:block small:text-center text-white bg-edge-dark-blue font-bold text-sm small:text-lg uppercase"
            :class="{active: !collapsed}"
            @click.stop.prevent="toggleCollapse()"
        >
            <span class="font-roboto">{{ title }}</span>
            <div class="small:hidden flex items-center">
                <i class="icon-home text-lg font-bold small:hidden" v-show="collapsed"></i>
                <i class="icon-hammer text-lg font-bold small:hidden" v-show="!collapsed"></i>
            </div>
        </h4>
        <div class="collapse-container small:expand">
            <div class="px-3 py-4 flex flex-wrap bg-edge-blue">
                <div
                    :class="$_badgeClass"
                    v-for="item in filters"
                    :key="item.id"
                >
                    <filter-checkbox
                        :filter="item"
                        theme="blue"
                        :extra-padding="filters.length < 6"
                    ></filter-checkbox>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import FilterCheckbox from '../Blocks/FilterCheckbox';

export default {
    components: {
        'filter-checkbox': FilterCheckbox,
    },
    props: {
        filters: {
            type: Array,
        },
        title: {
            type: String,
        },
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

            if (this.filters.length < 6) {
                classes.push('p-2');
            } else {
                classes.push('p-1');
            }

            if (this.filters.length < 5) {
                classes.push('w-full');
                classes.push(smallWidths[this.filters.length]);
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
