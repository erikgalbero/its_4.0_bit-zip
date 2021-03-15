import Vue from 'vue'
import VueRouter from 'vue-router'
import Homepage from '../views/Homepage.vue'
import Registration from '../views/Registration.vue'


Vue.use(VueRouter)

const routes = [
  {
    path: '/homepage',
    name: 'Homepage',
    component: Homepage,
    meta: {
      label: "Home",
    },
  },
  {
    path: '/homepage',
    name: 'Homepage',
    component: Registration,
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

  if (to.matched.some(record => record.meta.requiresAuth)) {

    // if route requires auth
    if (localStorage.getItem('user')) {
      
      // if user is logged in
      console.log('auth: OK, vai pure')
      next()

    } else {
      // if user is not logged in
      console.log('auth: NO, rilogga')

      router.push('/login');
      next(false);
    }
  } else {
    next();
  }
});

export default router
