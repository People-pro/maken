import {
  GET_PARTNER,
  ADD_PARTNER,
  UPDATE_PARTNER,
  DELETE_PARTNER,
} from "../actions/partners";

import {
  GET_PARTNER_URL,
  ADD_PARTNER_URL,
  UPDATE_PARTNER_URL,
  DELETE_PARTNER_URL,
} from "../variables";

import axios from "axios";

const state = {};
const mutations = {};
const getters = {};
const actions = {
  [GET_PARTNER]: (state) => {
    return axios({
      url: GET_PARTNER_URL,
      method: "GET",
    });
  },
  [ADD_PARTNER]: (state, payload) => {
    return axios({
      url: ADD_PARTNER_URL,
      method: "POST",
      data: payload,
    });
  },
  [UPDATE_PARTNER]: (state, payload) => {
    return axios({
      url: UPDATE_PARTNER_URL,
      method: "POST",
      data: payload,
    });
  },
  [DELETE_PARTNER]: (state, payload) => {
    return axios({
      url: DELETE_PARTNER_URL + payload,
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
