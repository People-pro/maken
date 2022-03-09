import {
  GET_GALLERY,
  GET_SINGLE_GALLERY,
  ADD_GALLERY,
  UPDATE_GALLERY,
  DELETE_GALLERY,
} from "../actions/gallery";

import {
  GET_GALLERY_URL,
  GET_SINGLE_GALLERY_URL,
  ADD_GALLERY_URL,
  UPDATE_GALLERY_URL,
  DELETE_GALLERY_URL,
} from "../variables";

import axios from "axios";

const state = {};
const mutations = {};
const getters = {};
const actions = {
  [GET_GALLERY]: (state) => {
    return axios({
      url: GET_GALLERY_URL,
      method: "GET",
    });
  },
  [GET_SINGLE_GALLERY]: (state, payload) => {
    return axios({
      url: GET_SINGLE_GALLERY_URL + payload,
      method: "GET",
    });
  },
  [ADD_GALLERY]: (state, payload) => {
    return axios({
      url: ADD_GALLERY_URL,
      method: "POST",
      data: payload,
    });
  },
  [UPDATE_GALLERY]: (state, payload) => {
    return axios({
      url: UPDATE_GALLERY_URL,
      method: "POST",
      data: payload,
    });
  },
  [DELETE_GALLERY]: (state, payload) => {
    return axios({
      url: DELETE_GALLERY_URL + payload,
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
