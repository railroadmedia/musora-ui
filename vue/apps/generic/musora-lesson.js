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

import RelatedVideos from '../../components/Content/RelatedVideos';
import RelatedSongs from '../../components/Content/RelatedSongs';
import CommentsList from '../../components/Comments/List';
import VideoResources from '../../components/Video/Resources';
import VideoPlayer from 'vuesora/src/components/VideoPlayer';
import MediaElement from 'vuesora/src/components/MediaElement';
import YoutubePlayer from 'vuesora/src/components/YoutubePlayer';
import SongContent from '../../components/Content/Song';

Vue.component('related-videos', RelatedVideos);
Vue.component('related-songs', RelatedSongs);
Vue.component('video-resources', VideoResources);
Vue.component('comments-list', CommentsList);
Vue.component('song-content', SongContent);

Vue.use(VideoPlayer);
Vue.use(MediaElement);
Vue.use(YoutubePlayer);

const app = new Vue({
    el: '#vue-musora-lesson'
});
