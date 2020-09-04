<template>
    <div
        class="modal-overlay invisible fixed top-0 left-0 right-0 bottom-0 z-55 opacity-0 flex items-center justify-center"
        :class="$_overlayClasses"
        @click.stop.prevent="cancel"
    >
        <div class="text-white fixed top-0 right-0 mt-8 mr-10"><i class="fal fa-times fa-5x"></i></div>
        <transition name="grow-fade">
            <div
                @click.stop.prevent="noop"
                class="bg-white cursor-auto z-60 w-xsmall rounded-lg"
            >
                <slot name="header">Modal title</slot>
                <slot>Modal description</slot>
                <div
                    class="p-8 flex justify-around"
                    :class="actionsContainerClasses"
                >
                    <button-input
                        :label="actionCancelLabel"
                        :theme="actionCancelTheme"
                        :extra-small-collapse="true"
                        @click="cancel"
                    ></button-input>
                    <button-input
                        :label="actionSubmitLabel"
                        :theme="actionSubmitTheme"
                        :extra-small-collapse="true"
                        @click="submit"
                    ></button-input>
                </div>
            </div>
        </transition>
    </div>
</template>
<script lang="ts">
import Button from '../Blocks/Button';

export default {
    components: {
        'button-input': Button,
    },
    props: {
        showModal: {
            type: Boolean,
            default: false
        },
        payload: {
            type: Object,
            default: () => {}
        },
        actionsContainerClasses: {
            type: Array,
            default: () => []
        },
        actionSubmitTheme: {
            type: String,
            default: 'blue'
        },
        actionSubmitLabel: {
            type: String,
            default: 'submit'
        },
        actionCancelTheme: {
            type: String,
            default: 'white'
        },
        actionCancelLabel: {
            type: String,
            default: 'cancel'
        },
    },
    computed: {
        $_overlayClasses(): string[] {
            return this.showModal ?
                ['active'] :
                [];
        },
    },
    methods: {
        noop() {},

        submit() {
            this.$emit('confirmationSubmit', {payload: this.payload});
        },

        cancel() {
            this.$emit('confirmationCancel', {payload: this.payload});
        },
    },
}
</script>
