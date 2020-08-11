<template>
    <div
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
            class="cursor-pointer"
            :class="$_labelClasses"
        ><i
            :class="$_iconClasses"
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
        theme: {
            type: String,
            default: 'blue'
        },
        extraPadding: {
            type: Boolean,
            default: false
        }
    },
    data(): object {
        return {
            classes: {
                white: {
                    container: {
                        checked: ['badge-checkbox', 'rounded-full', 'border-2', 'flex cursor-pointer', 'uppercase', 'border-edge-blue', 'py-2', 'text-sm', 'bg-edge-blue', 'text-white', 'font-extrabold'],
                        unchecked: ['badge-checkbox', 'rounded-full', 'border-2', 'flex cursor-pointer', 'uppercase', 'border-edge-blue', 'py-2', 'text-edge-blue', 'text-sm', 'font-medium'],
                    },
                    label: {
                        checked: ['ml-2', 'flex', 'content-center', 'font-roboto'],
                        unchecked: ['ml-2', 'flex', 'content-center', 'font-roboto'],
                    },
                    icon: {
                        checked: ['text-lg', 'pr-1'],
                        unchecked: ['text-lg', 'pr-1'],
                    }
                },
                blue: {
                    container: {
                        checked: ['badge-checkbox', 'rounded-full', 'border-2', 'flex cursor-pointer', 'uppercase', 'justify-center', 'text-xs', 'leading-none', 'border-white', 'text-edge-blue', 'bg-white', 'font-extrabold'],
                        unchecked: ['badge-checkbox', 'rounded-full', 'border-2', 'flex cursor-pointer', 'uppercase', 'justify-center', 'text-xs', 'leading-none', 'border-edge-dark-blue', 'text-edge-dark-blue', 'font-medium', 'hover:border-white', 'hover:text-edge-blue', 'hover:bg-white', 'hover:font-extrabold'],
                    },
                    label:  {
                        checked: ['py-2', 'text-xs', 'font-bold', 'font-roboto-cond'],
                        unchecked: ['py-2', 'text-xs', 'font-bold', 'font-roboto-cond'],
                    },
                    icon: {
                        checked: ['text-lg', 'pr-1'],
                        unchecked: ['text-lg', 'pr-1'],
                    }
                },
                side: {
                    container: {
                        checked: ['icon-checkbox', 'px-4', 'text-base'],
                        unchecked: ['icon-checkbox', 'px-4', 'text-base'],
                    },
                    label: {
                        checked: ['font-bold', 'text-black', 'cursor-pointer', 'flex', 'items-center', 'py-1', 'text-xs', 'capitalize'],
                        unchecked: ['cursor-pointer', 'flex', 'items-center', 'py-1', 'text-xs', 'capitalize'],
                    },
                    icon: {
                        checked: ['text-base', 'pr-1', 'fas'],
                        unchecked: ['hidden', 'text-base', 'pr-1', 'fas'],
                    }
                }
            },
            defaultTheme: 'blue',
        };
    },
    computed: {
        $_containerClasses(): string[] {
            let state = this.filter.active ? 'checked' : 'unchecked';

            return this.classes[this.$_theme].container[state];
        },
        $_labelClasses(): string[] {
            let state = this.filter.active ? 'checked' : 'unchecked';

            return this.classes[this.$_theme].label[state];
        },
        $_iconClasses(): string[] {
            let state = this.filter.active ? 'checked' : 'unchecked';

            return this.classes[this.$_theme].icon[state];
        },
        $_theme(): string {
            const themes = {blue: true, white: true, side: true};

            return themes[this.theme] ? this.theme : this.defaultTheme;
        },
    },
    mounted(): void {

        if (this.filter.icon) {
            this.classes[this.$_theme].icon.checked.push(this.filter.icon);
        }

        if (this.$_theme == 'blue' && this.extraPadding) {
            this.classes.blue.container.checked.push('py-1');
            this.classes.blue.container.unchecked.push('py-1');
        }
    },
    methods: {
        handleClick() {
            this.$root.$emit('filterClicked', this.filter);
        },
    },
};
</script>
