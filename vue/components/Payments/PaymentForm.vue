<template>
    <div class="w-full space-y-4">
        <div class="flex space-x-4">
            <div class="flex-1">
                <select-input
                    id="payment-method"
                    label="Payment Method Type"
                    theme="wire"
                    :selected-value="billing.methodType"
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
        <div v-show="billing.methodType === 'credit_card'" class="flex space-x-4">
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
                    :selected-value="billing.country"
                    :options="countries"
                    :validation-errors="errors.country"
                    @change="billingCountrySelected"
                ></select-input>
            </div>
            <div class="flex-1" v-if="billing.country && billing.country.toLowerCase() == 'canada'">
                <select-input
                    id="billing-region"
                    label="State/Province"
                    theme="wire"
                    :selected-value="billing.region"
                    :options="regions"
                    :validation-errors="errors.region"
                    @change="billingRegionSelected"
                ></select-input>
            </div>
        </div>
        <div v-if="billing.methodType == 'paypal'">
            <p class="italic text-medium-gray text-xs">
                * Submitting this form will redirect you to PayPal to complete your order. 
            </p>
        </div>
        <div v-if="hasSubscription">
            <p class="italic text-medium-gray text-xs">
                * Submitting this form will create a new default payment method for you.
                Your current subscription will be billed to this payment method when it's due.
            </p>
            <div v-if="hasSubscription && !isActive" class="flex">
                <div class="flex-1">
                    <p class="italic text-medium-gray text-xs">* Payment for inactive subscriptions is due today.</p>
                </div>
                <div class="flex-1">
                    <div class="text-right font-bold" v-if="cartTotals.shipping">Shipping: ${{ getWithDecimals(cartTotals.shipping) }}</div>
                    <div class="text-right font-bold">Tax: ${{ getWithDecimals(cartTotals.tax) }}</div>
                    <div class="text-right font-bold"><span class="text-4xl">${{ getWithDecimals(cartTotals.due) }}</span> USD</div>
                    <div class="text-right font-bold">Due Today</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import SelectInput from '../Blocks/Select';
import Billing from '../../models/billing';
import CartTotals from '../../models/cartTotals';

export default {
    components: {
        'select-input': SelectInput,
    },
    props: {
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
        billing: {
            type: Billing
        },
        cartTotals: {
            type: CartTotals
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
            paymentMethods: [{value: 'credit_card', label: 'Credit Card'}, {value: 'paypal', label: 'PayPal'}],
            // countries: ['United States', 'Canada', 'United Kingdom', 'Australia'],
            // regions: ['Alberta', 'British Columbia'],

            stripe: null,
            cardNumberElement: null,
            cardExpiryElement: null,
            cardCvcElement: null,

            errors: {
                methodType: [],
                country: [],
                region: [],
                cardNumber: [],
                cardExpiry: [],
                cardCvc: [],
            },

            rules: {
                methodType: [
                    v => !!v || 'Payment Method Type is required',
                ],
                country: [
                    v => !!v || 'Country is required',
                ],
                region: [
                    v => (this.billing.country && this.billing.country.toLowerCase() != 'canada') || !!v || 'State/Province is required',
                ],
            },
        }
    },
    computed: {
        $_cardNumberElementBorder(): string[] {
            let classes = [];

            if (!this.errors.cardNumber.length) {
                classes.push('border-1');
                classes.push('border-gray');
            } else {
                classes.push('validation-error');
            }

            return classes;
        },

        $_cardExpiryElementBorder(): string[] {
            let classes = [];

            if (!this.errors.cardExpiry.length) {
                classes.push('border-1');
                classes.push('border-gray');
            } else {
                classes.push('validation-error');
            }

            return classes;
        },

        $_cardCvcElementBorder(): string[] {
            let classes = [];

            if (!this.errors.cardCvc.length) {
                classes.push('border-1');
                classes.push('border-gray');
            } else {
                classes.push('validation-error');
            }

            return classes;
        },
    },
    mounted() {
        this.stripe = (window as any).Stripe(this.stripePublishableKey);
        this.initStripeElements();
        this.$root.$on('cancelPaymentForm', this.cancel);
        this.$root.$on('submitPaymentForm', this.submitForm);
    },
    methods: {
        paymentMethodSelected(event) {
            this.$emit('updateBilling', {prop: 'methodType', value: event.value});
        },

        billingCountrySelected(event) {
            this.$emit('updateBilling', {prop: 'country', value: event.value});
        },

        billingRegionSelected(event) {
            this.$emit('updateBilling', {prop: 'region', value: event.value});
        },

        initStripeElements() {
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

        cancel() {
            this.errors = {
                methodType: [],
                billingCountry: [],
                billingRegion: [],
                cardNumber: [],
                cardExpiry: [],
                cardCvc: [],
            };

            this.initStripeElements();
        },

        elementsChangeHandler(payload, controlName) {
            this.errors[controlName] = [];

            if (payload.error) {
                this.errors[controlName].push(payload.error.message);
            }
        },

        validateInput(controlName, value): Boolean {
            const errors = [];

            this.rules[controlName].forEach((rule) => {
                if (rule(value) !== true) {
                    errors.push(rule(value));
                }
            });

            this.errors[controlName] = errors;

            return errors.length == 0;
        },

        validateForm() {
            return new Promise((resolve, reject) => {

                let valid = true;

                Object.keys(this.rules).forEach((key) => {
                    valid = valid && this.validateInput(key, this.billing[key]);
                });

                if (valid) {
                    resolve(true);
                } else {
                    reject(false);
                }
            });
        },

        submitForm() {
            this.validateForm()
                .then(() => {
                    if (this.billing.methodType == 'paypal') {
                        this.$emit('formValidated', {});
                    } else {
                        this.stripe
                            .createToken(this.cardNumberElement, {
                                address_country: this.billing.country,
                            })
                            .then(({ token, error }) => {
                                if (!error) {
                                    this.$emit('formValidated', {token: token.id});
                                }
                            });
                    }
                })
                .catch(() => {
                    this.$emit('formInvalid', {});
                });
        },

        getWithDecimals(value) {
            return Number(value || 0).toFixed(2);
        }
    },
}
</script>
<style type="text/css">
.stripe-element-container {
    height: 46px;
}
</style>