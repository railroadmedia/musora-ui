import FilterGroup from '../models/filterGroup';

export default {
    props: {
        title: {
            type: String,
        },
        filterGroup: {
            type: FilterGroup,
        }
    },

    computed: {
        $_activeFilter() {
            let active;
            this.filterGroup.filters.forEach((filter) => {
                if (filter.active) {
                    active = filter;
                }
            });
            return active;
        },

        $_buttonAllClasses() {
            return this.$_activeFilter ?
                ['border-edge-blue'] :
                ['border-white', 'bg-white'];
        },
    },

    methods: {
        toggleCollapse(): void {
            this.collapsed = !this.collapsed;
        },

        clearFilterGroup() {
            if (this.$_activeFilter) {
                this.$emit('clearFilterGroup', this.filterGroup);
            }
        },
    }
}
