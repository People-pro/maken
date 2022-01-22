import {
  GET_USERS,
  ADD_USER,
  UPDATE_USER,
  DELETE_USER,
  UPDATE_AGENT_ACCOUNT,
  UPDATE_AGENT_PASSWORD,
  ADMIN_LOGIN,
  DASHBOARDS,
} from "../actions/users";

import {
  GET_USERS_URL,
  ADD_USER_URL,
  UPDATE_USER_URL,
  DELETE_USER_URL,
  UPDATE_AGENT_ACCOUNT_URL,
  UPDATE_AGENT_PASSWORD_URL,
  ADMIN_LOGIN_URL,
  DASHBOARDS_URL,
} from "../variables";

import axios from "axios";

const state = {};
const mutations = {};
const getters = {};
const actions = {
  [GET_USERS]: (state) => {
    return axios({
      url: GET_USERS_URL,
      method: "GET",
    });
  },
  [ADD_USER]: (state, payload) => {
    return axios({
      url: ADD_USER_URL,
      method: "POST",
      data: payload,
    });
  },
  [UPDATE_USER]: (state, payload) => {
    return axios({
      url: UPDATE_USER_URL,
      method: "POST",
      data: payload,
    });
  },
  [DELETE_USER]: (state, payload) => {
    return axios({
      url: DELETE_USER_URL + payload,
      method: "GET",
    });
  },
  [UPDATE_AGENT_ACCOUNT]: (state, payload) => {
    return axios({
      url: UPDATE_AGENT_ACCOUNT_URL,
      method: "POST",
      data: payload,
    });
  },
  [UPDATE_AGENT_PASSWORD]: (state, payload) => {
    return axios({
      url: UPDATE_AGENT_PASSWORD_URL,
      method: "POST",
      data: payload,
    });
  },
  [ADMIN_LOGIN]: (state, payload) => {
    return axios({
      url: ADMIN_LOGIN_URL,
      method: "POST",
      data: payload,
    });
  },
  [DASHBOARDS]: (state, payload) => {
    return axios({
      url: DASHBOARDS_URL,
      method: "POST",
      data: payload,
    });
  },
};

export default {
  mutations,
  actions,
  getters,
  state,
};
