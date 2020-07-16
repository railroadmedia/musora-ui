import EdgeData from '../../mocks/full_response.json';
import RudimentData from '../../mocks/rudiments.json';
import CoursesData from '../../mocks/courses.json';
import MyListData from '../../mocks/mylist.json';
import PlayAlongData from '../../mocks/play_alongs.json';
import StudentFocusData from '../../mocks/student_focus.json';
import Utils from './utils';

export default class Mock {
    static setupMock(mock) {
        mock
            .onGet('/railcontent/content')
            .reply(function (config) {
                let params = config.params || {};
                let page = params.page || 1;
                let filters = params.required_fields || [];
                let activeFiltersMap = {};
                let activeFilters = {};
                let response = Mock.getResponse(params);

                let pageSize = response.data.length;

                // reindex the results and bigger difference between ids to avoid dupplicates
                response.data = response.data.map(item => {
                    item.id = parseInt(item.id) * 1000 + page * pageSize;
                    return item;
                });

                response.meta.pagination.current_page = page;

                // create active filter array to be returned and map to be used to remove some filters
                filters.forEach(filterString => {
                    let filterData = filterString.split(',');
                    let filterName = filterData[0];
                    let filterValue = decodeURIComponent(filterData[1]);

                    if (!activeFiltersMap[filterName]) {
                        activeFiltersMap[filterName] = {};
                    }
                    if (!activeFilters[filterName]) {
                        activeFilters[filterName] = [];
                    }

                    activeFilters[filterName].push(filterValue);
                    activeFiltersMap[filterName][filterValue] = true;
                });

                // setting active filters on response
                response.meta.activeFilters = activeFilters;

                // create copy of filterOptions
                let filterOptions = response.meta.filterOptions || {};

                let keys = Object.keys(filterOptions);
                let updatedKeys = {};

                keys.forEach(key => {
                    if (!updatedKeys[key]) {
                        let filerGroup = [...filterOptions[key]];

                        let removed = false;

                        // remove only filters that are not active
                        while (!removed) {
                            let index = Math.floor(Math.random()*filerGroup.length);
                            let value = filerGroup[index];

                            if (!activeFiltersMap[key] || !activeFiltersMap[key][value]) {
                                filerGroup.splice(index, 1);
                                updatedKeys[key] = true;
                                removed = true;
                            }
                        }

                        if (filerGroup.length) {
                            filterOptions[key] = filerGroup;
                        } else {
                            delete filterOptions[key];
                        }
                    }
                });

                response.meta.filterOptions = filterOptions;

                return [
                    200,
                    response,
                ];
            });

        mock
            .onGet('/railcontent/my-list')
            .reply(function (config) {
                let params = config.params || {};
                let page = params.page || 1;
                let filters = params.required_fields || [];
                let contentTypes = params.included_types || [];
                let activeFiltersMap = {};
                let activeFilters = {};
                let response = Utils.copy(MyListData);

                let pageSize = response.data.length;

                // reindex the results and bigger difference between ids to avoid dupplicates
                response.data = response.data.map(item => {
                    item.id = parseInt(item.id) * 1000 + page * pageSize;
                    return item;
                });

                response.meta.pagination.current_page = page;

                // create active filter array to be returned and map to be used to remove some filters
                filters.forEach(filterString => {
                    let filterData = filterString.split(',');
                    let filterName = filterData[0];
                    let filterValue = decodeURIComponent(filterData[1]);

                    if (!activeFiltersMap[filterName]) {
                        activeFiltersMap[filterName] = {};
                    }
                    if (!activeFilters[filterName]) {
                        activeFilters[filterName] = [];
                    }

                    activeFilters[filterName].push(filterValue);
                    activeFiltersMap[filterName][filterValue] = true;
                });

                contentTypes.forEach(filter => {
                    if (!activeFiltersMap['content-type']) {
                        activeFiltersMap['content-type'] = {};
                    }
                    if (!activeFilters['content-type']) {
                        activeFilters['content-type'] = [];
                    }
                    activeFilters['content-type'].push(filter);
                    activeFiltersMap['content-type'][filter] = true;
                });

                // setting active filters on response
                response.meta.activeFilters = activeFilters;

                // create copy of filterOptions
                let filterOptions = response.meta.filterOptions || {};

                let keys = Object.keys(filterOptions);
                let updatedKeys = {};

                keys.forEach(key => {
                    if (!updatedKeys[key]) {
                        let filerGroup = [...filterOptions[key]];

                        let removed = false;

                        // remove only filters that are not active
                        while (!removed) {
                            let index = Math.floor(Math.random()*filerGroup.length);
                            let value = filerGroup[index];

                            if (!activeFiltersMap[key] || !activeFiltersMap[key][value]) {
                                filerGroup.splice(index, 1);
                                updatedKeys[key] = true;
                                removed = true;
                            }
                        }

                        if (filerGroup.length) {
                            filterOptions[key] = filerGroup;
                        } else {
                            delete filterOptions[key];
                        }
                    }
                });

                response.meta.filterOptions = filterOptions;

                return [
                    200,
                    response,
                ];
            });

        mock
            .onPost('/error-reporting')
            .reply(function (config) {
                return [200, {}];
            });
    }

    static getResponse(params) {
        let page = 'edge';
        let includedTypes = params.included_types || [];

        if (includedTypes.length == 1 && includedTypes[0] == 'rudiment') {
            page = 'rudiment';
        }

        if (includedTypes.length == 1 && includedTypes[0] == 'play-along') {
            page = 'playAlong';
        }

        if (includedTypes.length == 1 && includedTypes[0] == 'student-focus') {
            page = 'studentFocus';
        }

        if (includedTypes.length == 1 && includedTypes[0] == 'course') {
            page = 'coursesData';
        }

        switch(page) {
            case 'rudiment':
                return Utils.copy(RudimentData);
            case 'playAlong':
                return Utils.copy(PlayAlongData);
            case 'studentFocus':
                return Utils.copy(StudentFocusData);
            case 'coursesData':
                return Utils.copy(CoursesData);
            case 'edge':
                // falling into default block
            default:
                return Utils.copy(EdgeData);
        }
    }
}
