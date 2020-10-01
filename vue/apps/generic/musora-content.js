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
import ModalDefault from '../../components/Modals/Default';
import AccountSkillLevel from '../../components/Content/AccountSkillLevel';
import ContentSearch from '../../components/Content/Search';
import ShowsContent from '../../components/Content/Shows';
import ScheduleCatalogue from '../../components/Content/Schedule';


Vue.component('content-row', ContentRow);
Vue.component('content-catalogue', ContentCatalogue);
Vue.component('rudiments-content', RudimentsContent);
Vue.component('my-list-content', MyListContent);
Vue.component('modal-default', ModalDefault);
Vue.component('account-skill-level', AccountSkillLevel);
Vue.component('content-search', ContentSearch);
Vue.component('shows-content', ShowsContent);
Vue.component('schedule-catalogue', ScheduleCatalogue);

const app = new Vue({
    el: '#vue-musora-ui'
});
