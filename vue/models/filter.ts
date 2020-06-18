export default class Filter {
    constructor(
        public id: string,
        public name: string,
        public label: string,
        public tabIndex: number,
        public active: boolean,
        public icon?: string
    ) {
    }
}
