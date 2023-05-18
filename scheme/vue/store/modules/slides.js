import {
  GET_SLIDE,
  ADD_SLIDE,
  UPDATE_SLIDE,
  DELETE_SLIDE,
} from "../actions/slides";

import {
  GET_SLIDE_URL,
  ADD_SLIDE_URL,
  UPDATE_SLIDE_URL,
  DELETE_SLIDE_URL,
} from "../variables";

import axios from "axios";

const state = {};
const mutations = {};
const getters = {};
const actions = {
  [GET_SLIDE]: (state) => {
    return axios({
      url: GET_SLIDE_URL,
      method: "GET",
    });
  },
  [ADD_SLIDE]: (state, payload) => {
    return axios({
      url: ADD_SLIDE_URL,
      method: "POST",
      data: payload,
    });
  },
  [UPDATE_SLIDE]: (state, payload) => {
    return axios({
      url: UPDATE_SLIDE_URL,
      method: "POST",
      data: payload,
    });
  },
  [DELETE_SLIDE]: (state, payload) => {
    return axios({
      url: DELETE_SLIDE_URL + payload,
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
