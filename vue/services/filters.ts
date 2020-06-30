import Filter from '../models/filter';
import FilterGroup from '../models/filterGroup';
import FiltersType from '../maps/filtersType';

export default class Filters {

    static getFilterGroupsFromResponse(response): FilterGroup[] {
        let result = [];
        const filterOptions = response.data.meta.filterOptions;
        const keys = Object.keys(filterOptions);

        keys.forEach((key) => {
            if (FiltersType[key]) {
                let filterGroup = null;

                if (FiltersType[key].type == 'string') {
                    filterGroup = Filters.getFilterGroupFromArray(
                                            key,
                                            filterOptions[key]
                                        );
                } if (FiltersType[key].type == 'entity') {
                    filterGroup = Filters.getFilterGroupFromEntity(
                                            key,
                                            filterOptions[key]
                                        );
                }

                result.push(filterGroup);
            }
        });

        return result;
    }

    static getFilterGroupFromArray(
        groupId: string,
        data: string[]
    ): FilterGroup {
        let filters = [];
        let icon = FiltersType[groupId].icon;

        data.forEach((item) => {
            let id = item.toLowerCase().replace(/ |\//g, '-');
            let value = encodeURI(item);

            filters.push(
                new Filter(
                    id,
                    groupId,
                    id,
                    item,
                    0,
                    false, // todo - fix active
                    icon,
                    value
                )
            );
        });
        
        return new FilterGroup(
            groupId,
            FiltersType[groupId].label,
            filters
        );
    }

    static getFilterGroupFromEntity(
        groupId: string,
        data: string[]
    ): FilterGroup {
        let filters = [];

        data.forEach((item) => {
            filters.push(
                FiltersType[groupId].constructor(item)
            );
        });

        return new FilterGroup(
            groupId,
            FiltersType[groupId].label,
            filters
        );
    }

    // todo - review and remove below
    static getFiltersFromArray(
        list: {
            name: string,
            id?: string,
            label?: string,
            tabIndex?: number,
            active?: boolean,
            icon?: string
        }[],
        groupId: string
    ): Filter[] {
        let result = [];

        list.forEach((value) => {
            try {
                let id = value.id || 'checkbox-input-' + value.name;

                result.push(
                    new Filter(
                        id,
                        groupId,
                        value.name,
                        value.label || value.name,
                        value.tabIndex || 1,
                        value.active || false,
                        value.icon
                    )
                );
            } catch (e) {
                // todo - add exception handling
            }
        });

        return result;
    }

    static getFilterGroupsFromArray(list): FilterGroup[] {
        let result = [];

        list.forEach((group) => {
            let id = group.title.replace(' ', '-')
            let filters = this.getFiltersFromArray(group.items, id);

            result.push(
                new FilterGroup(
                    id,
                    group.title,
                    filters,
                    group.collapsed || false
                )
            );
        });

        return result;
    }
}
