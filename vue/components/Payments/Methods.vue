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
            Ecommerce
                .deletePaymentMethod(paymentMethod)
                .then((response) => {
                    // todo - show error/success toasts
                    console.log("PaymentMethods::remove response: %s", JSON.stringify(response));

                    this.reloadPaymentMethods();
                });
        },
        setDefault(paymentMethod) {
            Ecommerce
                .setDefaultPaymentMethod(paymentMethod)
                .then((response) => {
                    // todo - show error/success toasts
                    console.log("PaymentMethods::setDefault response: %s", JSON.stringify(response));

                    this.reloadPaymentMethods();
                });
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