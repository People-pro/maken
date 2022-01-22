<template>
  <div class="Gallery">
    <div class="admin-content">
      <loading
        :active.sync="isLoading"
        :can-cancel="true"
        :on-cancel="onCancel"
        :color="color"
        :is-full-page="fullPage"
      ></loading>
      <adminSidebar />
      <div class="admin-body">
        <AdminLogged :brand="'Gallery'" />
        <div class="table">
          <div class="table-title">
            <label for="Gallery For Ren">Gallery</label>
            <button class="add-new" @click="addModal = true">
              <i class="fa fa-plus"></i> Add
            </button>
          </div>
          <table class="pads">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in items" :key="item.id">
                <td>{{ item.num }}</td>
                <td>{{ item.title }}</td>
                <td>{{ item.date }}</td>
                <td>
                  <button class="edit" @click="startUpdate(item)">
                    Edit
                  </button>
                  <button class="delete" @click="startDelete(item)">
                    Delete
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <Model v-if="addModal == true">
          <div class="model-header">
            <h4>Add Gallery</h4>
            <button class="close" @click="addModal = false">X</button>
          </div>
          <div class="model-body">
            <form>
              <div class="form-group">
                <label for="Title">Title:</label>
                <input
                  type="text"
                  placeholder="Title"
                  v-model="newItem.title"
                />
              </div>
              <div class="form-group">
                <label for="Date">Date:</label>
                <input
                  type="date"
                  id=""
                  placeholder="Date"
                  v-model="newItem.date"
                />
              </div>
              <div class="form-group">
                <label for="Trip Image">Image</label>
                <br />
                <upload-helper
                  :open="false"
                  :enableinput="false"
                  :required="false"
                  :multiple="false"
                  location="assets/uploaded/"
                  :url="$store.state.UPLOAD_BASE_URL"
                  :uploadurl="$store.state.UPLOAD_BASE_URL + 'upload/' + token"
                  name="other-images"
                  value=""
                  @onFileSelected="
                    (data) => {
                      newItem.image = data;
                    }
                  "
                >
                  <span class="uploader-btn">Choose image</span>
                </upload-helper>
              </div>
              <div class="form-group">
                <label for="Images">Images</label>
                <br />
                <upload-helper
                  :open="false"
                  :enableinput="false"
                  :required="false"
                  :multiple="true"
                  location="assets/uploaded/"
                  :url="$store.state.UPLOAD_BASE_URL"
                  :uploadurl="$store.state.UPLOAD_BASE_URL + 'upload/' + token"
                  name="other-images"
                  value=""
                  @onFileSelected="
                    (data) => {
                      newItem.images = data;
                    }
                  "
                >
                  <span class="uploader-btn">Select images</span>
                </upload-helper>
              </div>
            </form>
          </div>
          <div class="model-footer">
            <button class="submit" @click.prevent="addItems()">
              Submit
            </button>
            <button class="close" @click="addModal = false">Close</button>
          </div>
        </Model>
        <Model v-if="updateModal == true">
          <div class="model-header">
            <h4>Edit Gallery</h4>
            <button class="close" @click="updateModal = false">X</button>
          </div>
          <div class="model-body">
            <form>
              <div class="form-group">
                <label for="Title">Title:</label>
                <input
                  type="text"
                  placeholder="Title"
                  v-model="selectedItem.title"
                />
              </div>
              <div class="form-group">
                <label for="Date">Date:</label>
                <input
                  type="date"
                  id=""
                  placeholder="Date"
                  v-model="selectedItem.date"
                />
              </div>
              <div class="form-group">
                <label for="Trip Image">Image</label>
                <br />
                <upload-helper
                  :open="false"
                  :enableinput="false"
                  :required="false"
                  :multiple="false"
                  location="assets/uploaded/"
                  :url="$store.state.UPLOAD_BASE_URL"
                  :uploadurl="$store.state.UPLOAD_BASE_URL + 'upload/' + token"
                  name="other-images"
                  :value="selectedItem.image"
                  @onFileSelected="
                    (data) => {
                      selectedItem.image = data;
                    }
                  "
                >
                  <span class="uploader-btn">Choose image</span>
                </upload-helper>
              </div>
              <div class="form-group">
                <label for="Images">Images</label>
                <br />
                <upload-helper
                  :open="false"
                  :enableinput="false"
                  :required="false"
                  :multiple="true"
                  location="assets/uploaded/"
                  :url="$store.state.UPLOAD_BASE_URL"
                  :uploadurl="$store.state.UPLOAD_BASE_URL + 'upload/' + token"
                  name="other-images"
                  :value="selectedItem.images"
                  @onFileSelected="
                    (data) => {
                      selectedItem.images = data;
                    }
                  "
                >
                  <span class="uploader-btn">Select images</span>
                </upload-helper>
              </div>
            </form>
          </div>
          <div class="model-footer">
            <button class="submit" @click.prevent="updateItems()">
              Update
            </button>
            <button class="close" @click="updateModal = false">Close</button>
          </div>
        </Model>
        <Model v-if="deleteModal == true">
          <div class="model-header">
            <h4>Delete Gallery</h4>
            <button class="close" @click="deleteModal = false">X</button>
          </div>
          <div class="model-body">
            <h4 class="delete-label">
              Are you sure you want to delete
              <strong>{{ selectedItem.title }}</strong
              >?
            </h4>
          </div>
          <div class="model-footer">
            <button class="submit" @click.prevent="deleteItems()">
              Yes
            </button>
            <button class="close" @click="deleteModal = false">Cancel</button>
          </div>
        </Model>
      </div>
    </div>
  </div>
</template>

<script>
import Model from "./components/Model.vue";
export default {
  name: "Gallery",
  components: {
    Model,
  },
  data() {
    return {
      isLoading: false,
      fullPage: true,
      color: "#015b0a",
      addModal: false,
      updateModal: false,
      deleteModal: false,
      newItem: {},
      selectedItem: {},
      items: [],
      token: null,
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
    getItems() {
      this.isLoading = true;
      this.$store.dispatch("GET_GALLERY", {token: this.$loggedAdminToken()}).then((response) => {
        this.items = response.data;
        this.isLoading = false;
      });
    },
    addItems() {
      this.isLoading = true;
      this.$store
        .dispatch("ADD_GALLERY", this.newItem)
        .then((response) => {
          if (response.data.status == "ok") {
            this.$notify({
              group: "status",
              title: "Important message",
              text: response.data.message,
              type: "success",
            });
            this.addModal = false;
            this.newItem.title = "";
            this.newItem.date = "";
            this.newItem.image = "";
            this.newItem.images = "";
            this.getItems();
          } else {
            this.$notify({
              group: "status",
              title: "Important message",
              text: response.data.message,
              type: "error",
            });
          }
        })
        .catch((error) => {
          console.error({
            error,
          });
        });
      this.isLoading = false;
    },
    startUpdate(item) {
      this.selectedItem = item;
      this.updateModal = true;
    },
    updateItems() {
      this.isLoading = true;
      this.$store
        .dispatch("UPDATE_GALLERY", this.selectedItem)
        .then((response) => {
          if (response.data.status == "ok") {
            this.$notify({
              group: "status",
              title: "Important message",
              text: response.data.message,
              type: "success",
            });
            this.updateModal = false;
            this.selectedItem = "";
            this.getItems();
          } else {
            this.$notify({
              group: "status",
              title: "Important message",
              text: response.data.message,
              type: "error",
            });
          }
        })
        .catch((error) => {
          console.error({
            error,
          });
        });
      this.isLoading = false;
    },
    startDelete(item) {
      this.selectedItem = item;
      this.deleteModal = true;
    },
    deleteItems() {
      this.isLoading = true;
      this.$store
        .dispatch("DELETE_GALLERY", this.selectedItem.id)
        .then((response) => {
          if (response.data.status == "ok") {
            this.$notify({
              group: "status",
              title: "Important message",
              text: response.data.message,
              type: "success",
            });
            this.deleteModal = false;
            this.selectedItem = "";
            this.getItems();
          } else {
            this.$notify({
              group: "status",
              title: "Important message",
              text: response.data.message,
              type: "error",
            });
          }
        })
        .catch((error) => {
          console.error({
            error,
          });
        });
      this.isLoading = false;
    },
  },
  mounted() {
    this.getItems();
    if (this.$loggedAdmin()) {
      this.token = this.$loggedAdminToken();
    } else if (this.$loggedClient()) {
      this.token = this.$loggedClientToken();
    } else {
      this.token = null;
    }
  },
};
</script>

<style lang="scss" scoped></style>
