import Filter from '../models/filter';
import FilterGroup from '../models/filterGroup';
import FiltersType from '../maps/filtersType';
import FiltersContentType from '../maps/filtersContentType';
import FiltersProgress from '../maps/filtersProgress';
import FiltersPageContentType from '../maps/filtersPageContentType';
import FiltersTopics from '../maps/filtersTopics';

export default class Filters {

    static decorateRequestParams(payload, filters: FilterGroup[]) {

        filters.forEach((group) => {
            group.filters.forEach((item) => {
                if (item.active) {
                    if (group.id == 'content_type') {
                        if (!payload.included_types) {
                            payload.included_types = [];
                        }
                        payload.included_types.push(item.value);
                    } else if (group.id == 'user_states') {
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

    static getFilterGroupsFromResponse(response, topicsFiltersKey): FilterGroup[] {
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

                let filterValue = (typeof value == 'object') ? value.id : value;

                activeFiltersMap[key][filterValue] = true;
            });
        });

        if (topicsFiltersKey && FiltersTopics[topicsFiltersKey]) {
            result.push(
                Filters.getGlobalTopicFilters(
                    topicsFiltersKey,
                    topicsFiltersKey,
                    activeFiltersMap
                )
            );
        }

        keys.forEach((key) => {
            if (key != topicsFiltersKey && FiltersType[key]) {
                let filterGroup = null;

                if (FiltersType[key].type == 'string') {
                    filterGroup = Filters.getFilterGroupFromArray(
                        key,
                        filterOptions[key],
                        activeFiltersMap
                    );
                } else if (FiltersType[key].type == 'entity') {
                    filterGroup = Filters.getFilterGroupFromEntity(
                        key,
                        filterOptions[key],
                        activeFiltersMap
                    );
                }

                if (key == 'instructors') {
                    filterGroup.filters.sort(function(a, b) {
                        return a.name > b.name ? 1 : -1;
                    });
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
            let id = groupId + item.toLowerCase().replace(/ |\//g, '-');
            let value = encodeURI(item);
            let active = false;
            let label = groupId == 'difficulty' ? 'Level ' + item : item;

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
                    label,
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

    static getEdgeContentTypeFilterGroup(response): FilterGroup {
        let groupId = 'content_type';
        let title = 'content type';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersContentType, response);
    }

    static getProgressFilterGroup(response): FilterGroup {
        let groupId = 'user_states';
        let title = 'progress';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersProgress, response);
    }

    static getRudimentsFilterGroup(): FilterGroup {
        let groupId = 'content_type';
        let title = 'content type';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.rudiments, {meta:{}}, true);
    }

    static getCoursesFilterGroup(): FilterGroup {
        let groupId = 'content_type';
        let title = 'content type';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.courses, {meta:{}}, true);
    }

    static getSongsFilterGroup(): FilterGroup {
        let groupId = 'content_type';
        let title = 'content type';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.songs, {meta:{}}, true);
    }

    static getPlayAlongsFilterGroup(): FilterGroup {
        let groupId = 'content_type';
        let title = 'content type';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.playAlongs, {meta:{}}, true);
    }

    static getStudentFocusFilterGroup(): FilterGroup {
        let groupId = 'content_type';
        let title = 'content type';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.studentFocus, {meta:{}}, true);
    }

    static createFilterGroup(
        groupId: string,
        title: string,
        icon: string,
        filtersMap,
        response,
        setActive = false
    ): FilterGroup {
        let keys = Object.keys(filtersMap);
        let filters = [];

        let activeFiltersMap = {};
        let activeFilters = response.meta.activeFilters || {};

         Object.keys(activeFilters).forEach((key) => {
            activeFilters[key].forEach(value => {
                if (!activeFiltersMap[key]) {
                    activeFiltersMap[key] = {};
                }

                let filterValue = (typeof value == 'object') ? value.id : value;

                activeFiltersMap[key][filterValue] = true;
            });
        });

        keys.forEach(key => {
            let id = key;
            let active = (activeFiltersMap[groupId] && activeFiltersMap[groupId][id]) || setActive || false;

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

        // for content_type filters, if all active, dont show any as checked
        if (groupId == 'content_type' && filters.length > 1) {
            let allActive = true;

            filters.forEach((filter) => {
                allActive = allActive && filter.active;
            });

            if (allActive) {
                filters.forEach((filter) => {
                    filter.active = false;
                });
            }
        }

        return new FilterGroup(
            groupId,
            title,
            filters
        );
    }

    static getGlobalTopicFilters(
        groupId: string,
        topicsKey: string,
        activeFiltersMap
    ): FilterGroup {

        let filterNames = FiltersTopics[topicsKey];
        let filters = [];

        filterNames.forEach((filterName) => {
            let id = filterName.toLowerCase().replace(/ |\/&/g, '-');
            let value = encodeURI(filterName);
            let active = false;

            if (
                activeFiltersMap[groupId]
                && (activeFiltersMap[groupId][value] || activeFiltersMap[groupId][filterName])
            ) {
                active = true;
            }

            filters.push(
                new Filter(
                    id,
                    groupId,
                    id,
                    filterName,
                    0,
                    active,
                    '',
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
}
