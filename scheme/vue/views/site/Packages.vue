<template>
  <div class="Services">
    <loading
      :active.sync="isLoading"
      :can-cancel="true"
      :on-cancel="onCancel"
      :color="color"
      :is-full-page="fullPage"
    ></loading>
    <clientHeader />
    <div class="all-content">
      <div class="intro">
        <div class="intro-content">
          <div class="intro-body">
            <h2
              data-aos="fade-up"
              data-aos-duration="1000"
              class="intro-header"
            >
              Packages
            </h2>
            <p
              class="txt-shad-sm intro-desc"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              Our best flexible packages for you.
            </p>
          </div>
        </div>
      </div>
      <div class="packages">
        <div class="header" data-aos="fade-up" data-aos-duration="1000">
          <hr class="myhr" />
          <p class="desc">
            Book a package with us and let's bring adventure to your table.
          </p>
        </div>
        <div class="packages-body" data-aos="fade-up" data-aos-duration="1000">
          <router-link to="/viewPackage/1" class="package-item">
            <div class="content">
              <div class="img-section jc-center">
                <img src="/assets/uploaded/pack1.jpg" alt="" srcset="" />
                <div class="specs">
                  <div class="region">
                    <i class="fas fa-map-marker-alt"></i>
                    <label for="Tourism Region">Rwanda</label>
                  </div>
                  <div class="days"><label for="Days">5 Days</label></div>
                </div>
              </div>
              <div class="text-section">
                <label for="Akagera National Park" class="package-title"
                  >Akagera National Park</label
                >
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">$4300</label>
                </div>
                <div class="book">
                  <router-link to="/book/1" class="book-btn"
                    >Explore <i class="mdi mdi-arrow-right"></i
                  ></router-link>
                </div>
              </div>
            </div>
          </router-link>
          <router-link
            :to="'/viewPackage/' + item.id"
            class="package-item"
            v-for="item in items"
            :key="item.id"
          >
            <div class="content">
              <div class="img-section jc-center">
                <img
                  :src="'/assets/uploaded/' + item.image"
                  :alt="item.attraction.name"
                  srcset=""
                />
                <div class="specs">
                  <div class="region">
                    <i class="fas fa-map-marker-alt"></i>
                    <label for="Tourism Region">{{
                      item.attraction.country
                    }}</label>
                  </div>
                  <div class="days">
                    <label for="Days">{{ item.duration }}</label>
                  </div>
                </div>
              </div>
              <div class="text-section">
                <label :for="item.attraction.name" class="package-title">{{
                  item.attraction.name
                }}</label>
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">{{ item.price[0].value }}</label>
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
      </div>
      <div class="trips">
        <div class="header" data-aos="fade-up" data-aos-duration="1000">
          <label for="Upcoming Trips" class="my-title">Upcoming Trips</label>
          <hr class="myhr" />
          <p class="desc">Come join us and lets explore beyond expectations.</p>
        </div>
        <div class="trips-body" data-aos="fade-up" data-aos-duration="1000">
          <div class="trip-item">
            <div class="content">
              <div class="img-section jc-center">
                <img src="/assets/images/pack1.jpg" alt="" srcset="" />
                <div class="specs">
                  <div class="region">
                    <i class="fas fa-map-marker-alt"></i>
                    <label for="Tourism Region">Rwanda</label>
                  </div>
                  <div class="days"><label for="Days">5 Days</label></div>
                </div>
              </div>
              <div class="text-section">
                <label for="Akagera National Park" class="trip-title"
                  >Akagera National Park</label
                >
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">$4300</label>
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
          </div>
          <router-link
            :to="'/viewTrip/' + item.id"
            class="trip-item"
            v-for="item in trips"
            :key="item.id"
          >
            <div class="content">
              <div class="img-section jc-center">
                <img
                  :src="'/assets/uploaded/' + item.image"
                  :alt="item.attraction.name"
                  srcset=""
                />
                <div class="specs">
                  <div class="region">
                    <i class="fas fa-map-marker-alt"></i>
                    <label for="Tourism Region">{{
                      item.attraction.country
                    }}</label>
                  </div>
                  <div class="days">
                    <label for="Days">{{ item.duration }}</label>
                  </div>
                </div>
              </div>
              <div class="text-section">
                <label :for="item.attraction.name" class="trip-title">{{
                  item.attraction.name
                }}</label>
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">{{ item.price[0].value }}</label>
                </div>
                <div class="book">
                  <router-link :to="'/viewTrip/' + item.id" class="book-btn"
                    >View More <i class="mdi mdi-arrow-right"></i
                  ></router-link>
                </div>
              </div>
            </div>
            <div class="date-widget">
              <label for="trip date">{{ item.date }}</label>
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
    <clientFooter />
  </div>
</template>

<script>
export default {
  name: "Services",
  data() {
    return {
      isLoading: false,
      color: "#072e4d",
      fullPage: true,
      partnersSettings: {
        itemsToShow: 2,
        centerMode: false,
        autoPlay: true,
        wheelControl: false,
        trimWhiteSpace: true,
        infiniteScroll: true,
        playSpeed: 4000,
        transition: 1000,
        hoverPause: false,
        breakpoints: {
          400: {
            itemsToShow: 3,
          },
          800: {
            itemsToShow: 4,
          },
          1300: {
            itemsToShow: 5,
          },
          1600: {
            itemsToShow: 6,
          },
        },
      },
      items: [],
      trips: [],
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
    getItems() {
      this.isLoading = true;
      this.$store.dispatch("GET_SITE_PACKAGES").then((response) => {
        this.items = response.data["packages"];
        this.items.forEach((item) => {
          item.price = JSON.parse(item.price);
        });

        this.trips = response.data["trips"];
        this.trips.forEach((item) => {
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
.Services {
  width: 99.1vw;
  overflow: hidden;
  @media screen and (max-width: 900px) {
    width: 100vw;
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
