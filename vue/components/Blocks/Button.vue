<template>
    <button
        :type="type"
        class="py-3 rounded-full leading-none font-bold focus:outline-none focus:shadow-outline active:bg-blue-700 uppercase font-roboto flex items-center"
        :class="$_inputClasses"
        :tabindex="tabIndex"
        @click.stop.prevent="click()"
    ><i class="text-lg pr-3" :class="iconClass" v-if="iconClass"></i> {{ label }}</button>
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
        theme: {
            type: String,
            default: 'blue'
        }
    },
    computed: {
        $_inputClasses(): string[] {
            let classes = ['px-16'];

            if (this.fullWidth) {
                classes = ['px-4', 'w-full'];
            } else if (this.fixedWidth) {
                classes = ['w-48', 'flex', 'justify-center'];
            }

            if (this.theme == 'blue') {
                classes.push('bg-edge-blue');
                classes.push('border-2');
                classes.push('border-edge-blue');
                classes.push('text-white');
            } else if (this.theme == 'blue-reversed') {
                classes.push('border-2');
                classes.push('border-edge-blue');
                classes.push('text-edge-blue');
                classes.push('active:text-white');
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
    },
    methods: {
        click() {
            this.$emit('click', {});
        }
    },
}
</script>
