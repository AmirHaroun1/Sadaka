/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('campaign-card', require('./components/CampaignCard.vue').default);
Vue.component('campaign-section', require('./components/CampaignSection.vue').default);
Vue.component('new-campaign-section', require('./components/CreateCampaign/CreateNewCampaign.vue').default);
Vue.component('carousel',require('vue-owl-carousel'));

const app = new Vue({
    el: '#app',
});
const app2 = new Vue({
    el: '#app2',
});
