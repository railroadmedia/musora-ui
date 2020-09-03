<template>
    <div>
        <div class="py-8">
            <div class="flex space-x-3">
                <div class="hidden md:block default-col text-center text-xs font-bold capitalize">default</div>
                <div class="flex-1 text-xs font-bold capitalize">info</div>
                <div class="expiry-col text-center text-xs font-bold capitalize">expires on</div>
                <div class="actions-col text-center text-xs font-bold capitalize">actions</div>
            </div>
            <div class="flex space-x-3 py-2" v-for="paymentMethod in paymentMethods">
                <div class="hidden md:block default-col text-center">
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
                extra-small-collapse
                collapse="md"
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
        <confirmation-modal
            :payload="deletePaymentMethod"
            :show-modal="showDeleteConfirmation"
            :actions-container-classes="['flex-row-reverse']"
            action-submit-label="delete"
            action-submit-theme="red"
            action-cancel-theme="wire"
            @confirmationSubmit="deletePaymentMethodConfirmation"
            @confirmationCancel="deletePaymentMethodCancel"
        >
            <template v-slot:header>
                <h2 class="p-6 pb-0 text-center font-bold text-xl">Are you sure you want to delete this payment method?</h2>
            </template>
                <div class="uppercase text-center text-medium-gray text-xs">this can not be undone</div>
        </confirmation-modal>
        <confirmation-modal
            :payload="setDefaultPaymentMethod"
            :show-modal="showSetDefaultConfirmation"
            :actions-container-classes="['flex-row-reverse']"
            action-submit-label="confirm"
            action-submit-theme="green"
            action-cancel-theme="wire"
            @confirmationSubmit="setDefaultConfirmation"
            @confirmationCancel="setDefaultCancel"
        >
            <template v-slot:header>
                <h2 class="p-6 pb-0 text-center font-bold text-xl">Set this payment method as your default?</h2>
            </template>
                <div class="px-8 uppercase text-medium-gray text-xs">Your current subscriptions and payment plans will be charged to this payment method.</div>
        </confirmation-modal>
    </div>
</template>

<script lang="ts">
import Button from '../Blocks/Button';
import NewMethod from './NewMethod';
import Ecommerce from '../../services/ecommerce';
import ConfirmationModal from '../Modals/Confirmation';

import {SnotifyPosition} from 'vue-snotify';

export default {
    components: {
        'button-input': Button,
        'new-payment-method': NewMethod,
        'confirmation-modal': ConfirmationModal,
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
            deletePaymentMethod: null,
            showDeleteConfirmation: false,
            setDefaultPaymentMethod: null,
            showSetDefaultConfirmation: false,
            processing: false,
        }
    },
    mounted() {
        this.toasts = (window as any)['toasts'];

        // this.$toasted.show('payment method has been set as default', {position: 'top-left', className: 'white-toast', containerClass: 'custom-toast', iconPack: 'fontawesome', icon: 'fa-smile-beam'})

        // this.$vToastify.success({
        //     body: 'payment method has been set as default',
        //     title: 'success!',
        //     position: 'top-left',
        //     icon: 'fal fa-smile-beam fa-3x',
        //     theme: 'light',
        // });

        this.$snotify.success(
            'Payment method has been set as default',
            'Success!',
            {
                timeout: 0,
                icon: 'fal fa-smile-beam fa-3x',
                position: SnotifyPosition.leftTop
            }
        );

        let preloadData = JSON.parse(this.preloadData);
        this.paymentMethods = Ecommerce.getPaymentMethodsFromResponse(preloadData);
    },
    methods: {
        remove(paymentMethod) {
            if (!this.processing) {
                this.deletePaymentMethod = paymentMethod;
                this.showDeleteConfirmation = true;
            }
        },
        setDefault(paymentMethod) {
            if (!this.processing) {
                this.setDefaultPaymentMethod = paymentMethod;
                this.showSetDefaultConfirmation = true;
            }
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
        deletePaymentMethodConfirmation(event) {
            this.showDeleteConfirmation = false;
            this.deletePaymentMethod = null;
            this.processing = true;
            Ecommerce
                .deletePaymentMethod(event.payload)
                .then((response) => {
                    this.processing = false;
                    this.handleResponse(response, 'deleted');
                });
        },
        deletePaymentMethodCancel(event) {
            this.showDeleteConfirmation = false;
            this.deletePaymentMethod = null;
        },
        setDefaultConfirmation(event) {
            this.showSetDefaultConfirmation = false;
            this.setDefaultPaymentMethod = null;
            this.processing = true;
            Ecommerce
                .setDefaultPaymentMethod(event.payload)
                .then((response) => {
                    this.processing = false;
                    this.handleResponse(response, 'set as default');
                });
        },
        setDefaultCancel(event) {
            this.showSetDefaultConfirmation = false;
            this.setDefaultPaymentMethod = null;
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
/*.toasted-container.custom-toast.top-left {
    top: 15%;
    left: 0;
}
.custom-toast .toasted.white-toast {
    background-color: white;
    color: black;
}
.custom-toast .toasted.white-toast .fa {
    font-size: 2rem;
}*/
</style>