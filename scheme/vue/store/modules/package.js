import {
  GET_PACKAGE,
  ADD_PACKAGE,
  UPDATE_PACKAGE,
  DELETE_PACKAGE,

  GET_PACKAGE_ORDERS,
  CONFIRM_PACKAGE_ORDERS,

  // site
  GET_POPULAR_PACKAGES,
  GET_SITE_PACKAGES,
  GET_SINGLE_PACKAGES,
} from "../actions/package";

import {
  GET_PACKAGE_URL,
  ADD_PACKAGE_URL,
  UPDATE_PACKAGE_URL,
  DELETE_PACKAGE_URL,

  GET_PACKAGE_ORDERS_URL,
  CONFIRM_PACKAGE_ORDERS_URL,
  GET_SINGLE_PACKAGES_URL,

  // site
  GET_POPULAR_PACKAGES_URL,
  GET_SITE_PACKAGES_URL,
} from "../variables";

import axios from "axios";

const state = {};
const mutations = {};
const getters = {};
const actions = {
  [GET_PACKAGE]: (state) => {
    return axios({
      url: GET_PACKAGE_URL,
      method: "GET",
    });
  },
  [ADD_PACKAGE]: (state, payload) => {
    return axios({
      url: ADD_PACKAGE_URL,
      method: "POST",
      data: payload,
    });
  },
  [UPDATE_PACKAGE]: (state, payload) => {
    return axios({
      url: UPDATE_PACKAGE_URL,
      method: "POST",
      data: payload,
    });
  },
  [DELETE_PACKAGE]: (state, payload) => {
    return axios({
      url: DELETE_PACKAGE_URL + payload,
      method: "GET",
    });
  },

  // orders
  [GET_PACKAGE_ORDERS]: (state, payload) => {
    return axios({
      url: GET_PACKAGE_ORDERS_URL,
      method: "POST",
      data: payload,
    });
  },
  [CONFIRM_PACKAGE_ORDERS]: (state, payload) => {
    return axios({
      url: CONFIRM_PACKAGE_ORDERS_URL,
      method: "POST",
      data: payload,
    });
  },

    // site
    
  [GET_POPULAR_PACKAGES]: (state) => {
    return axios({
      url: GET_POPULAR_PACKAGES_URL,
      method: "GET",
    });
  },
  [GET_SITE_PACKAGES]: (state) => {
    return axios({
      url: GET_SITE_PACKAGES_URL,
      method: "GET",
    });
  },
  [GET_SINGLE_PACKAGES]: (state, payload) => {
    return axios({
      url: GET_SINGLE_PACKAGES_URL + payload,
      method: "GET",
    });
  },
};

export default {
  mutations,
  actions,
  getters,
  state,
};
