export default class Filter {
    constructor(
        public id: string,
        public groupId: string,
        public name: string,
        public label: string,
        public tabIndex: number,
        public active: boolean,
        public icon?: string,
        public value?: string
    ) {
    }
}
