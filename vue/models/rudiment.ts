export default class Rudiment {
    constructor(
        public id: string,
        public url: string,
        public thumbnail: string,
        public title: string,
        public teacher: string,
        public sheet: string,
        public type?: string
    ) {
    }
}
