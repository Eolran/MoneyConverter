import { createRouter, createWebHistory } from 'vue-router'

import Home from '../views/public/Home.vue'
import Admin from '../views/admin/Admin.vue'
import Create from '../views/admin/Create.vue'
import Update from '../views/admin/Update.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/admin',
      name: 'admin',
      component: Admin
    },
    {
      path: '/admin/form/create',
      name: 'createForm',
      component: Create
    },
    {
      path: '/admin/form/update',
      name: 'updateForm',
      component: Update
    },
  ]
})

export default router
