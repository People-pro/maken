<template>
  <div class="Dashboard">
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
        <AdminLogged :brand="'Dashboard'" />
        <div class="dash-items">
          <div class="dash-item">
            <div class="dash-body">
              <div class="content">
                <label for="" class="title">Packages</label>
                <h5 class="number">{{ packages }}</h5>
              </div>
              <div class="icon">
                <i class="fas fa-list"></i>
              </div>
            </div>
            <div class="dash-foot">
              <router-link to="/admin/packages" class="view mybtn-o"
                >View <i class="mdi mdi-arrow-right"></i
              ></router-link>
            </div>
          </div>
          <div class="dash-item">
            <div class="dash-body">
              <div class="content">
                <label for="" class="title">Trips</label>
                <h5 class="number">{{ trips }}</h5>
              </div>
              <div class="icon">
                <i class="fas fa-bus"></i>
              </div>
            </div>
            <div class="dash-foot">
              <router-link to="/admin/trips" class="view mybtn-o"
                >View <i class="mdi mdi-arrow-right"></i
              ></router-link>
            </div>
          </div>
          <div class="dash-item">
            <div class="dash-body">
              <div class="content">
                <label for="" class="title">Attractions</label>
                <h5 class="number">{{ attractions }}</h5>
              </div>
              <div class="icon">
                <i class="fa fa-tree"></i>
              </div>
            </div>
            <div class="dash-foot">
              <router-link to="/admin/attractions" class="view mybtn-o"
                >View <i class="mdi mdi-arrow-right"></i
              ></router-link>
            </div>
          </div>
          <div class="dash-item">
            <div class="dash-body">
              <div class="content">
                <label for="" class="title">Albums</label>
                <h5 class="number">{{ albums }}</h5>
              </div>
              <div class="icon">
                <i class="fa fa-images"></i>
              </div>
            </div>
            <div class="dash-foot">
              <router-link to="/admin/gallery" class="view mybtn-o"
                >View <i class="mdi mdi-arrow-right"></i
              ></router-link>
            </div>
          </div>
        </div>
        <div class="dash-orders">
          <div class="table">
            <div class="table-title">
              <label for="Recent Package orders">Recent Package orders</label>
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
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="item in orders" :key="item.id">
                  <td>{{item.num}}</td>
                  <td>{{item.date}}</td>
                  <td>{{item.attraction.name}}</td>
                  <td>{{item.fullname}}</td>
                  <td>{{item.phone}}</td>
                  <td>{{item.email}}</td>
                  <td>{{item.nationality}}</td>
                  <td>{{item.people}}</td>
                  <td>
                    <button class="videos" @click="startUpdate(item)">
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
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Dashboard",
  data() {
    return {
      isLoading: false,
      fullPage: true,
      color: "#015b0a",
      trips: 0,
      packages: 0,
      attractions: 0,
      users: 0,
      albums: 0,
      orders: [],
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
    getItems() {
      this.isLoading = true;
      this.$store
        .dispatch("DASHBOARDS", { token: this.$loggedAdminToken() })
        .then((response) => {
          this.trips = response.data["trips"];
          this.packages = response.data["packages"];
          this.attractions = response.data["attractions"];
          this.users = response.data["users"];
          this.albums = response.data["albums"];
          this.orders = response.data["orders"];
          this.isLoading = false;
        });
    },
  },
  mounted() {
    this.getItems();
  },
};
</script>

<style lang="scss" scoped>
.Dashboard {
  background: #fcfcfc;
  $orange: #ef6203;
  $green: #044914;
  .dash-items {
    display: grid;
    grid-template-columns: 17% 17% 17% 17% 17% 17%;
    grid-gap: 1%;
    padding: 1rem 2rem;
    row-gap: 0.5rem;
    @media only screen and (max-width: 1500px) {
      grid-template-columns: 24% 24% 24% 24%;
    }
    @media only screen and (max-width: 1000px) {
      grid-template-columns: 49% 49%;
    }
    @media only screen and (max-width: 700px) {
      grid-template-columns: 99%;
    }
    .dash-item {
      background: #fcfcfc;
      border-radius: 3px;
      box-shadow: 2px 2px 10px 5px #eee;
      color: Black;
      overflow: hidden;
      .dash-body {
        padding: 1rem;
        display: flex;
        align-items: center;
        &.dash-1 {
          background: rgb(3, 131, 152);
          background: linear-gradient(
            126deg,
            rgba(3, 131, 152, 1) 0%,
            rgba(2, 193, 187, 1) 100%,
            rgba(0, 212, 255, 1) 100%
          );
        }
        &.dash-2 {
          background: rgb(22, 0, 78);
          background: linear-gradient(
            126deg,
            rgba(22, 0, 78, 1) 0%,
            rgba(103, 54, 255, 1) 100%,
            rgba(56, 2, 193, 1) 100%
          );
        }
        &.dash-3 {
          background: rgb(78, 0, 0);
          background: linear-gradient(
            126deg,
            rgba(78, 0, 0, 1) 0%,
            rgba(175, 0, 0, 1) 100%
          );
        }
        &.dash-4 {
          background: rgb(12, 64, 0);
          background: linear-gradient(
            148deg,
            rgba(12, 64, 0, 1) 0%,
            rgba(19, 134, 3, 1) 50%
          );
        }
        .icon {
          width: 30%;
          display: flex;
          align-items: center;
          justify-content: flex-end;
          i {
            font-size: 3rem;
            color: #a5a5a5;
          }
        }
        .content {
          width: 60%;
          display: flex;
          flex-direction: column;
          justify-content: flex-start;
          label {
            font-size: 0.75rem;
            font-weight: 400;
            text-align: left;
          }
          h5 {
            // color: white;
            font-weight: 600;
            text-align: left;
            font-size: 1.75rem;
            margin-bottom: 0;
          }
        }
      }
      .dash-foot {
        display: flex;
        justify-content: center;
        .view {
          color: white;
          font-size: 0.9rem;
          width: 100%;
          background: $green;
          border: none;
          padding: 0.35rem 0.25rem;
          text-align: center;
        }
      }
    }
  }
  .dash-orders{
    margin-top: 3rem;
    border-top: 1px #eee solid;
  }
}
</style>
