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
                    <i class="fas fa-check" v-if="paymentMethod.default"></i>
                </div>
                <div class="flex-1">{{ paymentMethod.info }}</div>
                <div class="expiry-col text-center">{{ paymentMethod.expiry }}</div>
                <div class="actions-col flex items-center justify-center">
                    <a href="#" @click.stop.prevent="remove(paymentMethod)"><div class="flex items-center justify-center text-red-400"><i class="fas fa-trash"></i></div></a>
                    <a href="#" @click.stop.prevent="setDefault(paymentMethod)"><div class="flex items-center justify-center text-green-400"><i class="fas fa-check"></i></div></a>
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
    </div>
</template>

<script lang="ts">
import Button from '../Blocks/Button';

export default {
    components: {
        'button-input': Button,
    },
    props: {
        paymentMethods: {
            type: Array,
            default: () => [],
        },
    },
    methods: {
        remove(paymentMethod) {
            console.log("PaymentMethods::remove paymentMethod: %s", JSON.stringify(paymentMethod));
        },
        setDefault(paymentMethod) {
            console.log("PaymentMethods::setDefault paymentMethod: %s", JSON.stringify(paymentMethod));
        },
        showAddNew() {
            console.log("PaymentMethods::showAddNew");
        },
    },
}
</script>
