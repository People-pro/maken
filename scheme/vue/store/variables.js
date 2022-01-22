let api_base_url = "";
if (process.env.NODE_ENV === "production") {
  api_base_url = "https://www.vugafrica.rw/api/v1";
} else {
  api_base_url = "http://127.0.0.1:8000/api/v1";
}
export const API_BASE_URL = api_base_url;

let base_url = "";
if (process.env.NODE_ENV === "production") {
  base_url = "https://www.vugafrica.rw/api/v1";
} else {
  base_url = "http://127.0.0.1:8080/api/v1";
}
let upload_base_url = "";
if (process.env.NODE_ENV === "production") {
  upload_base_url = "https://www.vugafrica.rw/";
} else {
  upload_base_url = "http://127.0.0.1:8000/";
}

export const UPLOAD_BASE_URL = upload_base_url;

export const BASE_URL = base_url;

/* ---------------------------------------------------------------
 * API LIST
 ----------------------------------------------------------------*/
// Auth api

// Upload api
export const UPLOAD_GET_ALL_FILES_URL = "upload/all-files";
export const UPLOAD_DELETE_FILE_URL = "upload/delete";
export const UPLOAD_SEARCH_FILE_URL = "upload/search";
export const UPLOAD_SEARCH_FILE_BY_TYPE_URL = "upload/search-by-type";
export const UPLOAD_UPDATE_FILE_URL = "upload/update-file";

// Notification api
export const NOTIFICATION_GET_ALL_URL = "/notification/mine";
export const NOTIFICATION_MAKE_IT_SEEN_URL = "/notification/make/seen";

// Other api
export const SEARCH_BASED_CATEGORY_URL = "/search/based/category";
export const SEARCH_BASED_QUERY_URL = "/search/based/query";
export const SAVE_SEARCH_TEXT_URL = "/search/save/text";
export const GET_SEARCH_TEXT_URL = "/search/get/text";
export const SEARCH_GET_HISTORY_URL = "/search/mine/history";
export const SEARCH_REMOVE_FROM_HISTORY_URL = "/search/remove/history";
export const SEND_CONTACT_MESSAGE_URL = "/send/contact/message";

// users
export const ADMIN_LOGIN_URL = api_base_url + "/admin/adminLogin";
export const GET_USERS_URL = api_base_url + "/admin/getUsers";
export const ADD_USER_URL = api_base_url + "/admin/addUser";
export const UPDATE_USER_URL = api_base_url + "/admin/updateUser";
export const DELETE_USER_URL = api_base_url + "/admin/deleteUser/";
export const UPDATE_AGENT_ACCOUNT_URL = api_base_url + "/admin/updateAgentAccount";
export const UPDATE_AGENT_PASSWORD_URL = api_base_url + "/admin/updateAgentPassword";

// Others
export const DASHBOARDS_URL = api_base_url + "/admin/getDashboards";

// Attractions
export const GET_ATTRACTION_URL = api_base_url + "/admin/attractions/getAttraction";
export const ADD_ATTRACTION_URL = api_base_url + "/admin/attractions/addAttraction";
export const UPDATE_ATTRACTION_URL = api_base_url + "/admin/attractions/updateAttraction";
export const DELETE_ATTRACTION_URL = api_base_url + "/admin/attractions/deleteAttraction/";

// Packages
export const GET_PACKAGE_URL = api_base_url + "/admin/packages/getPackage";
export const ADD_PACKAGE_URL = api_base_url + "/admin/packages/addPackage";
export const UPDATE_PACKAGE_URL = api_base_url + "/admin/packages/updatePackage";
export const DELETE_PACKAGE_URL = api_base_url + "/admin/packages/deletePackage/";

// Trips
export const GET_TRIP_URL = api_base_url + "/admin/trip/getTrip";
export const ADD_TRIP_URL = api_base_url + "/admin/trip/addTrip";
export const UPDATE_TRIP_URL = api_base_url + "/admin/trip/updateTrip";
export const DELETE_TRIP_URL = api_base_url + "/admin/trip/deleteTrip/";

// Gallery
export const GET_GALLERY_URL = api_base_url + "/admin/gallery/getGallery";
export const ADD_GALLERY_URL = api_base_url + "/admin/gallery/addGallery";
export const UPDATE_GALLERY_URL = api_base_url + "/admin/gallery/updateGallery";
export const DELETE_GALLERY_URL = api_base_url + "/admin/gallery/deleteGallery/";
