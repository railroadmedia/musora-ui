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
                    :countries="countries"
                    :regions="regions"
                    :cart-totals="cartTotals"
                    @updateBilling="updateBilling"
                    @formValidated="formValidated"
                    @formInvalid="formInvalid"
                ></payment-form>
            </div>
            <transition name="grow-fade">
                <div
                    v-show="loading"
                    class="form-loading bg-white shadow rounded-lg overflow p-3 text-center"
                    @click.stop
                >
                    <div class="form-loading-animation relative ">
                        <loading-animation theme-color="drumeo" />
                    </div>

                    <p class="mt-3">
                        Loading Please Wait...
                    </p>

                    <transition name="grow-fade">
                        <div
                            v-show="formSuccess"
                            class="success-message flex flex-col justify-center bg-white rounded-lg pa-3"
                        >
                            <i class="fas fa-check-circle text-green-400"></i>

                            <h4 class="text-xl mb-2">
                                Success!
                            </h4>
                            <p class="text-sm text-medium-gray">
                                Your payment method has been successfully changed!
                            </p>
                        </div>
                    </transition>
                </div>
            </transition>

            <div
                v-show="loading"
                class="loading-overlay"
            ></div>
            <div class="p-6 space-x-6 flex justify-end">
                <button-input
                    label="cancel"
                    theme="white"
                    :extra-small-collapse="true"
                    @click="cancel()"
                ></button-input>
                <button-input
                    label="submit"
                    :extra-small-collapse="true"
                    @click="submit()"
                ></button-input>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import Button from '../Blocks/Button';
import LoadingAnimation from '../Blocks/LoadingAnimation';
import PaymentForm from './PaymentForm';
import Billing from '../../models/billing';
import CartTotals from '../../models/cartTotals';
import Ecommerce from '../../services/ecommerce';

export default {
    components: {
        'button-input': Button,
        'payment-form': PaymentForm,
        'loading-animation': LoadingAnimation
    },
    props: {
        preloadCartData: {
            type: String
        },
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
        countries: {
            type: Array
        },
        regions: {
            type: Array
        },
    },
    data() {
        return {
            billing: new Billing('credit_card', this.brand),
            cartTotals: new CartTotals(0, 0, 0),
            loading: false,
            formSuccess: false,
            toasts: null,
        }
    },
    watch: {
        showModal() {
            this.formSuccess = false;
        },
    },
    mounted() {
        this.toasts = (window as any)['toasts'];

        let preloadCartData = JSON.parse(this.preloadCartData);
        this.cartTotals = Ecommerce.getCartTotals(preloadCartData);
    },
    methods: {
        closeModal() {
            this.$emit('modalClosed', {});
        },

        noop() {},

        cancel() {
            this.billing = new Billing('credit_card', this.brand);
            this.$root.$emit('cancelPaymentForm', {});
            this.closeModal();
        },

        submit() {
            this.$root.$emit('submitPaymentForm', {});
            this.loading = true;
        },

        updateBilling(event) {
            this.billing[event.prop] = event.value;
            
            Ecommerce
                .updateBillingAddress(this.billing)
                .then((response) => {
                    this.cartTotals = Ecommerce.getCartTotalsFromResponse(response.data);
                });
        },

        formValidated(event) {

            this.billing.token = (this.billing.methodType != 'paypal' && event.token)
                ? event.token : undefined;

            Ecommerce
                .createPaymentMethod(this.billing)
                .then((response) => {

                    this.$emit('reloadPaymentMethods', {});

                    if (response) {

                        // because no actual request is made, request loading time is simulated
                        // todo - remove timeouts on integration
                        setTimeout(() => {
                            this.formSuccess = true;
                        }, 1500);

                        setTimeout(() => {
                            this.loading = false;
                            this.$root.$emit('cancelPaymentForm', {});
                            this.closeModal();
                        }, 3500);

                    } else {
                        this.formSuccess = false;

                        this.toasts.push({
                            icon: 'fa-frown',
                            title: 'Oops, something went wrong!',
                            themeColor: 'drumeo',
                            message: 'Payment method has not been created!',
                        });
                    }
                });
        },

        formInvalid() {
            this.loading = false;
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
@media screen and (min-width:64rem) {
    .payment-method-modal {
        width: 800px;
    }
}
.form-loading {
    position:fixed;
    top:50%;
    left:50%;
    z-index:200;
    transform:translate(-50%, -50%);
    width:250px;
}
.form-loading i {
    font-size:72px;
}
.form-loading .form-loading-animation {
    height:0;
    padding-bottom:100%;
}
.form-loading .success-message {
    position:absolute;
    top:0;
    left:0;
    bottom:0;
    right:0;
}
.loading-overlay {
    content: '';
    position:fixed;
    top:0;
    left:0;
    bottom:0;
    right:0;
    z-index:199;
    background:rgba(0,0,0,.4);
}
</style>