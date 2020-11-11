

require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('joblist-component', require('./components/Job.vue').default);
Vue.component('create-component', require('./components/Create.vue').default);
Vue.component('edit-component', require('./components/Edit.vue').default);

const app = new Vue({
    el: '#app',
});
