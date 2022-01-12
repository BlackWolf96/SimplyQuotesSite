import Vue from 'vue'
import App from './App.vue'
import Pagination from 'vue-pagination-2';

Vue.config.productionTip = false
Vue.component('pagination', Pagination);

new Vue({
  render: h => h(App),
}).$mount('#app')