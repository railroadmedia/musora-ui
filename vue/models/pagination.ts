export default class Pagination {
    constructor(
        public limit: number,
        public page: number,
        public sort: string,
        public total?: number,
        public pages?: number
    ) {
    }
}
