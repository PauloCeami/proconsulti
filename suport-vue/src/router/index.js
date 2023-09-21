import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/cadastro',
    name: 'cadastro',
    component: () => import('../views/FormCadastro.vue')
  },
  {
    path: '/login',
    name: 'login',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/FormLoginVue.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
