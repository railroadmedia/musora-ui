import Vue from 'vue';

import VideosRow from '../../components/Content/VideosRow';
import FilteredVideos from '../../components/Content/FilteredVideos';
import RudimentsContent from '../../components/Content/Rudiments';
import MyListContent from '../../components/Content/MyList';
import SongContent from '../../components/Content/Song';
import CommentsList from '../../components/Comments/List';
import AccountProfileAvatar from '../../components/Content/AccountProfileAvatar';

Vue.component('videos-row', VideosRow);
Vue.component('filtered-videos-content', FilteredVideos);
Vue.component('rudiments-content', RudimentsContent);
Vue.component('my-list-content', MyListContent);
Vue.component('comments-list', CommentsList);
Vue.component('song-content', SongContent);
Vue.component('account-profile-avatar', AccountProfileAvatar);

const app = new Vue({
    el: '#vue-app'
});
