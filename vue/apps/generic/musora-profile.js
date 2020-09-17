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

import AccountProfileAvatar from '../../components/Content/AccountProfileAvatar';
import ModalDefault from '../../components/Modals/Default';
import SettingsProfileImage from '../../components/Content/SettingsProfileImage';
import PaymentMethods from '../../components/Payments/Methods';

Vue.component('account-profile-avatar', AccountProfileAvatar);
Vue.component('modal-default', ModalDefault);
Vue.component('settings-profile-image', SettingsProfileImage);
Vue.component('payment-methods', PaymentMethods);

const app = new Vue({
    el: '#vue-musora-profile'
});
