<template>
    <div
        class="modal-overlay invisible fixed top-0 left-0 right-0 bottom-0 opacity-0 flex items-center justify-center"
        :class="$_overlayClasses"
        @click.stop.prevent="closeModal"
    >
        <div class="text-white fixed top-0 right-0 mt-8 mr-10"><i class="fal fa-times fa-5x"></i></div>
        <div
            @click.stop.prevent="noop()"
            class="payment-method-modal bg-white cursor-auto z-60 w-xsmall rounded-lg"
        >
            <h2 class="p-6 font-bold text-3xl">Add New Payment Method</h2>
            <div class="p-6">
                <payment-form
                    :has-subscription="hasSubscription"
                    :is-active="isActive"
                    :stripe-publishable-key="stripePublishableKey"
                ></payment-form>
            </div>
            <div class="p-6 space-x-6 flex justify-end">
                <button-input
                    label="cancel"
                    theme="white"
                    @click="cancel()"
                ></button-input>
                <button-input
                    label="submit"
                    @click="submit()"
                ></button-input>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import Button from '../Blocks/Button';
import PaymentForm from './PaymentForm';

export default {
    components: {
        'button-input': Button,
        'payment-form': PaymentForm,
    },
    props: {
        showModal: {
            type: Boolean,
        },
        hasSubscription: {
            type: Boolean,
        },
        isActive: {
            type: Boolean,
        },
        stripePublishableKey: {
            type: String,
        },
    },
    methods: {
        closeModal() {
            this.$emit('modalClosed', {});
        },

        noop() {},

        cancel() {
            this.$emit('modalClosed', {});
            console.log("Payments\\NewMethod::cancel");
        },

        submit() {
            console.log("Payments\\NewMethod::submit");
        },
    },
    computed: {
        $_overlayClasses(): string[] {
            return this.showModal ?
                ['active'] :
                [];
        },
    },
}
</script>

<style type="text/css">
.modal-overlay {
    background-color: rgba(0,0,0,.6);
    transition: opacity .2s ease-in-out,visibility .2s ease-in-out;
    -webkit-transition: opacity .2s ease-in-out,visibility .2s ease-in-out;
    cursor: pointer;
    z-index: -1;
}
.modal-overlay.active {
    visibility: visible;
    opacity: 1;
    z-index: 55;
}
.payment-method-modal {
    width: 800px;
}
</style>