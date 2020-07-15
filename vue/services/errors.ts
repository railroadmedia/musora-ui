import http from './http';

export default class Errors {
    static report(value, location) {
        http.post('/error-reporting', { params: {value, location} });
    }
}
