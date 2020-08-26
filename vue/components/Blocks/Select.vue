<template>
    <div class="relative">
        <select
            class="w-full floating-label focus:outline-none rounded-full p-3 pl-5 pt-4 pb-1 focus-within:shadow-outline border-transparent hover:cursor-pointer"
            :class="$_classes"
            v-model.lazy="$_value"
            :id="id"
            :aria-label="label"
            :aria-invalid="validationErrors.length > 0"
            :autocomplete="autoComplete"
            :autocorrect="autoCorrect"
            :spellcheck="spellCheck"
        >
            <option
                v-for="option in options"
                :value="optionValue(option)"
            >{{ optionLabel(option) }}</option>
        </select>
        <label :for="id" class="absolute text-medium-gray hover:cursor-text">{{ label }}</label>
        <p
            class="text-validation-red text-xs italic font-bold mt-2 ml-2"
            v-for="error in validationErrors"
        >{{ error }}</p>
    </div>
</template>

<script lang="ts">
export default {
    props: {
        id: {
            type: String,
        },
        label: {
            type: String,
        },
        selectedValue: [String, undefined],
        options: {
            type: Array,
            default: () => [],
        },
        validationErrors: {
            type: Array,
            default: () => [],
        },
        theme: {
            type: String,
            default: 'gray'
        },
        forceFocus: {
            type: Boolean,
            default: false
        },
        autoComplete: {
            type: Boolean,
            default: false
        },
        autoCorrect: {
            type: Boolean,
            default: false
        },
        spellCheck: {
            type: Boolean,
            default: false
        },
    },
    data() {
        return {
            valueSelected: this.selectedValue !== undefined && this.selectedValue !== '',
        };
    },
    computed: {
        $_value: {
            get() {
                return this.selectedValue;
            },
            set(value) {
                this.valueSelected = true;
                this.$emit('change', {value: value});
            },
        },

        $_classes(): string[] {
            let classes = ['theme-' + this.theme];

            if (this.theme == 'gray') {
                classes.push('bg-light-gray');
            } else {
                classes.push('bg-transparent');
                if (!this.validationErrors.length) {
                    classes.push('border-1');
                    classes.push('border-gray');
                }
            }

            if (this.forceFocus) {
                classes.push('border-1');
                classes.push('border-gray');
            } else {
                classes.push('focus:shadow-outline');
            }

            if (this.validationErrors.length) {
                classes.push('validation-error');
            }

            if (this.selectedValue || this.valueSelected) {
                classes.push('has-input');
            } else {
                classes.push('empty-input');
            }

            return classes;
        },
    },
    methods: {
        optionValue(option): string {
            if (typeof option === 'string') {
                return option;
            } else if (typeof option === 'object' && option.hasOwnProperty('value')) {
                return option['value'];
            }
            return '';
        },

        optionLabel(option): string {
            if (typeof option === 'string') {
                return option;
            } else if (typeof option === 'object' && option.hasOwnProperty('label')) {
                return option['label'];
            }
            return '';
        },
    },
}
</script>

<style type="text/css">
select {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgLTI1NiAxNzkyIDE3OTIiPjxwYXRoIGQ9Ik0xNDI2LjQ0IDQwNy44NjRxMCAyNi0xOSA0NWwtNDQ4IDQ0OHEtMTkgMTktNDUgMTl0LTQ1LTE5bC00NDgtNDQ4cS0xOS0xOS0xOS00NXQxOS00NXExOS0xOSA0NS0xOWg4OTZxMjYgMCA0NSAxOXQxOSA0NXoiIGZpbGw9ImN1cnJlbnRDb2xvciIvPjwvc3ZnPg==) no-repeat calc(100% - 10px) 50%;
    background-size: 15px;
}
/* For IE10 */
select::-ms-expand {
    display: none;
}
</style>