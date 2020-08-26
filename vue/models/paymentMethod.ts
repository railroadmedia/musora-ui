export default class PaymentMethod {
    constructor(
        public paymentMethodId: number,
        public userPaymentMethodId: number,
        public methodId: number,
        public methodType: string,
        public isDefault: boolean,
        public info: string,
        public expiry: string
    ) {
    }
}
