import data from './course.json';

export default class Mock {
    static setupMoxios(moxios) {
        moxios.stubRequest('/railcontent/content', {
            status: 200,
            responseText: data
        });
    }
}
