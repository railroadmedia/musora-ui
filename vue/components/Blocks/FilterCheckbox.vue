<template>
    <div
        class="badge-checkbox rounded-full border-2 flex cursor-pointer uppercase"
        :class="$_containerClasses"
        @click.stop.prevent="handleClick()"
    >
        <input
            type="checkbox"
            :id="filter.id"
            :name="filter.name"
            :tabindex="filter.tabIndex"
            class="hidden"
            v-model="filter.active"
        ><label
            :for="filter.id"
            class="cursor-pointer font-roboto"
            :class="$_labelClasses"
        ><i
            class="text-lg pr-1"
            v-if="filter.icon"
        ></i>{{ filter.label }}</label>
    </div>
</template>

<script lang="ts">
import Filter from '../../models/filter';

export default {
    props: {
        filter: {
            type: Filter,
        },
        filterGroup: {
            type: String,
        },
        theme: {
            type: String,
            default: 'blue'
        }
    },
    data(): object {
        return {
            classes: {
                white: {
                    container: {
                        checked: ['border-edge-blue', 'py-2', 'text-sm', 'bg-edge-blue', 'text-white', 'font-extrabold'],
                        unchecked: ['border-edge-blue', 'py-2', 'text-edge-blue', 'text-sm', 'font-medium'],
                    },
                    label: ['ml-2', 'flex', 'content-center'],
                },
                blue: {
                    container: {
                        checked: ['justify-center', 'text-xs', 'leading-none', 'bg-white', 'text-edge-blue', 'border-white', 'font-extrabold'],
                        unchecked: ['justify-center', 'border-edge-dark-blue', 'text-edge-dark-blue', 'text-xs', 'leading-none', 'font-medium'],
                    },
                    label: ['py-2', 'text-xs'],
                }
            },
            defaultTheme: 'blue',
        };
    },
    computed: {
        $_containerClasses() {
            let state = this.filter.active ? 'checked' : 'unchecked';

            return this.classes[this.$_theme]['container'][state];
        },
        $_labelClasses() {
            return this.classes[this.$_theme]['label'];
        },
        $_theme() {
            const themes = {blue: true, white: true};

            return themes[this.theme] ? this.theme : this.defaultTheme;
        },
    },
    mounted(): void {
    },
    methods: {
        handleClick() {
            this.$root.$emit(
                'filterClicked',
                {
                    filter: this.filter,
                    filterGroup: this.filterGroup,
                }
            );
        },
    },
};
</script>
