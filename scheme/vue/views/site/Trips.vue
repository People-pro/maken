<template>
  <div class="Trips">
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
              Upcoming Trips
            </h2>
            <p
              class="txt-shad-sm intro-desc"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              Join us and let's learn and have fun.
            </p>
          </div>
        </div>
      </div>
      <div class="trips">
        <div class="header" data-aos="fade-up" data-aos-duration="1000">
          <!-- <label for="Upcoming Trips" class="my-title">Upcoming Trips</label> -->
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
          <div class="trip-item">
            <div class="content">
              <div class="img-section jc-center">
                <img src="/assets/images/canopy.jpg" alt="" srcset="" />
                <div class="specs">
                  <div class="region">
                    <i class="fas fa-map-marker-alt"></i>
                    <label for="Tourism Region">Rwanda</label>
                  </div>
                  <div class="days"><label for="Days">2 Days</label></div>
                </div>
              </div>
              <div class="text-section">
                <label for="Nyungwe National Park" class="trip-title"
                  >Nyungwe National Park</label
                >
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">$2400</label>
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
          <div class="trip-item">
            <div class="content">
              <div class="img-section jc-center">
                <img src="/assets/images/gor2.jpg" alt="" srcset="" />
                <div class="specs">
                  <div class="region">
                    <i class="fas fa-map-marker-alt"></i>
                    <label for="Tourism Region">Rwanda</label>
                  </div>
                  <div class="days"><label for="Days">3 Days</label></div>
                </div>
              </div>
              <div class="text-section">
                <label for="Volcanoes National Park" class="trip-title"
                  >Volcanoes National Park</label
                >
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">$5100</label>
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
          <div class="trip-item">
            <div class="content">
              <div class="img-section jc-center">
                <img src="/assets/images/bg2.jpg" alt="" srcset="" />
                <div class="specs">
                  <div class="region">
                    <i class="fas fa-map-marker-alt"></i>
                    <label for="Tourism Region">Rwanda</label>
                  </div>
                  <div class="days"><label for="Days">1 Day</label></div>
                </div>
              </div>
              <div class="text-section">
                <label for="Twin Lakes" class="trip-title">Twin Lakes</label>
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">$1400</label>
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
          <div class="trip-item">
            <div class="content">
              <div class="img-section jc-center">
                <img src="/assets/images/canopy.jpg" alt="" srcset="" />
                <div class="specs">
                  <div class="region">
                    <i class="fas fa-map-marker-alt"></i>
                    <label for="Tourism Region">Rwanda</label>
                  </div>
                  <div class="days"><label for="Days">2 Days</label></div>
                </div>
              </div>
              <div class="text-section">
                <label for="Nyungwe National Park" class="trip-title"
                  >Nyungwe National Park</label
                >
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">$2400</label>
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
          <div class="trip-item">
            <div class="content">
              <div class="img-section jc-center">
                <img src="/assets/images/gor2.jpg" alt="" srcset="" />
                <div class="specs">
                  <div class="region">
                    <i class="fas fa-map-marker-alt"></i>
                    <label for="Tourism Region">Rwanda</label>
                  </div>
                  <div class="days"><label for="Days">3 Days</label></div>
                </div>
              </div>
              <div class="text-section">
                <label for="Volcanoes National Park" class="trip-title"
                  >Volcanoes National Park</label
                >
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">$5100</label>
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
          <div class="trip-item">
            <div class="content">
              <div class="img-section jc-center">
                <img src="/assets/images/bg2.jpg" alt="" srcset="" />
                <div class="specs">
                  <div class="region">
                    <i class="fas fa-map-marker-alt"></i>
                    <label for="Tourism Region">Rwanda</label>
                  </div>
                  <div class="days"><label for="Days">1 Day</label></div>
                </div>
              </div>
              <div class="text-section">
                <label for="Twin Lakes" class="trip-title">Twin Lakes</label>
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">$1400</label>
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
  name: "Trips",
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
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
  },
  mounted() {
    let vm = this;
  },
};
</script>

<style lang="scss">
$orange: #ef6203;
$green: #044914;
.Trips {
  width: 99.1vw;
  overflow: hidden;
  @media screen and (max-width: 900px) {
    width: 100vw;
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
