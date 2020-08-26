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
                    :billing="billing"
                    @updateBilling="updateBilling"
                    @formValidated="formValidated"
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
import Billing from '../../models/billing';
import Ecommerce from '../../services/ecommerce';

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
        brand: {
            type: String,
            default: 'drumeo'
        },
    },
    data() {
        return {
            billing: new Billing('credit_card', this.brand),
        }
    },
    methods: {
        closeModal() {
            this.$emit('modalClosed', {});
        },

        noop() {},

        cancel() {
            this.billing = new Billing('credit_card', this.brand);
            this.$root.$emit('cancelPaymentForm', this.filter);
            this.closeModal();
        },

        submit() {
            this.$root.$emit('submitPaymentForm', {});
        },

        updateBilling(event) {
            this.billing[event.prop] = event.value;
            // todo - add billing address update request
        },

        formValidated(event) {

            this.billing.token = (this.billing.methodType != 'paypal' && event.token)
                ? event.token : undefined;

            // todo - add loading state transition

            Ecommerce
                .updatePaymentMethod(this.billing)
                .then((response) => {
                    console.log("NewMethod::formValidated response: %s", JSON.stringify(response));
                    // todo - add response handling, redirect to paypal url from response or trigger methods refresh
                    this.$emit('reloadPaymentMethods', {});
                    // todo - remove the loading state transition
                });
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