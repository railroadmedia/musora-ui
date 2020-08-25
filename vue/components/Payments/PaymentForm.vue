<template>
    <div class="w-full space-y-4">
        <div class="flex space-x-4">
            <div class="flex-1">
                <select-input
                    id="payment-method"
                    label="Payment Method Type"
                    theme="wire"
                    :selected-value="methodType"
                    :options="paymentMethods"
                    @change="paymentMethodSelected"
                ></select-input>
            </div>
            <div class="flex-1 flex space-x-4">
                <div class="">
                    <i class="fab fa-cc-visa fa-3x"></i>
                </div>

                <div class="">
                    <i class="fab fa-cc-mastercard fa-3x"></i>
                </div>

                <div class="">
                    <i class="fab fa-cc-amex fa-3x"></i>
                </div>

                <div class="">
                    <i class="fab fa-cc-paypal fa-3x"></i>
                </div>
            </div>
        </div>
        <div v-show="methodType === 'credit_card'" class="flex space-x-4">
            <div class="flex-1">
                <div class="relative">
                    <div
                        id="card-number"
                        class="stripe-element-container w-full rounded-full p-3 pl-6 pt-4 pb-1 focus:outline-none floating-label empty-input"
                        :class="$_cardNumberElementBorder"
                    ></div>
                    <label for="card-number" class="absolute text-medium-gray hover:cursor-text">Card Number</label>
                    <p
                        class="text-validation-red text-xs italic font-bold mt-2 ml-2"
                        v-for="error in errors.cardNumber"
                    >{{ error }}</p>
                </div>
            </div>
            <div class="flex-1 flex space-x-4">
                <div class="flex-1">
                    <div class="relative">
                        <div
                            id="card-expiry"
                            class="stripe-element-container w-full rounded-full p-3 pl-6 pt-4 pb-1 focus:outline-none floating-label empty-input"
                            :class="$_cardExpiryElementBorder"
                        ></div>
                        <label for="card-expiry" class="absolute text-medium-gray hover:cursor-text">Expiry (MM / YY)</label>
                        <p
                            class="text-validation-red text-xs italic font-bold mt-2 ml-2"
                            v-for="error in errors.cardExpiry"
                        >{{ error }}</p>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="relative">
                        <div
                            id="card-cvc"
                            class="stripe-element-container w-full rounded-full p-3 pl-6 pt-4 pb-1 focus:outline-none floating-label empty-input"
                            :class="$_cardCvcElementBorder"
                        ></div>
                        <label for="card-cvc" class="absolute text-medium-gray hover:cursor-text">CVC</label>
                        <p
                            class="text-validation-red text-xs italic font-bold mt-2 ml-2"
                            v-for="error in errors.cardCvc"
                        >{{ error }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex space-x-4 mb-4">
            <div class="flex-1">
                <select-input
                    id="billing-country"
                    label="Country"
                    theme="wire"
                    :selected-value="billingCountry"
                    :options="countries"
                    :validation-errors="errors.billingCountry"
                    @change="billingCountrySelected"
                ></select-input>
            </div>
            <div class="flex-1" v-if="billingCountry && billingCountry.toLowerCase() == 'canada'">
                <select-input
                    id="billing-region"
                    label="State/Province"
                    theme="wire"
                    :selected-value="billingRegion"
                    :options="regions"
                    :validation-errors="errors.billingRegion"
                    @change="billingRegionSelected"
                ></select-input>
            </div>
        </div>
        <div v-if="methodType == 'paypal'">
            <p class="italic text-medium-gray text-xs">
                * Submitting this form will redirect you to PayPal to complete your order. 
            </p>
        </div>
        <div v-if="hasSubscription">
            <p class="italic text-medium-gray text-xs">
                * Submitting this form will create a new default payment method for you.
                Your current subscription will be billed to this payment method when it's due.
            </p>
            <!-- todo: add totals block -->
        </div>
    </div>
</template>

<script lang="ts">
import SelectInput from '../Blocks/Select';

export default {
    components: {
        'select-input': SelectInput,
    },
    props: {
        hasSubscription: {
            type: Boolean,
        },
        isActive: {
            type: Boolean,
        },
        stripePublishableKey: {
            type: String
        },
    },
    data() {
        return {
            paymentMethods: [{value: 'credit_card', label: 'Credit Card'}, {value: 'paypal', label: 'PayPal'}],
            methodType: 'credit_card',
            countries: ['United States', 'Canada', 'United Kingdom', 'Australia'],
            billingCountry: null,
            regions: ['Alberta', 'British Columbia'],
            billingRegion: null,

            stripe: null,
            cardNumberElement: null,
            cardExpiryElement: null,
            cardCvcElement: null,

            errors: {
                methodType: [],
                billingCountry: [],
                billingRegion: [],
                cardNumber: [],
                cardExpiry: [],
                cardCvc: [],
            },
        }
    },
    computed: {
        $_cardNumberElementBorder(): string[] {
            let classes = [];

            if (!this.errors.cardNumber.length) {
                classes.push('border-1');
                classes.push('border-gray');
            }

            return classes;
        },

        $_cardExpiryElementBorder(): string[] {
            let classes = [];

            if (!this.errors.cardExpiry.length) {
                classes.push('border-1');
                classes.push('border-gray');
            }

            return classes;
        },

        $_cardCvcElementBorder(): string[] {
            let classes = [];

            if (!this.errors.cardCvc.length) {
                classes.push('border-1');
                classes.push('border-gray');
            }

            return classes;
        },
    },
    mounted() {
        console.log("PaymentForm::paymentMethodSelected stripePublishableKey: %s", JSON.stringify(this.stripePublishableKey));
        this.initStripeElements();
    },
    methods: {
        paymentMethodSelected(event) {
            console.log("PaymentForm::paymentMethodSelected event: %s", JSON.stringify(event));
            // todo - update
            this.methodType = event.value;
        },
        billingCountrySelected(event) {
            console.log("PaymentForm::billingCountrySelected event: %s", JSON.stringify(event));
            // todo - update
            this.billingCountry = event.value;
        },
        billingRegionSelected(event) {
            console.log("PaymentForm::billingRegionSelected event: %s", JSON.stringify(event));
            // todo - update
            this.billingRegion = event.value;
        },
        initStripeElements() {
            this.stripe = (window as any).Stripe(this.stripePublishableKey);

            const elements = this.stripe.elements();
            const style = {
                base: {
                    fontFamily: '"Open Sans", sans-serif',
                    fontSize: '16px',
                    fontStyle: 'normal',
                    fontWeight: 300,
                    fontVariant: 'normal',
                    color: '#333333',
                    '::placeholder': {
                        color: 'transparent',
                    },
                },
                invalid: {
                    color: '#F71B26',
                },
            };

            this.cardNumberElement = elements.create('cardNumber', { style });
            this.cardNumberElement.mount('#card-number');
            this.cardNumberElement.on('change', (payload) => {
                this.elementsChangeHandler(payload, 'cardNumber');
            });

            this.cardExpiryElement = elements.create('cardExpiry', { style });
            this.cardExpiryElement.mount('#card-expiry');
            this.cardExpiryElement.on('change', (payload) => {
                this.elementsChangeHandler(payload, 'cardExpiry');
            });

            this.cardCvcElement = elements.create('cardCvc', { style });
            this.cardCvcElement.mount('#card-cvc');
            this.cardCvcElement.on('change', (payload) => {
                this.elementsChangeHandler(payload, 'cardCvc');
            });
        },

        elementsChangeHandler(payload, controlName) {
            console.log(
                'PaymentForm::elementsChangeHandler controlName: %s, payload: %s',
                JSON.stringify(controlName),
                JSON.stringify(payload)
            );
            this.errors[controlName] = [];

            if (payload.error) {
                this.errors[controlName].push(payload.error.message);
            }
        },
    },
}
</script>
<style type="text/css">
.stripe-element-container {
    height: 46px;
}
/*
.stripe-element-container.StripeElement--complete ~ label,
.stripe-element-container.StripeElement--focus ~ label,
.stripe-element-container.StripeElement--invalid  ~ label {
    transform:scale(.7) translateY(-8px) translateX(15px);
}
*/
</style>