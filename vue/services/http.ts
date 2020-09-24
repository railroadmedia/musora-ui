import axios from 'axios';
import MockAdapter from 'axios-mock-adapter';

// import MockSetup from './mock';

export const BASE_URL = '//dev.drumeo.com/laravel/public/';

const instance = axios.create({
  baseURL: BASE_URL
});
// const mock = new MockAdapter(instance);

// MockSetup.setupMock(mock);

export default instance;
