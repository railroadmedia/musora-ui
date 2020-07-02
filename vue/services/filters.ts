import Filter from '../models/filter';
import FilterGroup from '../models/filterGroup';
import FiltersType from '../maps/filtersType';
import FiltersContentType from '../maps/filtersContentType';

export default class Filters {

    static decorateRequestParams(payload, filters: FilterGroup[]) {

        filters.forEach((group) => {
            group.filters.forEach((item) => {
                if (item.active) {
                    if (!payload.required_fields) {
                        payload.required_fields = [];
                    }

                    payload.required_fields.push(group.id + "," + item.value);
                }
            });
        });

        return payload;
    }

    static getFilterGroupsFromResponse(response): FilterGroup[] {
        let activeFiltersMap = {};
        let activeFilters = response.meta.activeFilters || {};
        let filterOptions = response.meta.filterOptions;
        let result = [];
        const keys = Object.keys(filterOptions);

        Object.keys(activeFilters).forEach((key) => {
            activeFilters[key].forEach(value => {
                if (!activeFiltersMap[key]) {
                    activeFiltersMap[key] = {};
                }
                activeFiltersMap[key][value] = true;
            });
        });

        keys.forEach((key) => {
            if (FiltersType[key]) {
                let filterGroup = null;

                if (FiltersType[key].type == 'string') {
                    filterGroup = Filters.getFilterGroupFromArray(
                                            key,
                                            filterOptions[key],
                                            activeFiltersMap
                                        );
                } if (FiltersType[key].type == 'entity') {
                    filterGroup = Filters.getFilterGroupFromEntity(
                                            key,
                                            filterOptions[key],
                                            activeFiltersMap
                                        );
                }

                result.push(filterGroup);
            }
        });

        return result;
    }

    static getFilterGroupFromArray(
        groupId: string,
        data: string[],
        activeFiltersMap
    ): FilterGroup {
        let filters = [];
        let icon = FiltersType[groupId].icon;

        data.forEach((item) => {
            let id = item.toLowerCase().replace(/ |\//g, '-');
            let value = encodeURI(item);
            let active = false;

            if (activeFiltersMap[groupId] && activeFiltersMap[groupId][value]) {
                active = true;
            }

            filters.push(
                new Filter(
                    id,
                    groupId,
                    id,
                    item,
                    0,
                    active,
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
        data: string[],
        activeFiltersMap
    ): FilterGroup {
        let filters = [];

        data.forEach((item) => {
            let filter = FiltersType[groupId].constructor(item);

            if (activeFiltersMap[groupId] && activeFiltersMap[groupId][filter.value]) {
                filter.active = true;
            }

            filters.push(filter);
        });

        return new FilterGroup(
            groupId,
            FiltersType[groupId].label,
            filters
        );
    }

    static getEdgeContentTypeFilterGroup(): FilterGroup {
        let groupId = 'content-type';
        let icon = 'icon-info';
        let keys = Object.keys(FiltersContentType);
        let filters = [];

        keys.forEach(key => {
            let id = key;

            filters.push(
                new Filter(
                    id,
                    groupId,
                    id,
                    FiltersContentType[key],
                    0,
                    false, // todo - fix active
                    icon,
                    id
                )
            );
        });

        return new FilterGroup(
            groupId,
            icon,
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
