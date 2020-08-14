import Vue from 'vue';

import ContentRow from '../../components/Content/Row';
import ContentCatalogue from '../../components/Content/Catalogue';
import RudimentsContent from '../../components/Content/Rudiments';
import MyListContent from '../../components/Content/MyList';
import SongContent from '../../components/Content/Song';
import RelatedSongs from '../../components/Content/RelatedSongs';
import CommentsList from '../../components/Comments/List';
import AccountProfileAvatar from '../../components/Content/AccountProfileAvatar';
import ModalDefault from '../../components/Modals/Default';
import AccountSkillLevel from '../../components/Content/AccountSkillLevel';

Vue.component('content-row', ContentRow);
Vue.component('content-catalogue', ContentCatalogue);
Vue.component('rudiments-content', RudimentsContent);
Vue.component('my-list-content', MyListContent);
Vue.component('comments-list', CommentsList);
Vue.component('song-content', SongContent);
Vue.component('account-profile-avatar', AccountProfileAvatar);
Vue.component('related-songs', RelatedSongs);
Vue.component('modal-default', ModalDefault);
Vue.component('account-skill-level', AccountSkillLevel);

const app = new Vue({
    el: '#vue-app'
});
