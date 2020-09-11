import Vue from 'vue';

import Toasted from 'vue-toasted';

const toastsOptions = {
    position: 'top-left',
    duration: 5000,
    className: 'white-toast',
    containerClass: 'custom-toast',
    iconPack: 'custom-class',
    icon: 'fal fa-smile-beam fa-3x mr-4',
    action: {
        onClick: (e, toastObject) => {toastObject.goAway(0);},
        icon: 'fas fa-times fa-2x',
    }
};

Vue.use(Toasted, toastsOptions);

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
import ContentSearch from '../../components/Content/Search';
import SettingsProfileImage from '../../components/Content/SettingsProfileImage';
import PaymentMethods from '../../components/Payments/Methods';
import ShowsContent from '../../components/Content/Shows';
import RelatedVideos from '../../components/Content/RelatedVideos';
import VideoResources from '../../components/Video/Resources';
import VideoPlayer from 'vuesora/src/components/VideoPlayer';

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
Vue.component('content-search', ContentSearch);
Vue.component('settings-profile-image', SettingsProfileImage);
Vue.component('payment-methods', PaymentMethods);
Vue.component('shows-content', ShowsContent);
Vue.component('related-videos', RelatedVideos);
Vue.component('video-resources', VideoResources);

Vue.use(VideoPlayer);

const app = new Vue({
    el: '#vue-app'
});
