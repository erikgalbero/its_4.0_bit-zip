import Vue from 'vue'
import VueRouter from 'vue-router'
import Homepage from '../views/Homepage.vue'
import Registration from '../views/Registration.vue'
import Chatbot from '../views/Chatbot.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/homepage',
    name: 'Homepage',
    component: Homepage,
  },
  {
    path: '/registration',
    name: 'Registration',
    component: Registration  
  },
  {
    path: '/chat',
    name: 'Chatbot',
    component: Chatbot
  },
  {
    path: '*',
    redirect: 'homepage'
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

// Auth based guard
router.beforeEach((to, from, next) => {


  if (!to) {

    router.push('/login');
    next(false);

  } else {
    next();
  }
});

export default router
