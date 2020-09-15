/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


Vue.component('campaign-card', require('./components/campaign/CampaignCard.vue').default);
Vue.component('campaign-section', require('./components/campaign/CampaignSection.vue').default);
Vue.component('new-campaign-section', require('./components/campaign/CreateNewCampaign.vue').default);
Vue.component('campaign-profile', require('./components/campaign/CampaignProfile.vue').default);

Vue.component('edit-profile', require('./components/user/EditProfile.vue').default);
Vue.component('carousel',require('vue-owl-carousel'));

Vue.component('route',require('./ziggy'));
Vue.component('Ziggy',require('./ziggy'));

Vue.mixin({
    methods: {
        route: (name, params, absolute) => route(name, params, absolute, Ziggy),
    },
});
const app = new Vue({
    el: '#app',
});
const app2 = new Vue({
    el: '#app2',
});
