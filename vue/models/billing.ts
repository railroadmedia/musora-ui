export default class Billing {
    constructor(
        public methodType: string,
        public brand: string,
        public currency: string = 'USD',
        public country?: string,
        public region?: string,
        public token?: string,
        public zip?: string,
        public email?: string,
    ) {
    }
}
