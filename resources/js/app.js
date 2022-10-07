import './bootstrap'
import '../css/app.css'
import app from './app.vue'
import router from './router'

import { createApp } from 'vue'
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m'

createApp(app)
    .use(ZiggyVue)
    .use(router)
    .mount('#app')
