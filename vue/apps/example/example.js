import Vue from 'vue';
import App from './Example.vue'
import LargeContentListItem from '../../components/ListItems/LargeContentListItem.vue'

Vue.config.productionTip = false

Array(LargeContentListItem)
    .forEach((component) => {
        Vue.component(
            component.name,
            component,
        );
    });

new Vue({
    el: '#example-app',
    render: h => h(App),
});
