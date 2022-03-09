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
              {{ item.title }}
            </h2>
            <p
              class="txt-shad-sm intro-desc"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              Come join us and lets explore beyond expectations.
            </p>
          </div>
        </div>
      </div>
      <div class="view-package-widget">
        <div class="widget-header">
          <hooper :settings="Settings" class="widget-body">
            <slide
              class="widget-item"
              v-for="image in item.images"
              :key="image"
            >
              <img :src="'/assets/uploaded/' + image" alt="" />
            </slide>
          </hooper>
        </div>
      </div>
      <div class="trips">
        <div class="header" data-aos="fade-up" data-aos-duration="1000">
          <label for="Upcoming Trips" class="my-title"
            >Other Upcoming Trips</label
          >
          <hr class="myhr" />
          <p class="desc">Come join us and lets explore beyond expectations.</p>
        </div>
        <div class="trips-body" data-aos="fade-up" data-aos-duration="1000">
          <router-link
            :to="'/viewTrip/' + trip.id"
            class="trip-item"
            v-for="trip in trips"
            :key="trip.id"
          >
            <div class="content">
              <div class="img-section jc-center">
                <img :src="'/assets/uploaded/' + trip.image" alt="" srcset="" />
                <div class="specs">
                  <div class="region">
                    <i class="fas fa-map-marker-alt"></i>
                    <label for="Tourism Region">{{
                      trip.attraction.name
                    }}</label>
                  </div>
                  <div class="days">
                    <label for="Days">{{ trip.duration }}</label>
                  </div>
                </div>
              </div>
              <div class="text-section">
                <label :for="trip.attraction.name" class="trip-title">{{
                  trip.attraction.name
                }}</label>
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">{{ trip.price[0].value }}</label>
                </div>
                <div class="book">
                  <router-link to="/book/1" class="book-btn"
                    >View more <i class="mdi mdi-arrow-right"></i
                  ></router-link>
                </div>
              </div>
            </div>
            <div class="date-widget">
              <label for="trip date">28th, Dec 2021</label>
            </div>
          </router-link>
        </div>
        <div
          class="trips-footer jc-center"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          <router-link to="/trips" class="mybtn-o">View More Trips</router-link>
        </div>
      </div>
    </div>
    <BookTrip
      v-show="startBooking"
      @closeModal="startBooking = false"
      :action="'bookTrip'"
      :trip="item"
    />
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
            itemsToShow: 1.2,
          },
          800: {
            itemsToShow: 2.2,
          },
          1300: {
            itemsToShow: 3,
          },
          1600: {
            itemsToShow: 3,
          },
          2000: {
            itemsToShow: 4,
          },
        },
      },
      item: null,
      trips: [],
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
    getItems() {
      this.isLoading = true;
      this.$store
        .dispatch("GET_SINGLE_GALLERY", this.$route.params.id)
        .then((response) => {
          this.item = response.data.album;
          this.trips = response.data.trips;
          this.item.images = JSON.parse(this.item.images);
          this.trips.forEach((trip) => {
            trip.price = JSON.parse(trip.price);
          });
          this.isLoading = false;
        });
    },
  },
  mounted() {
    let vm = this;
    this.getItems();
  },
  watch: {
    "$route.params.id": function () {
      this.getItems();
    },
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
          height: 300px;
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
              height: 250px;
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
        display: flex;
        justify-content: space-between;
        @media screen and (max-width: 1100px) {
          flex-direction: column;
        }
        img {
          width: 90%;
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
              margin-right: 0.5rem;
            }
            .price {
              font-weight: 600;
              color: $orange;
              font-size: 1.25;
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
  .trips {
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
    .trips-body {
      display: grid;
      grid-template-columns: 23.5% 23.5% 23.5% 23.5%;
      grid-column-gap: 2%;
      grid-row-gap: 2rem;
      margin: 2rem 0;
      @media screen and (max-width: 1100px) {
        grid-template-columns: 48% 48%;
      }
      @media screen and (max-width: 600px) {
        grid-template-columns: 100%;
      }
      .trip-item {
        background: #fff;
        border-radius: 0 1.5rem 0 1.5rem;
        box-shadow: 0px 0px 10px 3px #4d4d4d2a;
        transition: all 0.4s ease-in-out;
        position: relative;
        &:hover,
        &:focus {
          transform: scale(1.2, 1.2);
          z-index: 1;
        }
        .date-widget {
          position: absolute;
          top: -10px;
          left: 0;
          background-color: $orange;
          color: white;
          border-radius: 0 1.5rem 1.5rem 0;
          padding: 0.2rem 0.4rem;
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
              border-radius: 0 1.5rem 0 1.5rem;
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
            .trip-title {
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
    .trips-footer {
      padding: 2rem 0;
    }
  }
}
</style>
