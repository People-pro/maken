<template>
  <div class="Users">
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
        <AdminLogged :brand="'Users'" />
        <div class="table">
          <div class="table-title">
            <label for="Users">Users</label>
            <button class="add-new" @click="addModal = true">
              <i class="fa fa-plus"></i> Add
            </button>
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Names</th>
                <th>Email</th>
                <!-- <th>Type</th> -->
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in items" :key="item.id">
                <td>
                  <img
                    :src="'/assets/uploaded/' + item.image"
                    :alt="item.names"
                    class="thumbnail"
                  />
                </td>
                <td>{{ item.names }}</td>
                <td>{{ item.email }}</td>
                <!-- <td>{{ item.type }}</td> -->
                <td>
                  <button class="edit" @click="startUpdate(item)">Edit</button>
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
            <h4>Add User</h4>
            <button class="close" @click="addModal = false">X</button>
          </div>
          <div class="model-body">
            <form>
              <div class="form-group">
                <label for="Names">Names:</label>
                <input
                  type="text"
                  Names="Names"
                  id=""
                  placeholder="Names"
                  v-model="newItem.names"
                />
              </div>
              <div class="form-group">
                <label for="Email">Email:</label>
                <input
                  type="email"
                  Email="Email"
                  id=""
                  placeholder="Email"
                  v-model="newItem.email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input
                  type="password"
                  password="password"
                  id=""
                  placeholder="password"
                  v-model="newItem.password"
                />
              </div>
              <div class="form-group">
                <label for="email address">Image</label>
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
                  <span class="uploader-btn">Select image</span>
                </upload-helper>
              </div>
            </form>
          </div>
          <div class="model-footer">
            <button class="submit" @click.prevent="addItems()">Submit</button>
            <button class="close" @click="addModal = false">Close</button>
          </div>
        </Model>
        <Model v-if="updateModal == true">
          <div class="model-header">
            <h4>Edit User</h4>
            <button class="close" @click="updateModal = false">X</button>
          </div>
          <div class="model-body">
            <form>
              <div class="form-group">
                <label for="Names">Names:</label>
                <input
                  type="text"
                  Names="Names"
                  id=""
                  placeholder="Names"
                  v-model="selectedItem.names"
                />
              </div>
              <div class="form-group">
                <label for="Email">Email:</label>
                <input
                  type="email"
                  Email="Email"
                  id=""
                  placeholder="Email"
                  v-model="selectedItem.email"
                />
              </div>
              <div class="form-group">
                <label for="email address">Image</label>
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
                  <span class="uploader-btn">Select image</span>
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
            <h4>Delete User</h4>
            <button class="close" @click="deleteModal = false">X</button>
          </div>
          <div class="model-body">
            <h4 class="delete-label">
              Are you sure you want to delete
              <strong>{{ selectedItem.names }}</strong
              >?
            </h4>
          </div>
          <div class="model-footer">
            <button class="submit" @click.prevent="deleteItems()">Yes</button>
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
  name: "Users",
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
      this.$store
        .dispatch("GET_USERS", { token: this.$loggedAdminToken() })
        .then((response) => {
          this.items = response.data;
          this.isLoading = false;
        });
    },
    addItems() {
      this.isLoading = true;
      this.$store
        .dispatch("ADD_USER", this.newItem)
        .then((response) => {
          if (response.data.status == "ok") {
            this.$notify({
              group: "status",
              title: "Important message",
              text: response.data.message,
              type: "success",
            });
            this.addModal = false;
            this.newItem.names = "";
            this.newItem.email = "";
            this.newItem.image = "";
            this.newItem.password = "";
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
        .dispatch("UPDATE_USER", this.selectedItem)
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
        .dispatch("DELETE_USER", this.selectedItem.id)
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
