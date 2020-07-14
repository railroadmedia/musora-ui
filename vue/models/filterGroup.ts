import Filter from './filter';

export default class FilterGroup {
    constructor(
        public id: string,
        public title: string,
        public filters: Filter[],
        public collapsed = false
    ) {
    }

    copy(): FilterGroup {
        return new FilterGroup(
            this.id,
            this.title,
            this.filters,
            this.collapsed
        );
    }
}
