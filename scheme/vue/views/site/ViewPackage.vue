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
    <div class="all-content">
      <div class="intro">
        <div class="intro-content">
          <div class="intro-body">
            <h2
              data-aos="fade-up"
              data-aos-duration="1000"
              class="intro-header"
            >
              Akagera National Park
            </h2>
            <p
              class="txt-shad-sm intro-desc"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              A 5 days Trip to Akagera National Park.
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
                <label for="Akagera National Park" class="item"
                  >Akagera National Park</label
                >
              </div>
              <div class="desc-item">
                <label for="Destination" class="title">Duration:</label>
                <label for="5 Days" class="item">5 Days</label>
              </div>
              <div class="desc-item">
                <label for="Destination" class="title">Country:</label>
                <label for="Rwanda" class="item">Rwanda</label>
              </div>
            </div>
            <div class="desc-body">
              <div class="desc-item">
                <label for="Destination" class="title">Region/Province:</label>
                <label for="Eastern Province" class="item"
                  >Eastern Province</label
                >
              </div>
              <div class="desc-item">
                <label for="Min Age" class="title">Min Age:</label>
                <label for="16 Years" class="item">16 Years</label>
              </div>
              <div class="desc-item">
                <label for="Max People" class="title">Max People:</label>
                <label for="6" class="item">6</label>
              </div>
            </div>
            <div class="desc-body">
              <div class="desc-item">
                <label for="Price" class="title">Price(Rwandans):</label>
                <label for="price" class="item price">45K</label>
              </div>
              <div class="desc-item">
                <label for="Price" class="title">Price(Residents):</label>
                <label for="price" class="item price">90K</label>
              </div>
              <div class="desc-item">
                <label for="Price" class="title">Price(Foreigners):</label>
                <label for="price" class="item price">130K</label>
              </div>
            </div>
          </div>
          <div
            class="desc-footer jc-center"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <button class="mybtn">Book Now</button>
          </div>
        </div>
        <div class="widget-header">
          <hooper :settings="Settings" class="widget-body">
            <slide class="widget-item">
              <img src="/assets/uploaded/pack1.jpg" alt="" />
            </slide>
            <slide class="widget-item">
              <img src="/assets/uploaded/akag2.jpg" alt="" />
            </slide>
            <slide class="widget-item">
              <img src="/assets/uploaded/akag3.jpg" alt="" />
            </slide>
            <slide class="widget-item">
              <img src="/assets/uploaded/akag4.jpg" alt="" />
            </slide>
          </hooper>
        </div>
        <div class="widget-inclusives">
          <div class="inclusives-content">
            <div class="left">
              <label for="Trip Overview" class="my-title">Inclusives</label>
              <hr class="myhr" />
              <div class="inclusive-body">
                <div class="inclusive-item">
                  <i class="fas fa-check"></i>
                  <label for="Transport">Transport</label>
                </div>
                <div class="inclusive-item">
                  <i class="fas fa-check"></i>
                  <label for="Accommodations">Accommodations</label>
                </div>
                <div class="inclusive-item">
                  <i class="fas fa-check"></i>
                  <label for="Entry fees to the park mentioned"
                    >Entry fees to the park mentioned</label
                  >
                </div>
                <div class="inclusive-item">
                  <i class="fas fa-check"></i>
                  <label for="Covid -19 Test Fees">Covid -19 Test Fees</label>
                </div>
                <div class="inclusive-item">
                  <i class="fas fa-check"></i>
                  <label for="Local Taxes">Local Taxes</label>
                </div>
                <div class="inclusive-item">
                  <i class="fas fa-check"></i>
                  <label for="Meals &amp; Soft Drinks"
                    >Meals &amp; Soft Drinks</label
                  >
                </div>
                <div class="inclusive-item">
                  <i class="fas fa-check"></i>
                  <label for="Guiding &amp; service fee"
                    >Guiding &amp; service fee</label
                  >
                </div>
              </div>
            </div>
            <div class="right">
              <label for="Trip Overview" class="my-title">Exclusives</label>
              <hr class="myhr" />
              <div class="inclusive-body">
                <div class="inclusive-item">
                  <i class="fas fa-times"></i>
                  <label for="Airline tickets">Airline tickets</label>
                </div>
                <div class="inclusive-item">
                  <i class="fas fa-times"></i>
                  <label for="Visa Fees">Visa Fees</label>
                </div>
                <div class="inclusive-item">
                  <i class="fas fa-times"></i>
                  <label for="Travel insurance">Travel insurance</label>
                </div>
              </div>
            </div>
            <div class="right">
              <label for="Trip Overview" class="my-title">Requirements</label>
              <hr class="myhr" />
              <div class="inclusive-body">
                <div class="inclusive-item">
                  <label for="National ID(Rwandans)"
                    >National ID(Rwandans)</label
                  >
                </div>
                <div class="inclusive-item">
                  <label for="Passport(Foreigners)">Passport(Foreigners)</label>
                </div>
              </div>
            </div>
          </div>
          <div
            class="inclusives-footer jc-center"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <button class="mybtn">Book Now</button>
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
          <div class="package-item">
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
                <label for="Nyungwe National Park" class="package-title"
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
                    >Explore <i class="mdi mdi-arrow-right"></i
                  ></router-link>
                </div>
              </div>
            </div>
          </div>
          <div class="package-item">
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
                <label for="Volcanoes National Park" class="package-title"
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
                    >Explore <i class="mdi mdi-arrow-right"></i
                  ></router-link>
                </div>
              </div>
            </div>
          </div>
          <div class="package-item">
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
                <label for="Twin Lakes" class="package-title">Twin Lakes</label>
              </div>
              <hr />
              <div class="content-footer">
                <div class="money">
                  <label for="Amount">$1400</label>
                </div>
                <div class="book">
                  <router-link to="/book/1" class="book-btn"
                    >Explore <i class="mdi mdi-arrow-right"></i
                  ></router-link>
                </div>
              </div>
            </div>
          </div>
          <div class="package-item">
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
          </div>
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
