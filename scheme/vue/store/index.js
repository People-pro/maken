import Vue from "vue";
import Vuex from "vuex";
import { BASE_URL, UPLOAD_BASE_URL } from "./variables";
import Upload from "./modules/upload.js";
import User from "./modules/users.js";
import Attractions from "./modules/attraction.js";
import Package from "./modules/package.js";

Vue.use(Vuex);
export default new Vuex.Store({
  state: () => ({
    sidebar: true,
    eventBus: new Vue(),
    access_token: null,
    writter_access_token: localStorage.getItem('writter_access_token'),
    BASE_URL: BASE_URL,
    UPLOAD_BASE_URL: UPLOAD_BASE_URL,
    main_loader: false,
    sidebarShow: "responsive",
    sidebarMinimize: false,
  }),
  mutations: {
    ["SET_TOKEN"]: (state, payload) => {
      state.access_token = payload;
    },
    ["START_LOADER"]: (state) => {
      state.main_loader = true;
    },
    ["STOP_LOADER"]: (state) => {
      state.main_loader = false;
    },
    toggleSidebarDesktop(state) {
      const sidebarOpened = [true, "responsive"].includes(state.sidebarShow);
      state.sidebarShow = sidebarOpened ? false : "responsive";
    },
    toggleSidebarMobile(state) {
      const sidebarClosed = [false, "responsive"].includes(state.sidebarShow);
      state.sidebarShow = sidebarClosed ? true : "responsive";
    },
    set(state, [variable, value]) {
      state[variable] = value;
    },
  },
  getters: {
    getUserAccessToken(state) {
      return state.access_token;
    },
  },
  actions: {},
  modules: {
    Upload,
    User,
    Attractions,
    Package,
  },
});
