import Vue from 'vue';

import VideosRow from '../../components/Content/VideosRow';

Vue.component('videos-row', VideosRow);

const app = new Vue({
    el: '#vue-app'
});