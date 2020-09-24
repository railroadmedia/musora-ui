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

                        let key = group.id == 'instructors' ? 'instructor' : group.id;

                        payload.required_fields.push(key + "," + item.value);
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
                activeFiltersMap[key][value] = true;
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

    static getEdgeContentTypeFilterGroup(currentFilters: FilterGroup[]): FilterGroup {
        let groupId = 'content-type';
        let title = 'content type';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersContentType, currentFilters);
    }

    static getProgressFilterGroup(currentFilters: FilterGroup[]): FilterGroup {
        let groupId = 'progress';
        let title = 'progress';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersProgress, currentFilters);
    }

    static getRudimentsFilterGroup(): FilterGroup {
        let groupId = 'content-type';
        let title = 'content type';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.rudiments, [], true);
    }

    static getCoursesFilterGroup(): FilterGroup {
        let groupId = 'content-type';
        let title = 'content type';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.courses, [], true);
    }

    static getSongsFilterGroup(): FilterGroup {
        let groupId = 'content-type';
        let title = 'content type';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.songs, [], true);
    }

    static getPlayAlongsFilterGroup(): FilterGroup {
        let groupId = 'content-type';
        let title = 'content type';
        let icon = 'fa-times-circle';

        return this.createFilterGroup(groupId, title, icon, FiltersPageContentType.playAlongs, [], true);
    }

    static getStudentFocusFilterGroup(): FilterGroup {
        let groupId = 'content-type';
        let title = 'content type';
        let icon = 'fa-times-circle';

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
