import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

import Login from '../components/login/Login'
import SignUp from '../components/login/SignUp'
import Forum from '../components/forum/Forum'
import Read from '../components/forum/Read'

const routes = [
    { path: '/login', component: Login },
    { path: '/signup', component: SignUp },
    { path: '/forum', component: Forum , name:'forum'},
    { path: '/question/:slug', component: Read, name:'read'},
];

const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang: false,
    mode: 'history'

});

export default router;