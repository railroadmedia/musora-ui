// import data from './course.json';
import data from './full_response.json';

export default class Mock {
    static setupMock(mock) {
        mock
            .onGet('/railcontent/content')
            .reply(function (config) {
                let params = config.params || {};
                let filters = params.required_fields || [];
                let activeFiltersMap = {};
                let activeFilters = {};
                let response = JSON.parse(JSON.stringify(data));

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
                let filterOptions = response.meta.filterOptions;

                let keys = Object.keys(filterOptions);
                let updatedKeys = {};
                let totalActive;

                keys.forEach(key => {
                    if (!updatedKeys[key]) {
                        let filerGroup = [...filterOptions[key]];

                        filerGroup.splice(Math.floor(Math.random()*filerGroup.length), 1);
                        updatedKeys[key] = true;

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
    }
}
