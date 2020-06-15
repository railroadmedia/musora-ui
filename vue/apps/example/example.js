import Vue from 'vue';
import LargeContentListItem from '../../components/ListItems/LargeContentListItem.vue'
import 'es6-promise/auto'
import Vuex from 'vuex'

Vue.config.productionTip = false

// components
Array(LargeContentListItem)
    .forEach((component) => {
        Vue.component(
            component.name,
            component,
        );
    });

// vuex state
Vue.use(Vuex)

const store = new Vuex.Store({
    state: {},
    mutations: {}
})

document.querySelectorAll('.vue-large-horizontal-content-list').forEach(function (element) {
    const store = new Vuex.Store({
        state: {
            linkUrl: 'test',
        },
        mutations: {
            setLink(state, link) {
                state.linkUrl = link;
            }
        }
    });

    const vue = new Vue({
        el: '#' + element.id,
        render: h => h(LargeContentListItem),
        store: store
    });


    window.setInterval(function() {
        store.commit('setLink', 'test' + Math.random());
    }, 2000);
});