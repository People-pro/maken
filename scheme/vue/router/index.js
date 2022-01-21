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
import ViewTrip from "../views/site/ViewTrip.vue";

// admin
import Dashboard from "../views/admin/Dashboard.vue";
import AdminLogin from "../views/admin/AdminLogin.vue";
import Attractions from "../views/admin/Attractions.vue";
import AdminPackages from "../views/admin/Packages.vue";
// import AdminTrips from "../views/admin/Trips.vue";
// import AdminGallery from "../views/admin/Gallery.vue";
// import Users from "../views/admin/Users.vue";

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
    path: "/viewTrip/:id",
    name: "ViewTrip",
    component: ViewTrip,
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
  
  // admin

  {
    path: "/admin",
    name: "Dashboard",
    component: Dashboard,
  },
  {
    path: "/admin/login",
    name: "AdminLogin",
    component: AdminLogin,
  },
  {
    path: "/admin/attractions",
    name: "Attractions",
    component: Attractions,
  },
  {
    path: "/admin/packages",
    name: "AdminPackages",
    component: AdminPackages,
  },
  // {
  //   path: "/admin/trips",
  //   name: "AdminTrips",
  //   component: AdminTrips,
  // },
  // {
  //   path: "/admin/gallery",
  //   name: "AdminGallery",
  //   component: AdminGallery,
  // },
  // {
  //   path: "/admin/users",
  //   name: "Users",
  //   component: Users,
  // },
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
