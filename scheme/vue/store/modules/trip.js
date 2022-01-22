import {
  GET_TRIP,
  ADD_TRIP,
  UPDATE_TRIP,
  DELETE_TRIP,
} from "../actions/trip";

import {
  GET_TRIP_URL,
  ADD_TRIP_URL,
  UPDATE_TRIP_URL,
  DELETE_TRIP_URL,
} from "../variables";

import axios from "axios";

const state = {};
const mutations = {};
const getters = {};
const actions = {
  [GET_TRIP]: (state) => {
    return axios({
      url: GET_TRIP_URL,
      method: "GET",
    });
  },
  [ADD_TRIP]: (state, payload) => {
    return axios({
      url: ADD_TRIP_URL,
      method: "POST",
      data: payload,
    });
  },
  [UPDATE_TRIP]: (state, payload) => {
    return axios({
      url: UPDATE_TRIP_URL,
      method: "POST",
      data: payload,
    });
  },
  [DELETE_TRIP]: (state, payload) => {
    return axios({
      url: DELETE_TRIP_URL + payload,
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
