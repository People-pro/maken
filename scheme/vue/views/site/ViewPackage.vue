<template>
  <div class="ViewPackage">
    <loading
      :active.sync="isLoading"
      :can-cancel="true"
      :on-cancel="onCancel"
      :color="color"
      :is-full-page="fullPage"
    ></loading>
    <clientHeader />
    <div class="all-content" v-if="item">
      <div class="intro">
        <div class="intro-content">
          <div class="intro-body">
            <h2
              data-aos="fade-up"
              data-aos-duration="1000"
              class="intro-header"
            >
              {{ item.attraction.name }}
            </h2>
            <p
              class="txt-shad-sm intro-desc"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              A {{ item.duration }} Trip to {{ item.attraction.name }}.
            </p>
          </div>
        </div>
      </div>
      <div class="view-package-widget">
        <div class="widget-desc">
          <label for="Trip Overview" class="my-title">Overview</label>
          <hr class="myhr" />
          <div class="desc-content">
            <div class="desc-body">
              <div class="desc-item">
                <label for="Destination" class="title">Destination:</label>
                <label :for="item.attraction.name" class="item">{{
                  item.attraction.name
                }}</label>
              </div>
              <div class="desc-item">
                <label for="Duration" class="title">Duration:</label>
                <label :for="item.duration" class="item">{{
                  item.duration
                }}</label>
              </div>
              <div class="desc-item">
                <label for="Destination" class="title">Country:</label>
                <label for="Rwanda" class="item">{{
                  item.attraction.country
                }}</label>
              </div>
            </div>
            <div class="desc-body">
              <div class="desc-item">
                <label for="Destination" class="title">Region/Province:</label>
                <label :for="item.attraction.region" class="item">{{
                  item.attraction.region
                }}</label>
              </div>
              <div class="desc-item">
                <label for="Min Age" class="title">Min Age:</label>
                <label for="Min Age" class="item">{{ item.min_age }}</label>
              </div>
              <div class="desc-item">
                <label for="Max People" class="title">Max People:</label>
                <label for="Max people" class="item">{{
                  item.max_people
                }}</label>
              </div>
            </div>
            <div class="desc-body">
              <div
                class="desc-item"
                v-for="price in item.price"
                :key="price.label"
              >
                <label for="Price" class="title"
                  >Price({{ price.label }}):</label
                >
                <label for="price" class="item price">{{ price.value }}</label>
              </div>
            </div>
          </div>
          <div
            class="desc-footer jc-center"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <button class="mybtn" @click="startBooking = true">Book Now</button>
          </div>
        </div>
        <div class="widget-header">
          <hooper :settings="Settings" class="widget-body">
            <slide
              class="widget-item"
              v-for="image in item.attraction.images"
              :key="image"
            >
              <img :src="'/assets/uploaded/' + image" alt="" />
            </slide>
          </hooper>
        </div>
        <div class="widget-inclusives">
          <div class="inclusives-content">
            <div class="left">
              <label for="Trip Overview" class="my-title">Inclusives</label>
              <hr class="myhr" />
              <div class="inclusive-body">
                <div
                  class="inclusive-item"
                  v-for="inclusive in item.inclusives"
                  :key="inclusive"
                >
                  <i class="fas fa-check"></i>
                  <label :for="inclusive.label">{{ inclusive.label }}</label>
                </div>
              </div>
            </div>
            <div class="right">
              <label for="Trip Overview" class="my-title">Exclusives</label>
              <hr class="myhr" />
              <div class="inclusive-body">
                <div
                  class="inclusive-item"
                  v-for="exclusive in item.exclusives"
                  :key="exclusive"
                >
                  <i class="fas fa-times"></i>
                  <label :for="exclusive.label">{{ exclusive.label }}</label>
                </div>
              </div>
            </div>
            <div class="right">
              <label for="Trip Overview" class="my-title">Requirements</label>
              <hr class="myhr" />
              <div class="inclusive-body">
                <div class="inclusive-item" v-for="req in item.reqs" :key="req">
                  <label :for="req.label">{{ req.label }}</label>
                </div>
              </div>
            </div>
          </div>
          <div
            class="inclusives-footer jc-center"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <button class="mybtn" @click="startBooking = true">Book Now</button>
          </div>
        </div>
      </div>
      <div class="packages">
        <div class="header" data-aos="fade-up" data-aos-duration="1000">
          <label for="Upcoming Trips" class="my-title">Related Packages</label>
          <hr class="myhr" />
          <p class="desc">
            Book a package with us and let's bring adventure to your table.
          </p>
        </div>
        <div class="packages-body" data-aos="fade-up" data-aos-duration="1000">
          <router-link
            :to="'/viewPackage/' + related.id"
            class="package-item"
            v-for="related in item.packages"
            :key="related.id"
          >
            <div class="content">
              <div class="img-section jc-center">
                <img
                  :src="'/assets/uploaded/' + related.image"
                  :alt="related.attraction.name"
                  srcset=""
                />
                <div class="specs">
                  <div class="region">
                    <i class="fas fa-map-marker-alt"></i>
                    <label for="Tourism Region">{{
                      related.attraction.country
                    }}</label>
                  </div>
                  <div class="days">
                    <label for="Days">{{ related.duration }}</label>
                  </div>
                </div>
              </div>
              <div class="text-section">
                <label :for="related.attraction.name" class="package-title">{{
                  related.attraction.name
                }}</label>
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">{{ related.price[0].value }}</label>
                </div>
                <div class="book">
                  <router-link to="/book/1" class="book-btn"
                    >Explore <i class="mdi mdi-arrow-right"></i
                  ></router-link>
                </div>
              </div>
            </div>
          </router-link>
        </div>
        <div
          class="packages-footer jc-center"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          <router-link to="/packages" class="mybtn-o"
            >View More Packages</router-link
          >
        </div>
      </div>
    </div>
    <BookPackage v-show="startBooking" @closeModal="startBooking = false" />
    <clientFooter />
  </div>
</template>

<script>
export default {
  name: "ViewPackage",
  data() {
    return {
      isLoading: false,
      color: "#072e4d",
      fullPage: true,
      startBooking: false,
      Settings: {
        itemsToShow: 1,
        centerMode: false,
        autoPlay: true,
        wheelControl: false,
        trimWhiteSpace: true,
        infiniteScroll: true,
        playSpeed: 3000,
        transition: 1000,
        hoverPause: false,
        breakpoints: {
          400: {
            itemsToShow: 1,
          },
          800: {
            itemsToShow: 2,
          },
          1300: {
            itemsToShow: 3,
          },
          1600: {
            itemsToShow: 3,
          },
        },
      },
      item: null,
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
    getItems() {
      this.isLoading = true;
      this.$store
        .dispatch("GET_SINGLE_PACKAGES", this.$route.params.id)
        .then((response) => {
          this.item = response.data;
          this.item.price = JSON.parse(this.item.price);
          this.item.attraction.images = JSON.parse(this.item.attraction.images);
          this.item.inclusives = JSON.parse(this.item.inclusives);
          this.item.exclusives = JSON.parse(this.item.exclusives);
          this.item.reqs = JSON.parse(this.item.reqs);
          this.item.packages.forEach((item) => {
            item.price = JSON.parse(item.price);
          });
          this.isLoading = false;
        });
    },
  },
  mounted() {
    let vm = this;
    this.getItems();
  },
};
</script>

<style lang="scss">
$orange: #ef6203;
$green: #044914;
.ViewPackage {
  width: 99.1vw;
  overflow: hidden;
  @media screen and (max-width: 900px) {
    width: 100vw;
  }
  .view-package-widget {
    .widget-header {
      .widget-body {
        height: 500px;
        @media screen and (max-width: 900px) {
          height: 400px;
        }
        @media screen and (max-width: 600px) {
          height: 250px;
        }
        .widget-item {
          img {
            height: 500px;
            width: 100%;
            object-fit: cover;
            @media screen and (max-width: 900px) {
              height: 400px;
            }
            @media screen and (max-width: 600px) {
              height: 300px;
            }
          }
        }
      }
    }
    .widget-desc {
      padding: 4rem 15rem;
      @media screen and (max-width: 1700px) {
        padding: 4rem 10rem;
      }
      @media screen and (max-width: 1300px) {
        padding: 3rem 5rem;
      }
      @media screen and (max-width: 900px) {
        padding: 2rem;
      }
      .desc-content {
        display: grid;
        grid-template-columns: 50% 50%;
        @media screen and (max-width: 900px) {
          grid-template-columns: 100%;
          grid-row-gap: 1rem;
        }
        .desc-body {
          display: flex;
          flex-direction: column;
          column-gap: 1rem;
          row-gap: 1rem;
          .desc-item {
            display: flex;
            font-size: 1.15rem;
            @media screen and (max-width: 900px) {
              font-size: 1rem;
            }
            @media screen and (max-width: 600px) {
              flex-direction: column;
            }
            .title {
              font-weight: 600;
            }
          }
        }
      }
      .desc-footer {
        margin-top: 1.5rem;
      }
    }
    .widget-inclusives {
      padding: 2rem 15rem;
      background: #eee;
      @media screen and (max-width: 1700px) {
        padding: 2rem 10rem;
      }
      @media screen and (max-width: 1300px) {
        padding: 2rem 5rem;
      }
      @media screen and (max-width: 900px) {
        padding: 2rem;
      }
      .inclusives-content {
        display: flex;
        justify-content: space-evenly;
        @media screen and (max-width: 1100px) {
          flex-direction: column;
        }

        .left {
          .inclusive-body {
            .inclusive-item {
              i {
                color: green;
              }
              label {
                line-height: 1.5;
                font-weight: 500;
              }
            }
          }
        }
        .right {
          @media screen and (max-width: 1100px) {
            margin-top: 2rem;
          }
          .inclusive-body {
            .inclusive-item {
              i {
                color: red;
              }
              label {
                line-height: 1.5;
                font-weight: 500;
              }
            }
          }
        }
      }
      .inclusives-footer {
        margin-top: 1.5rem;
      }
    }
  }
  .packages {
    position: relative;
    background: #f5f5f5;
    padding: 4rem 15rem;
    @media screen and (max-width: 1700px) {
      padding: 4rem 10rem;
    }
    @media screen and (max-width: 1300px) {
      padding: 3rem 5rem;
    }
    @media screen and (max-width: 900px) {
      padding: 2rem;
    }
    .header {
      display: flex;
      align-items: center;
      flex-direction: column;
      width: 100%;
      @media screen and (max-width: 600px) {
        align-items: flex-start;
      }
      .desc {
        color: #333333;
        font-weight: 400;
        font-size: 1.1rem;
        @media screen and (max-width: 1200px) {
          font-size: 1rem;
        }
        @media screen and (max-width: 900px) {
          font-size: 0.8rem;
        }
      }
    }
    .packages-body {
      display: grid;
      grid-template-columns: 23.5% 23.5% 23.5% 23.5%;
      grid-column-gap: 2%;
      grid-row-gap: 2rem;
      margin: 2rem 0;
      flex-wrap: wrap;
      @media screen and (max-width: 1100px) {
        grid-template-columns: 48% 48%;
      }
      @media screen and (max-width: 600px) {
        grid-template-columns: 100%;
      }
      .package-item {
        background: #fff;
        border-radius: 1.5rem;
        box-shadow: 0px 0px 10px 3px #4d4d4d2a;
        // overflow: hidden;
        transition: all 0.4s ease-in-out;
        &:hover,
        &:focus {
          transform: scale(1.2, 1.2);
          z-index: 1;
        }
        .content {
          display: flex;
          flex-direction: column;
          position: relative;
          .img-section {
            position: relative;
            img {
              height: 250px;
              width: 100%;
              object-fit: cover;
              border-radius: 1.5rem;
              @media screen and (max-width: 1300px) {
                height: 200px;
              }
              @media screen and (max-width: 1100px) {
                height: 250px;
              }
              @media screen and (max-width: 700px) {
                height: 200px;
              }
            }
            .specs {
              background-color: #fff;
              border-radius: 100px;
              padding: 0.4rem 1rem;
              position: absolute;
              bottom: -10px;
              width: 80%;
              display: flex;
              justify-content: space-between;
              align-items: center;
              color: #2b2b2b;
              font-size: 0.8rem;
              box-shadow: 0px 0px 10px 3px #0000003b;
              .region {
                display: flex;
                align-items: center;
                column-gap: 0.25rem;
              }
            }
          }
          .text-section {
            padding: 0 1rem;
            padding-top: 2rem;
            @media screen and (max-width: 1300px) {
              padding: 0 0.75rem;
              padding-top: 1.5rem;
            }
            .package-title {
              color: #1d1d1d;
              font-weight: 500;
              font-size: 1.2rem;
              @media screen and (max-width: 1300px) {
                font-size: 1rem;
              }
            }
          }
          hr {
            align-self: center;
            width: 90%;
            border: none;
            border-top: 1px #eee solid;
            margin: 1rem 0;
          }
          .content-footer {
            display: flex;
            justify-content: space-between;
            padding: 0 1rem;
            padding-bottom: 1rem;
            .money {
              color: $orange;
              font-size: 1.5rem;
              font-weight: 500;
              @media screen and (max-width: 1300px) {
                font-size: 1.25rem;
              }
            }
            .book {
              .book-btn {
                color: #1d1d1d;
                font-size: 0.8rem;
                font-weight: 600;
                &:hover {
                  color: $orange;
                }
              }
            }
          }
        }
      }
    }
    .packages-footer {
      padding: 2rem 0;
    }
  }
}
</style>
