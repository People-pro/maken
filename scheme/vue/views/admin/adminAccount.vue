<template>
  <div class="adminAccount">
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
        <AdminLogged :brand="'Manage Account'" />
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
              <label for="email address">Image</label>
              <upload-helper
                :open="false"
                :enableinput="false"
                :required="false"
                :multiple="false"
                location="assets/uploaded/"
                :url="$store.state.UPLOAD_BASE_URL"
                :uploadurl="$store.state.UPLOAD_BASE_URL + 'upload/' + token"
                name="other-images"
                :value="newItem.image"
                @onFileSelected="
                  (data) => {
                    newItem.image = data;
                  }
                "
              >
                <span class="uploader-btn">Select image</span>
              </upload-helper>
            </div>
            <div class="form-group">
              <input
                type="submit"
                class="submit"
                value="Update Account"
                @click.prevent="updateItems()"
              />
            </div>
          </form>
          <form>
            <div class="form-group">
              <label for="cpassword">current password:</label>
              <input
                type="text"
                id=""
                placeholder="current password"
                v-model="selectedItem.cpassword"
              />
            </div>
            <div class="form-group">
              <label for="npassword">new password:</label>
              <input
                type="text"
                id=""
                placeholder="new password"
                v-model="selectedItem.npassword"
              />
            </div>
            <div class="form-group">
              <input
                type="submit"
                class="submit"
                value="Update Password"
                @click.prevent="changePassword()"
              />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Model from "./components/Model.vue";
export default {
  name: "adminAccount",
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
      token: null,
      newItem: {
        names: "",
        email: "",
        image: "",
      },
      selectedItem: {},
      items: [],
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
    updateItems() {
      this.isLoading = true;
      this.newItem.token = this.$loggedAdminToken();
      this.$store
        .dispatch("UPDATE_AGENT_ACCOUNT", this.newItem)
        .then((response) => {
          if (response.data.status == "ok") {
            this.$notify({
              group: "status",
              title: "Important message",
              text: response.data.message,
              type: "success",
            });
            this.updateModal = false;

            this.$localStorage.set(
              "maken_admin",
              JSON.stringify(response.data.user)
            );
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
    changePassword() {
      this.isLoading = true;
      this.selectedItem.token = this.$loggedAdminToken();
      this.$store
        .dispatch("UPDATE_AGENT_PASSWORD", this.selectedItem)
        .then((response) => {
          if (response.data.status == "ok") {
            this.$notify({
              group: "status",
              title: "Important message",
              text: response.data.message,
              type: "success",
            });
            this.updateModal = false;
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
    // this.getItems();
    this.newItem.names = this.$loggedAdmin().names;
    this.newItem.image = this.$loggedAdmin().image;
    this.newItem.email = this.$loggedAdmin().email;
    if (this.$loggedAdmin()) {
      this.token = this.$loggedAdminToken();
    } else {
      this.token = null;
    }
  },
};
</script>

<style lang="scss" scoped>
.model-body {
  $maingreen: #015b0a;
  display: flex;
  justify-content: space-around;
  @media only screen and(max-width: 900px) {
    flex-direction: column;
  }
  form {
    width: 30%;
    display: flex;
    flex-direction: column;
    row-gap: 1.5rem;
    margin-top: 2rem;
    @media only screen and(max-width: 1200px) {
      width: 40%;
    }
    @media only screen and(max-width: 1000px) {
      width: 50%;
    }
    @media only screen and(max-width: 900px) {
      width: 90%;
    }
    .form-group {
      line-height: 1.5;
      display: flex;
      flex-direction: column;
      row-gap: 0.25rem;
      input {
        width: calc(100% - 10px);
        padding: 0.75rem;
        &.submit {
          background: $maingreen;
          color: white;
          border: none;
          cursor: pointer;
        }
      }
    }
  }
}
</style>
