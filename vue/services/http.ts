import axios from 'axios';
import MockAdapter from 'axios-mock-adapter';

import MockSetup from '../mocking/mock';

export const BASE_URL = 'http://dev.musora.com';

const instance = axios.create({
  baseURL: BASE_URL
});
const mock = new MockAdapter(instance);

MockSetup.setupMock(mock);

export default instance;
