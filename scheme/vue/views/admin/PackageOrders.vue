<template>
  <div class="PackageOrders">
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
        <AdminLogged :brand="'Package Orders'" />
        <div class="table">
          <div class="table-title">
            <label for="Package Orders">Package Orders</label>
          </div>
          <table class="pads">
            <thead>
              <tr>
                <th>#</th>
                <th>Date</th>
                <th>Attraction</th>
                <th>Names</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Nationality</th>
                <th>People</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in orders" :key="item.id">
                <td>{{ item.num }}</td>
                <td>{{ item.date }}</td>
                <td>{{ item.attraction.name }}</td>
                <td>{{ item.fullname }}</td>
                <td>{{ item.phone }}</td>
                <td>{{ item.email }}</td>
                <td>{{ item.nationality }}</td>
                <td>{{ item.people }}</td>
                <td :class="item.status == 'confirmed' ? 'green' : ''">{{ item.status }}</td>
                <td>
                  <button class="videos" @click="confirmItem(item)">
                    confirm
                  </button>
                  <button class="delete" @click="startDelete(item)">
                    Cancel
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <Model v-if="addModal == true">
          <div class="model-header">
            <h4>Add Package</h4>
            <button class="close" @click="addModal = false">X</button>
          </div>
          <div class="model-body">
            <form>
              <div class="form-group">
                <label for="Name">Attraction:</label>
                <select v-model="newItem.attraction_id">
                  <option value="" disabled selected>-- Select --</option>
                  <option
                    :value="attraction.id"
                    v-for="attraction in attractions"
                    :key="attraction.id"
                  >
                    {{ attraction.name }}
                  </option>
                </select>
              </div>
              <div class="form-group">
                <label for="Duration">Duration:</label>
                <input
                  type="text"
                  id=""
                  placeholder="Duration"
                  v-model="newItem.duration"
                />
              </div>
              <div class="form-group">
                <label for="min_age">Min&nbsp;age:</label>
                <input
                  type="text"
                  name="min_age"
                  id=""
                  placeholder="min_age"
                  v-model="newItem.min_age"
                />
              </div>
              <div class="form-group">
                <label for="max_people">Max&nbsp;people:</label>
                <input
                  type="text"
                  name="max_people"
                  id=""
                  placeholder="max_people"
                  v-model="newItem.max_people"
                />
              </div>
              <div class="form-group">
                <label for="" class="mt-2">Prices</label>
                <table class="table">
                  <tbody>
                    <tr v-for="(item, index) in prices" :key="index">
                      <td>
                        <a-input
                          v-model="item.label"
                          class="disabled"
                          disabled
                        ></a-input>
                      </td>
                      <td>
                        <a-input
                          v-model="item.value"
                          class="disabled"
                          disabled
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="close"
                          shape="circle"
                          @click="removeDetails(index, 'price')"
                        ></a-button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a-input
                          v-model="pricing.label"
                          placeholder="Nationality"
                        ></a-input>
                      </td>
                      <td>
                        <a-input
                          v-model="pricing.value"
                          placeholder="Price"
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="plus"
                          @click="addDetails('price')"
                        ></a-button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="form-group">
                <label for="" class="mt-2">Inclusives</label>
                <table class="table">
                  <tbody>
                    <tr v-for="(item, index) in inclusives" :key="index">
                      <td>
                        <a-input
                          v-model="item.label"
                          class="disabled"
                          disabled
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="close"
                          shape="circle"
                          @click="removeDetails(index, 'inclu')"
                        ></a-button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a-input
                          v-model="inclu.label"
                          placeholder="Item"
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="plus"
                          @click="addDetails('inclu')"
                        ></a-button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="form-group">
                <label for="" class="mt-2">Exclusives</label>
                <table class="table">
                  <tbody>
                    <tr v-for="(item, index) in exclusives" :key="index">
                      <td>
                        <a-input
                          v-model="item.label"
                          class="disabled"
                          disabled
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="close"
                          shape="circle"
                          @click="removeDetails(index, 'exclu')"
                        ></a-button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a-input
                          v-model="exclu.label"
                          placeholder="Item"
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="plus"
                          @click="addDetails('exclu')"
                        ></a-button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="form-group">
                <label for="" class="mt-2">Requirements</label>
                <table class="table">
                  <tbody>
                    <tr v-for="(item, index) in reqs" :key="index">
                      <td>
                        <a-input
                          v-model="item.label"
                          class="disabled"
                          disabled
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="close"
                          shape="circle"
                          @click="removeDetails(index, 'req')"
                        ></a-button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a-input
                          v-model="req.label"
                          placeholder="Item"
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="plus"
                          @click="addDetails('req')"
                        ></a-button>
                      </td>
                    </tr>
                  </tbody>
                </table>
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
            <h4>Edit Package</h4>
            <button class="close" @click="updateModal = false">X</button>
          </div>
          <div class="model-body">
            <form>
              <div class="form-group">
                <label for="Name">Attraction:</label>
                <select v-model="selectedItem.attraction_id">
                  <option value="" disabled selected>-- Select --</option>
                  <option
                    :value="attraction.id"
                    v-for="attraction in attractions"
                    :key="attraction.id"
                  >
                    {{ attraction.name }}
                  </option>
                </select>
              </div>
              <div class="form-group">
                <label for="Duration">Duration:</label>
                <input
                  type="text"
                  id=""
                  placeholder="Duration"
                  v-model="selectedItem.duration"
                />
              </div>
              <div class="form-group">
                <label for="min_age">Min&nbsp;age:</label>
                <input
                  type="text"
                  name="min_age"
                  id=""
                  placeholder="min_age"
                  v-model="selectedItem.min_age"
                />
              </div>
              <div class="form-group">
                <label for="max_people">Max&nbsp;people:</label>
                <input
                  type="text"
                  name="max_people"
                  id=""
                  placeholder="max_people"
                  v-model="selectedItem.max_people"
                />
              </div>
              <div class="form-group">
                <label for="" class="mt-2">Prices</label>
                <table class="table">
                  <tbody>
                    <tr v-for="(item, index) in prices" :key="index">
                      <td>
                        <a-input
                          v-model="item.label"
                          class="disabled"
                          disabled
                        ></a-input>
                      </td>
                      <td>
                        <a-input
                          v-model="item.value"
                          class="disabled"
                          disabled
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="close"
                          shape="circle"
                          @click="removeDetails(index, 'price')"
                        ></a-button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a-input
                          v-model="pricing.label"
                          placeholder="Nationality"
                        ></a-input>
                      </td>
                      <td>
                        <a-input
                          v-model="pricing.value"
                          placeholder="Price"
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="plus"
                          @click="addDetails('price')"
                        ></a-button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="form-group">
                <label for="" class="mt-2">Inclusives</label>
                <table class="table">
                  <tbody>
                    <tr v-for="(item, index) in inclusives" :key="index">
                      <td>
                        <a-input
                          v-model="item.label"
                          class="disabled"
                          disabled
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="close"
                          shape="circle"
                          @click="removeDetails(index, 'inclu')"
                        ></a-button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a-input
                          v-model="inclu.label"
                          placeholder="Item"
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="plus"
                          @click="addDetails('inclu')"
                        ></a-button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="form-group">
                <label for="" class="mt-2">Exclusives</label>
                <table class="table">
                  <tbody>
                    <tr v-for="(item, index) in exclusives" :key="index">
                      <td>
                        <a-input
                          v-model="item.label"
                          class="disabled"
                          disabled
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="close"
                          shape="circle"
                          @click="removeDetails(index, 'exclu')"
                        ></a-button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a-input
                          v-model="exclu.label"
                          placeholder="Item"
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="plus"
                          @click="addDetails('exclu')"
                        ></a-button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="form-group">
                <label for="" class="mt-2">Requirements</label>
                <table class="table">
                  <tbody>
                    <tr v-for="(item, index) in reqs" :key="index">
                      <td>
                        <a-input
                          v-model="item.label"
                          class="disabled"
                          disabled
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="close"
                          shape="circle"
                          @click="removeDetails(index, 'req')"
                        ></a-button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a-input
                          v-model="req.label"
                          placeholder="Item"
                        ></a-input>
                      </td>
                      <td>
                        <a-button
                          icon="plus"
                          @click="addDetails('req')"
                        ></a-button>
                      </td>
                    </tr>
                  </tbody>
                </table>
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
            <h4>Cancel Order</h4>
            <button class="close" @click="deleteModal = false">X</button>
          </div>
          <div class="model-body">
            <h4 class="delete-label">
              Are you sure you want to cancel this Order?
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
  name: "PackageOrders",
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
      newItem: {
        attraction_id: "",
      },
      selectedItem: {},
      orders: [],
      attractions: [],
      token: null,
      prices: [],
      inclusives: [],
      exclusives: [],
      reqs: [],
      pricing: {
        label: "",
        value: "",
      },
      inclu: {
        label: "",
      },
      exclu: {
        label: "",
      },
      req: {
        label: "",
      },
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
    getItems() {
      this.isLoading = true;
      this.$store
        .dispatch("GET_PACKAGE_ORDERS", {
          token: this.$loggedAdminToken(),
          id: this.$route.params.id,
        })
        .then((response) => {
          this.orders = response.data;
          this.isLoading = false;
        });
    },
    confirmItem(item) {
      this.isLoading = true;
      this.$store
        .dispatch("CONFIRM_PACKAGE_ORDERS", {
          token: this.$loggedAdminToken(),
          id: item.id,
        })
        .then((response) => {
          if (response.data.status == "ok") {
            this.$notify({
              group: "status",
              title: "Important message",
              text: response.data.message,
              type: "success",
            });
            this.getItems();
            this.isLoading = false;
          } else {
            this.$notify({
              group: "status",
              title: "Important message",
              text: response.data.message,
              type: "error",
            });
            this.isLoading = false;
          }
        });
    },
    startUpdate(item) {
      this.selectedItem = item;
      if (item.price) {
        this.prices = JSON.parse(item.price);
      } else {
        this.prices = [];
      }

      if (item.inclusives) {
        this.inclusives = JSON.parse(item.inclusives);
      } else {
        this.inclusives = [];
      }
      if (item.exclusives) {
        this.exclusives = JSON.parse(item.exclusives);
      } else {
        this.exclusives = [];
      }
      if (item.reqs) {
        this.reqs = JSON.parse(item.reqs);
      } else {
        this.reqs = [];
      }

      this.pricing = { label: "", value: "" };
      this.inclu = { label: "" };
      this.exclu = { label: "" };
      this.req = { label: "" };
      this.updateModal = true;
    },
    updateItems() {
      this.isLoading = true;
      if (
        this.selectedItem.attraction_id != "" &&
        this.selectedItem.duration != "" &&
        this.selectedItem.min_age != "" &&
        this.selectedItem.max_people != "" &&
        this.selectedItem.image
      ) {
        if (this.prices) {
          this.selectedItem.price = JSON.stringify(this.prices);
        } else {
          this.selectedItem.price = "[]";
        }
        if (this.inclusives) {
          this.selectedItem.inclusives = JSON.stringify(this.inclusives);
        } else {
          this.selectedItem.inclusives = "[]";
        }
        if (this.exclusives) {
          this.selectedItem.exclusives = JSON.stringify(this.exclusives);
        } else {
          this.selectedItem.exclusives = "[]";
        }
        if (this.reqs) {
          this.selectedItem.reqs = JSON.stringify(this.reqs);
        } else {
          this.selectedItem.reqs = "[]";
        }
        this.$store
          .dispatch("UPDATE_PACKAGE", this.selectedItem)
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
              this.pricing = { label: "", value: "" };
              this.inclu = { label: "" };
              this.exclu = { label: "" };
              this.req = { label: "" };
              this.prices = [];
              this.inclusives = [];
              this.exclusives = [];
              this.reqs = [];
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
      } else {
        this.$notify({
          group: "status",
          title: "Important message",
          text: "All Fields are required",
          type: "error",
        });
      }
    },
    startDelete(item) {
      this.selectedItem = item;
      this.deleteModal = true;
    },
    deleteItems() {
      this.isLoading = true;
      this.$store
        .dispatch("DELETE_PACKAGE_ORDERS", this.selectedItem.id)
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

    addDetails(type) {
      let vm = this;
      switch (type) {
        case "price":
          this.prices.push({
            label: this.pricing.label,
            value: this.pricing.value,
          });
          this.pricing.label = "";
          this.pricing.value = "";
          break;
        case "inclu":
          this.inclusives.push({
            label: this.inclu.label,
          });
          this.inclu.label = "";
          break;
        case "exclu":
          this.exclusives.push({
            label: this.exclu.label,
          });
          this.exclu.label = "";
          break;
        case "req":
          this.reqs.push({
            label: this.req.label,
          });
          this.req.label = "";
          break;

        default:
          break;
      }
    },
    removeDetails(index, type) {
      let vm = this;
      switch (type) {
        case "price":
          this.prices.splice(index, 1);
          break;
        case "inclu":
          this.inclusives.splice(index, 1);
          break;
        case "exclu":
          this.exclusives.splice(index, 1);
          break;
        case "req":
          this.reqs.splice(index, 1);
          break;

        default:
          break;
      }
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

<style lang="scss" scoped>
</style>
