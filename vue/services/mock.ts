import EdgeData from '../../mocks/edge.json';
import Edge2Data from '../../mocks/edge2.json';
import Edge3Data from '../../mocks/edge3.json';
import Edge4Data from '../../mocks/edge4.json';
import RudimentData from '../../mocks/rudiments.json';
import Rudiment2Data from '../../mocks/rudiments2.json';
import CoursesData from '../../mocks/courses.json';
import Courses2Data from '../../mocks/courses2.json';
import Courses3Data from '../../mocks/courses3.json';
import Courses4Data from '../../mocks/courses4.json';
import MyListData from '../../mocks/mylist.json';
import PlayAlongData from '../../mocks/play_alongs.json';
import PlayAlong2Data from '../../mocks/play_alongs2.json';
import PlayAlong3Data from '../../mocks/play_alongs3.json';
import PlayAlong4Data from '../../mocks/play_alongs4.json';
import StudentFocusData from '../../mocks/student_focus.json';
import StudentFocus2Data from '../../mocks/student_focus2.json';
import StudentFocus3Data from '../../mocks/student_focus3.json';
import StudentFocus4Data from '../../mocks/student_focus4.json';
import CommentsData from '../../mocks/comments.json';
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
                let data = Mock.getResponseData(params);
                let response = data[Math.floor(Math.random() * data.length)];

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

        mock
            .onPut('/railcontent/comment/reply')
            .reply(function (config) {

                let data = JSON.parse(config.data);
                let replyTo;

                CommentsData.data.forEach(item => {
                    if (item.id == data.data.relationships.parent.data.id) {
                        replyTo = item;
                    }
                });

                let comment = Utils.copy(CommentsData.data[0]);
                let authorId = parseInt(comment.attributes.user) * 1000 + replyTo.relationships.replies.data.length * 10;

                comment.id = parseInt(comment.id) * 1000 + replyTo.relationships.replies.data.length * 10;
                comment.attributes.comment = data.data.attributes.comment;
                comment.attributes.temporary_display_name = data.data.attributes.temporary_display_name;
                comment.attributes.like_count = 0;
                comment.attributes.is_liked = false;
                comment.attributes.user = authorId;
                comment.relationships.user.data.id = authorId;
                delete(comment.relationships['replies']);

                replyTo.relationships.replies.data.push({
                    id: comment.id,
                    type: 'comment'
                });

                CommentsData.included.push(comment);
                CommentsData.included.push(
                    {
                        "type": "user",
                        "id": authorId.toString(),
                        "attributes": {
                            "email": "brandon@toews.com",
                            "avatar": "https://s3.amazonaws.com/pianote/defaults/avatar.png",
                            "display_name": "brandon toews",
                            "xp": 0,
                            "access_level": "team",
                            "level_number": "1.0"
                        }
                    }
                );

                return [200, {}];
            });

        mock
            .onPut('/railcontent/comment')
            .reply(function (config) {

                let data = JSON.parse(config.data);
                let comment = Utils.copy(CommentsData.data[0]);
                let authorId = parseInt(comment.attributes.user) * 1000 + CommentsData.data.length * 10;

                comment.id = parseInt(comment.id) * 1000 + CommentsData.data.length * 10;
                comment.attributes.comment = data.data.attributes.comment;
                comment.attributes.temporary_display_name = data.data.attributes.temporary_display_name;
                comment.attributes.like_count = 0;
                comment.attributes.is_liked = false;
                comment.attributes.user = authorId;
                comment.relationships.user.data.id = authorId;
                delete(comment.relationships['replies']);

                CommentsData.data.push(comment);
                CommentsData.included.push(
                    {
                        "type": "user",
                        "id": authorId.toString(),
                        "attributes": {
                            "email": "brandon@toews.com",
                            "avatar": "https://s3.amazonaws.com/pianote/defaults/avatar.png",
                            "display_name": "brandon toews",
                            "xp": 0,
                            "access_level": "team",
                            "level_number": "1.0"
                        }
                    }
                );

                return [200, {}];
            });

        mock
            .onGet('/railcontent/comment')
            .reply(function (config) {
                let response = CommentsData;
                return [
                    200,
                    response,
                ];
            });

        mock
            .onPut(/\/railcontent\/comment-like\/\d+/)
            .reply(function (config) {
                let urlTokens = config.url.split('/');
                let commentId = urlTokens[urlTokens.length - 1];

                CommentsData.data.forEach(comment => {
                    if (commentId == comment.id) {
                        comment.attributes['like_count'] = (parseInt(comment.attributes['like_count'] || '0') + 1).toString();
                        comment.attributes.is_liked = true;

                    }
                });

                CommentsData.included.forEach(item => {
                    if (commentId == item.id && item.type == 'comment') {
                        item.attributes['like_count'] = (parseInt(item.attributes['like_count'] || '0') + 1).toString();
                        item.attributes['is_liked'] = true;
                    }
                });

                return [200, {}];
            });

        mock
            .onDelete(/\/railcontent\/comment-like\/\d+/)
            .reply(function (config) {
                let urlTokens = config.url.split('/');
                let commentId = urlTokens[urlTokens.length - 1];

                CommentsData.data.forEach(comment => {
                    if (commentId == comment.id) {
                        comment.attributes['like_count'] = (parseInt(comment.attributes['like_count'] || '0') - 1).toString();
                        comment.attributes.is_liked = false;

                    }
                });

                CommentsData.included.forEach(item => {
                    if (commentId == item.id && item.type == 'comment') {
                        console.log("item before: %s", JSON.stringify(item));
                        item.attributes['like_count'] = (parseInt(item.attributes['like_count'] || '0') - 1).toString();
                        item.attributes['is_liked'] = false;
                        console.log("item after: %s", JSON.stringify(item));

                    }
                });

                return [200, {}];
            });

        mock
            .onPut('/railcontent/content-like')
            .reply(function (config) {
                return [200, {}];
            });

        mock
            .onDelete('/railcontent/content-like')
            .reply(function (config) {
                return [200, {}];
            });
    }

    static getResponseData(params) {
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
                return [
                    Utils.copy(RudimentData),
                    Utils.copy(Rudiment2Data)
                ];
            case 'playAlong':
                return [
                    Utils.copy(PlayAlongData),
                    Utils.copy(PlayAlong2Data),
                    Utils.copy(PlayAlong3Data),
                    Utils.copy(PlayAlong4Data)
                ];
            case 'studentFocus':
                return [
                    Utils.copy(StudentFocusData),
                    Utils.copy(StudentFocus2Data),
                    Utils.copy(StudentFocus3Data),
                    Utils.copy(StudentFocus4Data)
                ];
            case 'coursesData':
                return [
                    Utils.copy(CoursesData),
                    Utils.copy(Courses2Data),
                    Utils.copy(Courses3Data),
                    Utils.copy(Courses4Data)
                ];
            case 'edge':
                // falling into default block
            default:
                return [
                    Utils.copy(EdgeData),
                    Utils.copy(Edge2Data),
                    Utils.copy(Edge3Data),
                    Utils.copy(Edge4Data)
                ];
        }
    }
}
