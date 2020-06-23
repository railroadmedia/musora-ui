import Vue from 'vue';

import VideosRow from '../../components/Content/VideosRow';
import FilteredVideos from '../../components/Content/FilteredVideos';
import RudimentsContent from '../../components/Content/Rudiments';

Vue.component('videos-row', VideosRow);
Vue.component('filtered-videos-content', FilteredVideos);
Vue.component('rudiments-content', RudimentsContent);

const app = new Vue({
    el: '#vue-app'
});
