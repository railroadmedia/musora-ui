import Vue from 'vue';

import VideosRow from '../../components/Content/VideosRow';
import FilteredVideos from '../../components/Content/FilteredVideos';

Vue.component('videos-row', VideosRow);
Vue.component('filtered-videos-content', FilteredVideos);

const app = new Vue({
    el: '#vue-app'
});
