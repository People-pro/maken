import {
  GET_PACKAGE,
  ADD_PACKAGE,
  UPDATE_PACKAGE,
  DELETE_PACKAGE,
} from "../actions/package";

import {
  GET_PACKAGE_URL,
  ADD_PACKAGE_URL,
  UPDATE_PACKAGE_URL,
  DELETE_PACKAGE_URL,
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
};

export default {
  mutations,
  actions,
  getters,
  state,
};
