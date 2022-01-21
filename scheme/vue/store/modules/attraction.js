import {
  GET_ATTRACTION,
  ADD_ATTRACTION,
  UPDATE_ATTRACTION,
  DELETE_ATTRACTION,
} from "../actions/attraction";

import {
  GET_ATTRACTION_URL,
  ADD_ATTRACTION_URL,
  UPDATE_ATTRACTION_URL,
  DELETE_ATTRACTION_URL,
} from "../variables";

import axios from "axios";

const state = {};
const mutations = {};
const getters = {};
const actions = {
  [GET_ATTRACTION]: (state) => {
    return axios({
      url: GET_ATTRACTION_URL,
      method: "GET",
    });
  },
  [ADD_ATTRACTION]: (state, payload) => {
    return axios({
      url: ADD_ATTRACTION_URL,
      method: "POST",
      data: payload,
    });
  },
  [UPDATE_ATTRACTION]: (state, payload) => {
    return axios({
      url: UPDATE_ATTRACTION_URL,
      method: "POST",
      data: payload,
    });
  },
  [DELETE_ATTRACTION]: (state, payload) => {
    return axios({
      url: DELETE_ATTRACTION_URL + payload,
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
