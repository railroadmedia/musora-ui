import Vue from 'vue';
import App from './App.vue';

import './assets/styles/drumeo.css';
import '@musora/icons/dist/icons.css';
import 'cropperjs/dist/cropper.min.css';
import 'dropzone/dist/min/dropzone.min.css';

import router from './router'

Vue.config.productionTip = false;

new Vue({
  router,
  render: h => h(App)
}).$mount('#app');
