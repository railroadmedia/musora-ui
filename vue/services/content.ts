import http from './http';

export default class Content {
	static getContent(payload) {
		return http.get('/railcontent/content', { params: payload });
	}
}
