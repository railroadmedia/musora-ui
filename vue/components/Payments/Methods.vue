<template>
    <div>
        <div class="py-8">
            <div class="flex space-x-3">
                <div class="default-col text-center text-xs font-bold capitalize">default</div>
                <div class="flex-1 text-xs font-bold capitalize">info</div>
                <div class="expiry-col text-center text-xs font-bold capitalize">expires on</div>
                <div class="actions-col text-center text-xs font-bold capitalize">actions</div>
            </div>
            <div class="flex space-x-3 py-2" v-for="paymentMethod in paymentMethods">
                <div class="default-col text-center">
                    <i class="fas fa-check" v-if="paymentMethod.isDefault"></i>
                </div>
                <div class="flex-1">{{ paymentMethod.info }}</div>
                <div class="expiry-col text-center">{{ paymentMethod.expiry }}</div>
                <div class="actions-col flex items-center justify-center">
                    <button
                        title="Delete Payment Method"
                        :disabled="paymentMethod.isDefault"
                        @click.stop.prevent="remove(paymentMethod)"
                        class="btn rounded-full hover:bg-light-gray"
                    >
                        <div class="flex items-center justify-center text-red-600"><i class="fas fa-trash"></i></div>
                    </button>
                    <button
                        title="Set As Default"
                        :disabled="paymentMethod.isDefault"
                        @click.stop.prevent="setDefault(paymentMethod)"
                        class="btn rounded-full hover:bg-light-gray"
                    >
                        <div class="flex items-center justify-center text-green-600"><i class="fas fa-check"></i></div>
                    </button>
                </div>
            </div>
        </div>
        <div>
            <button-input
                label="new payment method"
                icon-class="fas fa-plus"
                @click="showAddNew()"
            ></button-input>
        </div>
        <new-payment-method
            :show-modal="newPaymentModal"
            :has-subscription="hasSubscription"
            :is-active="isActive"
            :stripe-publishable-key="stripePublishableKey"
            :brand="brand"
            :user-id="userId"
            :countries="countries"
            :regions="regions"
            :preload-cart-data="preloadCartData"
            @modalClosed="modalClosed"
            @reloadPaymentMethods="reloadPaymentMethods"
        ></new-payment-method>
    </div>
</template>

<script lang="ts">
import Button from '../Blocks/Button';
import NewMethod from './NewMethod';
import Ecommerce from '../../services/ecommerce';

export default {
    components: {
        'button-input': Button,
        'new-payment-method': NewMethod,
    },
    props: {
        preloadData: {
            type: String
        },
        preloadCartData: {
            type: String
        },
        brand: {
            type: String,
            default: () => 'drumeo',
        },
        userId: {
            type: Number,
        },
        hasSubscription: {
            type: Boolean,
        },
        isActive: {
            type: Boolean,
        },
        stripePublishableKey: {
            type: String
        },
        countries: {
            type: Array
        },
        regions: {
            type: Array
        },
    },
    data(): object {
        return {
            newPaymentModal: false,
            paymentMethods: [],
            toasts: null,
        }
    },
    mounted() {
        this.toasts = (window as any)['toasts'];

        let preloadData = JSON.parse(this.preloadData);
        this.paymentMethods = Ecommerce.getPaymentMethodsFromResponse(preloadData);
    },
    methods: {
        remove(paymentMethod) {
            this.toasts.confirm({
                title: 'Are you sure you want to delete this payment method?',
                submitButton: {
                    text: '<span class="bg-red-600 text-white py-3 rounded-full leading-none font-bold focus:outline-none focus:shadow-outline uppercase px-16 leading-none border-2 border-red-600 hover-trans font-roboto">Delete</span>',
                    callback: () => {
                        Ecommerce
                            .deletePaymentMethod(paymentMethod)
                            .then((response) => {
                                this.handleResponse(response, 'deleted');
                            });
                    },
                },
                cancelButton: {
                    text: '<span class="py-3 rounded-full leading-none font-bold focus:outline-none focus:shadow-outline uppercase px-16 leading-none border-2 border-medium-gray text-medium-gray hover-trans hover:bg-light-gray font-roboto">Cancel</span>',
                },
            });
        },
        setDefault(paymentMethod) {
            this.toasts.confirm({
                title: 'Set this payment method as your default?',
                subtitle: 'Your current subscriptions and payment plans will be charged to this payment method.',
                submitButton: {
                    text: '<span class="bg-green-500 text-white py-3 rounded-full leading-none font-bold focus:outline-none focus:shadow-outline uppercase px-16 leading-none border-2 border-green-500 hover-trans font-roboto">Confirm</span>',
                    callback: () => {
                        Ecommerce
                            .setDefaultPaymentMethod(paymentMethod)
                            .then((response) => {
                                this.handleResponse(response, 'set as default');
                            });
                    },
                },
                cancelButton: {
                    text: '<span class="py-3 rounded-full leading-none font-bold focus:outline-none focus:shadow-outline uppercase px-16 leading-none border-2 border-medium-gray text-medium-gray hover-trans hover:bg-light-gray font-roboto">Cancel</span>',
                },
            });
        },
        handleResponse(response, action) {
            this.toasts.push({
                icon: 'fa-smile-beam',
                title: 'Success!',
                themeColor: 'drumeo',
                message: `Payment method has been ${action}!`,
                timeout: 5000
            });

            this.reloadPaymentMethods();
        },
        showAddNew() {
            this.newPaymentModal = true;
        },
        modalClosed() {
            this.newPaymentModal = false;
        },
        reloadPaymentMethods() {
            Ecommerce
                .getPaymentMethods(this.userId)
                .then((response) => {
                    this.paymentMethods = Ecommerce.getPaymentMethodsFromResponse(response);
                });
        },
    },
}
</script>
<style type="text/css">
button.btn {
    height: 35px;
    width: 35px;
}
button.btn:disabled {
    opacity: .5;
    pointer-events: none;
}
</style>