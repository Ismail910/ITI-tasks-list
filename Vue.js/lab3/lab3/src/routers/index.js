import { createRouter, createWebHistory } from "vue-router";
import homeComponent from "../components/lab3/home.vue";
import cartComponent from "../components/lab3/cart.vue";

const routes = [
  {
    path: "/",
    component: homeComponent,
  },
  {
    path: "/cart",
    component: cartComponent,
  },
];

const router = createRouter({
  routes: routes,
  history: createWebHistory(),
});

export default router;
