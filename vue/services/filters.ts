import Filter from '../models/filter';
import FilterGroup from '../models/filterGroup';
import FiltersType from '../maps/filtersType';
import FiltersContentType from '../maps/filtersContentType';
import FiltersProgress from '../maps/filtersProgress';
import FiltersPageContentType from '../maps/filtersPageContentType';

export default class Filters {

    static decorateRequestParams(payload, filters: FilterGroup[]) {

        filters.forEach((group) => {
            group.filters.forEach((item) => {
                if (item.active) {
                    if (group.id == 'content-type') {
                        if (!payload.included_types) {
                            payload.included_types = [];
                        }
                        payload.included_types.push(item.value);
                    } else if (group.id == 'progress') {
                        if (!payload.required_user_states) {
                            payload.required_user_states = [];
                        }
                        payload.required_user_states.push(item.value);
                    } else {
                        if (!payload.required_fields) {
                            payload.required_fields = [];
                        }

                        payload.required_fields.push(group.id + "," + item.value);
                    }
                }
            });
        });

        return payload;
    }

    static getFilterGroupsFromResponse(response): FilterGroup[] {
        let activeFiltersMap = {};
        let activeFilters = response.meta.activeFilters || {};
        let filterOptions = response.meta.filterOptions || {};
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

            if (
                activeFiltersMap[groupId]
                && (activeFiltersMap[groupId][value] || activeFiltersMap[groupId][item])
            ) {
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

    static getEdgeContentTypeFilterGroup(currentFilters: FilterGroup[]): FilterGroup {
        let groupId = 'content-type';
        let title = 'content type';
        let icon = 'icon-info';

        return this.createFilterGroup(groupId, title, icon, FiltersContentType, currentFilters);
    }

    static getProgressFilterGroup(currentFilters: FilterGroup[]): FilterGroup {
        let groupId = 'progress';
        let title = 'progress';
        let icon = 'icon-info';

        return this.createFilterGroup(groupId, title, icon, FiltersProgress, currentFilters);
    }

    static getRudimentsFilterGroup(): FilterGroup {
        let groupId = 'content-type';
        let title = 'content type';
        let icon = 'icon-info';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.rudiments, [], true);
    }

    static getCoursesFilterGroup(): FilterGroup {
        let groupId = 'content-type';
        let title = 'content type';
        let icon = 'icon-info';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.courses, [], true);
    }

    static getPlayAlongsFilterGroup(): FilterGroup {
        let groupId = 'content-type';
        let title = 'content type';
        let icon = 'icon-info';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.playAlongs, [], true);
    }

    static getStudentFocusFilterGroup(): FilterGroup {
        let groupId = 'content-type';
        let title = 'content type';
        let icon = 'icon-info';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.studentFocus, [], true);
    }

    static createFilterGroup(
        groupId: string,
        title: string,
        icon: string,
        filtersMap,
        currentFilters: FilterGroup[],
        setActive = false
    ): FilterGroup {
        let keys = Object.keys(filtersMap);
        let filters = [];
        let activeGroupFilters = {};

        currentFilters.forEach(group => {
            if (group.id == groupId) {
                group.filters.forEach(filter => {
                    if (filter.active) {
                        activeGroupFilters[filter.id] = true;
                    }
                });
            }
        });

        keys.forEach(key => {
            let id = key;
            let active = activeGroupFilters[id] || setActive || false;

            filters.push(
                new Filter(
                    id,
                    groupId,
                    id,
                    filtersMap[key],
                    0,
                    active,
                    icon,
                    id
                )
            );
        });

        return new FilterGroup(
            groupId,
            title,
            filters
        );
    }
}
