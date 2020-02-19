import { InertiaApp } from '@inertiajs/inertia-vue'
import Vue from 'vue'

Vue.use(InertiaApp)

const app = document.getElementById('app');
Vue.prototype.$route = (...args) => route(...args).url();

new Vue({
  render: h => h(InertiaApp, {
    props: {
      initialPage: JSON.parse(app.dataset.page),
      resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
    },
  }),
}).$mount(app)