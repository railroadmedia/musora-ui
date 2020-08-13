<template>
    <div>
        <div
            class="modal-overlay invisible fixed top-0 left-0 right-0 bottom-0 z-55 opacity-0 flex items-center justify-center"
            :class="$_overlayClasses"
            @click.stop.prevent="visible = false"
        >
            <div class="text-white fixed top-0 right-0 mt-8 mr-10"><i class="fal fa-times fa-5x"></i></div>
            <div
                @click.stop.prevent="noop()"
                class="bg-white cursor-auto z-60 w-xsmall h-64 rounded-lg"
            >
                <h2 class="py-6 text-center font-bold text-lg">
                    <slot name="header">Modal title</slot>
                </h2>
                <div class="px-6 text-center">
                    <slot>Modal description</slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
export default {
    props: {
        modalId: {
            type: String,
        },
    },
    data(): object {
        return {
            visible: false,
        };
    },
    computed: {
        $_overlayClasses(): string[] {
            return this.visible ?
                ['active'] :
                [];
        },
    },
    mounted(): void {
        this.$root.$on('openModal', this.openModal);
        this.$root.$on('closeModal', this.closeModal);
    },
    methods: {
        openModal({id}) {
            if (this.modalId == id) {
                this.visible = true;
            }
        },

        closeModal({id}) {
            if (this.modalId == id) {
                this.visible = false;
            }
        },

        noop() {},
    },
}
</script>
<style type="text/css">
.modal-overlay {
    background-color: rgba(0,0,0,.6);
    transition: opacity .2s ease-in-out,visibility .2s ease-in-out;
    -webkit-transition: opacity .2s ease-in-out,visibility .2s ease-in-out;
    cursor: pointer;
}
.modal-overlay.active {
    visibility: visible;
    opacity: 1;
}
</style>