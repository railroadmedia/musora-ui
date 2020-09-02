<template>
    <button
        :type="type"
        class="rounded-full leading-none font-bold focus:outline-none focus:shadow-outline uppercase font-roboto flex items-center"
        :class="$_inputClasses"
        :tabindex="tabIndex"
        @click.stop.prevent="click()"
    ><i class="text-lg pr-3" :class="$_iconClass" v-if="iconClass"></i> {{ label }}</button>
</template>

<script lang="ts">

export default {
    props: {
        type: {
            type: String,
            default: 'button'
        },
        iconClass: {
            type: String,
            default: ''
        },
        tabIndex: {
            type: Number,
            default: 0
        },
        label: {
            type: String,
            default: ''
        },
        fullWidth: {
            type: Boolean,
            default: false
        },
        fixedWidth: {
            type: Boolean,
            default: false
        },
        extraSmallCollapse: {
            type: Boolean,
            default: false
        },
        theme: {
            type: String,
            default: 'blue'
        },
        collapse: {
            type: String,
            default: 'sm'
        }
    },
    computed: {
        $_inputClasses(): string[] {
            let classes = ['px-16'];

            if (this.fullWidth) {
                classes = ['py-3', 'px-4', 'w-full'];
            } else if (this.fixedWidth) {
                classes = ['py-3', 'w-48', 'flex', 'justify-center'];
            } else if (this.extraSmallCollapse) {
                let collapseClassX = this.collapse + ':px-16';
                let collapseClassY = this.collapse + ':py-3';
                classes = ['py-2', 'px-6', collapseClassX, collapseClassY];
            }

            if (this.theme == 'blue') {
                classes.push('bg-edge-blue');
                classes.push('border-2');
                classes.push('border-edge-blue');
                classes.push('text-white');
                classes.push('active:bg-blue-700');
            } else if (this.theme == 'blue-reversed') {
                classes.push('border-2');
                classes.push('border-edge-blue');
                classes.push('text-edge-blue');
                classes.push('active:text-white');
                classes.push('active:bg-blue-700');
            } else if (this.theme == 'white') {
                classes.push('border-2');
                classes.push('border-white');
                classes.push('text-black');
                classes.push('hover-trans');
                classes.push('hover:bg-light-gray');
                classes.push('hover:border-light-gray');
            }

            return classes;
        },
        $_iconClass(): string[] {
            let classes = [this.iconClass];

            if (this.extraSmallCollapse) {
                let displayClass = this.collapse + ':inline-block';
                classes.push('hidden');
                classes.push(displayClass);
            }

            return classes;
        }
    },
    methods: {
        click() {
            this.$emit('click', {});
        }
    },
}
</script>
