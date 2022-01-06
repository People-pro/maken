import Vue from "vue";
import VueRouter from "vue-router";
import NotFound from "../views/NotFound.vue";
import Home from "../views/site/Home.vue";
import Services from "../views/site/Services.vue";
import Packages from "../views/site/Packages.vue";
import Gallery from "../views/site/Gallery.vue";
import Trips from "../views/site/Trips.vue";
import About from "../views/site/About.vue";
import Contact from "../views/site/Contact.vue";
import ViewPackage from "../views/site/ViewPackage.vue";

Vue.use(VueRouter);
const routes = [
  {
    path: "*",
    component: NotFound,
    name: "notfound",
  },
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/services",
    name: "Services",
    component: Services,
  },
  {
    path: "/packages",
    name: "Packages",
    component: Packages,
  },
  {
    path: "/viewPackage/:id",
    name: "ViewPackage",
    component: ViewPackage,
  },
  {
    path: "/gallery",
    name: "Gallery",
    component: Gallery,
  },
  {
    path: "/trips",
    name: "Trips",
    component: Trips,
  },
  {
    path: "/aboutus",
    name: "About",
    component: About,
  },
  {
    path: "/contact",
    name: "Contact",
    component: Contact,
  },
];

const router = new VueRouter({
  mode: "history",
  base: process.env.BASE_URL,
  routes,
  duplicateNavigationPolicy: "ignore",
  linkActiveClass: "active",
  scrollBehavior: () => ({
    x: 0,
    y: 0,
  }),
});

export default router;
