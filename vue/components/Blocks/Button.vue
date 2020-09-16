<template>
    <button
        :type="type"
        class="rounded-full leading-none font-bold focus:outline-none focus:shadow-outline uppercase font-roboto flex items-center"
        :class="$_inputClasses"
        :tabindex="tabIndex"
        @click.stop.prevent="click()"
    ><i class="text-lg" :class="$_leftIconClasses" v-if="iconClass"></i><span :class="$_labelClasses">{{ label }}</span><i class="text-lg" :class="$_rightIconClasses" v-if="rightIconClass"></i></button>
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
        rightIconClass: {
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
        },
        collapseIcon: {
            type: Boolean,
            default: false
        },
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
            } else if (this.collapseIcon) {
                classes = ['py-4', 'px-5', 'sm:py-3', 'sm:px-16'];
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

                if (!this.fullWidth && !this.fixedWidth && !this.extraSmallCollapse) {
                    classes.push('flex');
                    classes.push('content-center');

                    if (!this.collapseIcon) {
                        classes.push('py-3');
                    }
                }
            } else if (this.theme == 'white') {
                classes.push('border-2');
                classes.push('border-white');
                classes.push('text-black');
                classes.push('hover-trans');
                classes.push('hover:bg-light-gray');
                classes.push('hover:border-light-gray');
            } else if (this.theme == 'wire') {
                classes.push('border-2');
                classes.push('border-gray');
                classes.push('bg-white');
                classes.push('text-gray');
                classes.push('hover:bg-light-gray');
            } else if (this.theme == 'red') {
                classes.push('border-2');
                classes.push('border-red-600');
                classes.push('bg-red-600');
                classes.push('text-white');
            } else if (this.theme == 'green') {
                classes.push('border-2');
                classes.push('border-green-500');
                classes.push('bg-green-500');
                classes.push('text-white');
            }

            return classes;
        },
        $_leftIconClasses(): string[] {
            let classes = [this.iconClass];

            if (this.collapseIcon) {
                classes.push('sm:pr-3');
            } else {
                classes.push('pr-3');
            }

            if (this.extraSmallCollapse) {
                let displayClass = this.collapse + ':inline-block';
                classes.push('hidden');
                classes.push(displayClass);
            }

            return classes;
        },
        $_rightIconClasses(): string[] {
            let classes = [this.rightIconClass];

            if (this.collapseIcon) {
                classes.push('sm:pl-3');
            } else {
                classes.push('pl-3');
            }

            if (this.extraSmallCollapse) {
                let displayClass = this.collapse + ':inline-block';
                classes.push('hidden');
                classes.push(displayClass);
            }

            return classes;
        },
        $_labelClasses(): string[] {
            let classes = [];

            if (this.collapseIcon) {
                classes.push('hidden');
                classes.push('sm:inline');
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
