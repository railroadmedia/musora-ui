import axios from 'axios';
import moxios from 'moxios';
import mock from '../moxios/mock';

export const BASE_URL = 'http://dev.musora.com';

moxios.install(axios);
mock.setupMoxios(moxios);

export default axios.create({
  baseURL: BASE_URL
});
