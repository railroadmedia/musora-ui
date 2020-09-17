import Billing from '../models/billing';
import CartTotals from '../models/cartTotals';
import Errors from './errors';
import http from './http';
import { DateTime } from 'luxon';
import PaymentMethod from '../models/paymentMethod';

export default class Ecommerce {

    static updateBillingAddress(billing: Billing) {
        return http
                .put(
                    '/ecommerce/session/address',
                    {
                        'billing_country': billing.country,
                        'billing_region': billing.region,
                        'billing_zip_or_postal_code': billing.zip,
                        'billing_email': billing.email,
                    }
                )
                .then(response => response)
                .catch(error => {
                    Errors.report(error, 'Ecommerce::updateBillingAddress');
                    return error;
                });
    }

    static getCartTotalsFromResponse(response): CartTotals {
        return Ecommerce.getCartTotals(response['meta'].cart);
    }

    static getCartTotals(cartData): CartTotals {
        let shipping = cartData.totals.shipping;
        let tax = cartData.totals.tax;
        let due = cartData.totals.due;

        return new CartTotals(shipping, tax, due);
    }

    static createPaymentMethod(billing: Billing) {
        return http
                .put(
                    '/update-payment-method',
                    {
                        'card_token': billing.token,
                        'gateway': billing.brand,
                        'method_type': billing.methodType,
                        'currency': billing.currency,
                        'billing_country': billing.country,
                        'billing_region': billing.region,
                    }
                )
                .then(response => response)
                .catch(error => {
                    Errors.report(error, 'Ecommerce::updatePaymentMethod');
                    return error;
                });
    }

    static deletePaymentMethod(paymentMethod: PaymentMethod) {
        return http
                .delete(`/ecommerce/payment-method/${paymentMethod.paymentMethodId}`)
                .then(response => response)
                .catch(error => {
                    Errors.report(error, 'Ecommerce::deletePaymentMethod');
                    return error;
                });
    }

    static setDefaultPaymentMethod(paymentMethod: PaymentMethod) {
        return http
                .patch(
                    '/ecommerce/payment-method/set-default',
                    {id: paymentMethod.paymentMethodId}
                )
                .then(response => response)
                .catch(error => {
                    Errors.report(error, 'Ecommerce::setDefaultPaymentMethod');
                    return error;
                });
    }

    static getPaymentMethods(userId) {
        return http
                .get(`/ecommerce/user-payment-method/${userId}`)
                .then(response => response.data)
                .catch(error => {
                    Errors.report(error, 'Ecommerce::getPaymentMethods');
                    return error;
                });
    }

    static getPaymentMethodsFromResponse(response): PaymentMethod[] {
        let methods = [];
        let relatedTypesToCollect = {creditCard: true, paypalBillingAgreement: true, userPaymentMethod: true};
        let relatedMap = {};

        response.included.forEach(item => {
            let type = item.type;
            let id = item.id;
            if (relatedTypesToCollect[type]) {
                if (!relatedMap[type]) {
                    relatedMap[type] = {};
                }
                relatedMap[type][id] = item;
            }
        });

        response.data.forEach(item => {
            let paymentMethodId = item.id;
            let userPaymentMethodId = item.relationships.userPaymentMethod.data.id;
            let methodId = item.relationships.method.data.id;
            let methodType = item.relationships.method.data.type;
            let isDefault = relatedMap['userPaymentMethod'][userPaymentMethodId].attributes.is_primary;
            let info;
            let expiry;

            if (methodType == 'creditCard') {
                let method = relatedMap['creditCard'][methodId].attributes;
                let cardCompany = method.company_name || 'N/A';
                let cardLastFourDigits = method.last_four_digits || 'N/A';

                info = cardCompany + ' - ' + cardLastFourDigits;
                expiry = (method.expiration_date) ? DateTime.fromSQL(method.expiration_date).toFormat('MM/yy') : 'N/A';

            } else {
                info = 'PayPal';
                expiry = 'N/A';
            }

            let paymentMethod = new PaymentMethod(
                paymentMethodId,
                userPaymentMethodId,
                methodId,
                methodType,
                isDefault,
                info,
                expiry
            );

            methods.push(paymentMethod);
        });

        return methods;
    }
}
