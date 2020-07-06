import Vue from 'vue';

import ContentRow from '../../components/Content/Row';
import ContentCatalogue from '../../components/Content/Catalogue';
import RudimentsContent from '../../components/Content/Rudiments';
import MyListContent from '../../components/Content/MyList';
import SongContent from '../../components/Content/Song';
import CommentsList from '../../components/Comments/List';
import AccountProfileAvatar from '../../components/Content/AccountProfileAvatar';

Vue.component('content-row', ContentRow);
Vue.component('content-catalogue', ContentCatalogue);
Vue.component('rudiments-content', RudimentsContent);
Vue.component('my-list-content', MyListContent);
Vue.component('comments-list', CommentsList);
Vue.component('song-content', SongContent);
Vue.component('account-profile-avatar', AccountProfileAvatar);

const app = new Vue({
    el: '#vue-app'
});
