<template>
  <div class="home">
    <clientHeader />
    <loading
      :active.sync="isLoading"
      :can-cancel="true"
      :on-cancel="onCancel"
      :color="color"
      :is-full-page="fullPage"
    ></loading>
    <div class="all-content">
      <div class="jumbo2">
        <div class="jumbo-section">
          <hooper :settings="jumboSettings" class="jumboimg-body">
            <slide class="jumboimg-item">
              <img
                src="/assets/uploaded/bg/bg1.jpg"
                class="img"
                alt=""
                srcset=""
              />
            </slide>
            <slide class="jumboimg-item">
              <img
                src="/assets/uploaded/bg/bg2.jpg"
                class="img"
                alt=""
                srcset=""
              />
            </slide>
            <slide class="jumboimg-item">
              <img
                src="/assets/uploaded/bg/bg3.jpg"
                class="img"
                alt=""
                srcset=""
              />
            </slide>
            <slide class="jumboimg-item">
              <img
                src="/assets/uploaded/bg/bg4.jpg"
                class="img"
                alt=""
                srcset=""
              />
            </slide>
          </hooper>
          <div class="jumbo-content">
            <div class="jumbo-body">
              <h2 data-aos="fade-left" data-aos-duration="1000">
                Maken Africa Safaris welcomes all CHOGM 2022 delicates to the
                warm heart of Africa,Rwanda
              </h2>
              <p
                class="txt-shad-sm"
                data-aos="fade-left"
                data-aos-duration="1000"
              >
                Contact us for Exciting City tours, Insightful museums visits,
                Adventurous National parks excursions, and much more!
              </p>
              <div
                class="btns"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="1000"
              >
                <router-link to="/packages" class="mybtn"
                  >View Packages</router-link
                >
                <router-link to="/contact" class="mybtn"
                  >Contact Us</router-link
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="jumbo">
        <div class="jumbo-content">
          <div class="jumbo-body">
            <h2 data-aos="fade-left" data-aos-duration="1000">
              Welcome To The Leading Travel Agency In The Heart Of Africa.
            </h2>
            <p
              class="txt-shad-sm"
              data-aos="fade-left"
              data-aos-duration="1000"
            >
              We pride ourselves in offering world-class service and convenient
              travel solutions in the regions we operate.
            </p>
            <div
              class="btns"
              data-aos="fade-up"
              data-aos-duration="1000"
              data-aos-delay="1000"
            >
              <router-link to="/packages" class="mybtn"
                >View Packages</router-link
              >
              <router-link to="/contact" class="mybtn">Contact Us</router-link>
            </div>
          </div>
        </div>
      </div> -->
      <div class="about" data-aos="fade-up" data-aos-duration="1000">
        <div class="left">
          <label for="Maken Africa Safaris" class="my-title"
            >Maken Africa Safaris</label
          >
          <hr class="myhr" />
          <p class="desc">Awaken To A Different World.</p>
          <router-link to="/aboutus" class="mybtn-o">About Us</router-link>
        </div>
        <div class="right">
          <p>
            <strong>Maken Africa Safaris</strong> has been providing an
            unrivalled full spectrum of business and leisure travel services
            that our satisfied customers will certainly attest to.
          </p>

          <p>
            We pride ourselves in offering world class services such is hotel
            reservation,internship,training,tour guiding,tour package and
            planning tour itinerary. Our well experienced consultants offer
            clients with most economical, practical and convenient travel
            solutions.
          </p>
        </div>
      </div>
      <div class="services">
        <div class="header" data-aos="fade-up" data-aos-duration="1000">
          <label for="Our Services" class="my-title txt-shad-sm"
            >Our Services</label
          >
          <hr class="myhr" />
          <p class="desc txt-shad-sm">
            Pick your destination and we'll handle the rest.
          </p>
        </div>
        <div class="services-body" data-aos="fade-up" data-aos-duration="1000">
          <div class="service-item">
            <div class="content">
              <div class="icon-widget">
                <i class="fas fa-list-ul"></i>
              </div>
              <label for="Tour Package" class="service-title"
                >Tour Package</label
              >
              <div class="desc-content">
                <p>
                  we plan and give yo u a full package according to what you
                  need.
                </p>
              </div>
            </div>
          </div>
          <div class="service-item">
            <div class="content">
              <div class="icon-widget">
                <i class="fas fa-hiking"></i>
              </div>
              <label for="Planning tour itinerary" class="service-title"
                >Planning Tour Itinerary</label
              >
              <div class="desc-content">
                <p>giving what customers needs on tourism information.</p>
              </div>
            </div>
          </div>
          <div class="service-item">
            <div class="content">
              <div class="icon-widget">
                <i class="fas fa-bed"></i>
              </div>
              <label for="Hotel Reservation" class="service-title"
                >Hotel Reservation</label
              >
              <div class="desc-content">
                <p>
                  we assist tourist in different corn of the world to give them
                  best accommodation in bound and out bound.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="services-footer jc-center"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          <router-link to="/services" class="mybtn">View More</router-link>
        </div>
      </div>
      <div class="packages">
        <div class="header" data-aos="fade-up" data-aos-duration="1000">
          <label for="Our Popular Packages" class="my-title"
            >Our Popular Packages</label
          >
          <hr class="myhr" />
          <p class="desc">
            Book a package with us and let's bring adventure to your table.
          </p>
        </div>
        <div class="packages-body" data-aos="fade-up" data-aos-duration="1000">
          <router-link
            :to="'/viewPackage/' + item.id"
            class="package-item"
            v-for="item in packages"
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
                  <router-link :to="'/viewPackage/' + item.id" class="book-btn"
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
      <div class="whyus">
        <div class="left" data-aos="fade-up" data-aos-duration="1000">
          <label for="Maken Africa Safaris" class="my-title"
            >Why Book with Maken Africa Safaris</label
          >
          <hr class="myhr" />
          <p class="desc" data-aos="fade-up" data-aos-duration="1000">
            Travel undertaken for corporate travel is an investment, which
            companies quantify in their cost of business. The needs of business
            travelers involves greater uncertainty and urgency as compared to
            leisure travelers, as such, a large measure of flexibility, speed
            and accuracy is required to ensure that their requests are met in an
            appropriate manner.
          </p>
        </div>
        <div class="right">
          <div class="why-item">
            <label for="Orientation">Orientation</label>
            <p>You, our Customer are our First Priority.</p>
          </div>
          <div class="why-item">
            <label for="Staff">Staff</label>
            <p>Clear understanding of your needs.</p>
          </div>
          <div class="why-item">
            <label for="Experience">Experience</label>
            <p>Efficient, Expert and Reliable Service.</p>
          </div>
          <div class="why-item">
            <label for="Network">Network</label>
            <p>Best Value, Convenient, Optimal connections.</p>
          </div>
          <div class="why-item">
            <label for="Location">Location</label>
            <p>Expedited and Comfortable service delivery.</p>
          </div>
        </div>
      </div>
      <div class="trips">
        <div class="header" data-aos="fade-up" data-aos-duration="1000">
          <label for="Upcoming Trips" class="my-title">Upcoming Trips</label>
          <hr class="myhr" />
          <p class="desc">Come join us and lets explore beyond expectations.</p>
        </div>
        <div class="trips-body" data-aos="fade-up" data-aos-duration="1000">
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
      <div class="testimonials">
        <div class="testimonials-content">
          <div class="header" data-aos="fade-up" data-aos-duration="1000">
            <label for="Testimonials" class="my-title">Testimonial</label>
            <hr class="myhr" />
            <p class="desc">What our clients said about us.</p>
          </div>
          <div class="testimonials-body">
            <div class="test-text">
              <div
                class="text-item"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <p>
                  Our tour of Akagera was a wonderful experience, and a large
                  element of that was owing to the arrangements provided by
                  <strong>Maken Africa Safaris</strong>. The logistics went like
                  clockwork: we were met on time by your drivers and guides on
                  every occasion - and we appreciated the welcoming bowl of
                  fruit in our hotel rooms.
                </p>
                <label for="Travel in Rwanda"> - Katrina jihad</label>
              </div>
              <div
                class="text-item"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <p>
                  I would like to thank the
                  <strong>Maken Africa Safaris</strong> for the excelent service
                  provided. The reservation process was excellent and flexible.
                  The tour to Nyungwe in Rwanda was perfect. Pick-up occurred at
                  the right time, the guide was waiting for me across the border
                  when I arrived. Saïd was an excellent guide and made the tour
                  worthwhile.
                </p>
                <label for="visit Rwanda"> - Alidah Muhammed</label>
              </div>
            </div>
            <div class="partners" data-aos="fade-up" data-aos-duration="1000">
              <hooper :settings="partnersSettings" class="partners-body">
                <slide class="partners-item">
                  <img src="/assets/images/RDB_logo.png" alt="" />
                </slide>
                <slide class="partners-item">
                  <img src="/assets/images/logo_qdrnqo.png" alt="" />
                </slide>
              </hooper>
            </div>
          </div>
        </div>
      </div>
    </div>
    <clientFooter />
  </div>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      isLoading: false,
      color: "#072e4d",
      fullPage: true,
      partnersSettings: {
        itemsToShow: 3,
        centerMode: true,
        autoPlay: false,
        wheelControl: false,
        trimWhiteSpace: true,
        infiniteScroll: false,
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
      jumboSettings: {
        itemsToShow: 1,
        centerMode: true,
        autoPlay: true,
        wheelControl: false,
        trimWhiteSpace: true,
        infiniteScroll: true,
        playSpeed: 4000,
        transition: 1000,
        hoverPause: false,
      },
      packages: [],
      trips: [],
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
    getPackages() {
      this.isLoading = true;
      this.$store.dispatch("GET_POPULAR_PACKAGES").then((response) => {
        this.packages = response.data["packages"];
        this.packages.forEach((item) => {
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
    this.getPackages();
  },
};
</script>

<style lang="scss">
$orange: #ef6203;
$green: #044914;
.home {
  width: 99.1vw;
  overflow: hidden;
  @media screen and (max-width: 900px) {
    width: 100vw;
  }
  .jumbo {
    height: calc(100vh - 30px);
    background: url("/assets/images/pe2.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    position: relative;
    .jumbo-content {
      width: 100%;
      height: 100%;
      background: #000000;
      background: linear-gradient(90deg, #000000a4 0%, #13860300 73%);
      display: flex;
      align-items: center;
      .jumbo-body {
        width: 60%;
        padding: 0 15rem;
        @media screen and (max-width: 1700px) {
          padding: 0 10rem;
          width: 70%;
        }
        @media screen and (max-width: 1300px) {
          padding: 0 5rem;
          width: 80%;
        }
        @media screen and (max-width: 900px) {
          width: 100%;
          padding: 0 2rem;
        }
        h2 {
          text-shadow: 0 4px 2px #0000007e;
          color: white;
          font-size: 3rem;
          line-height: 1.25em;
          font-weight: 700;
          @media screen and (max-width: 900px) {
            font-size: 2.5rem;
          }
          @media screen and (max-width: 800px) {
            font-size: 2.25rem;
          }
          @media screen and (max-width: 700px) {
            font-size: 2rem;
          }
          @media screen and (max-width: 600px) {
            font-size: 1.5rem;
          }
        }
        p {
          color: #fff;
          font-weight: 400;
          font-size: 1.25rem;
          text-shadow: 0 4px 2px #0000007e;
          @media screen and (max-width: 800px) {
            font-size: 1rem;
          }
          @media screen and (max-width: 600px) {
            font-size: 0.8rem;
          }
        }
        .btns {
          display: flex;
          column-gap: 1rem;
          padding: 2rem 0;
          @media screen and (max-width: 500px) {
            width: 100%;
            padding: 1rem 0;
            flex-direction: column;
            row-gap: 1rem;
            .btn {
              display: block;
            }
          }
        }
      }
    }
  }
  .jumbo2 {
    position: relative;
    height: calc(100vh - 100px);
    @media screen and (max-width: 1700px) {
      height: 80vh;
    }
    @media screen and (max-width: 1300px) {
      height: 70vh;
    }
    @media screen and (max-width: 900px) {
      height: 55vh;
    }
    .jumbo-section {
      height: 100%;
      width: 100%;
      position: relative;
      .jumboimg-body {
        height: 100%;
        width: 100%;
        .img {
          height: 100%;
          width: 100%;
          object-fit: cover;
        }
      }
    }
    .jumbo-content {
      width: 100%;
      height: 100%;
      background: #000000;
      background: linear-gradient(90deg, #000000a4 0%, #13860300 73%);
      display: flex;
      align-items: center;
      position: absolute;
      top: 0;
      left: 0;
      .jumbo-body {
        width: 60%;
        padding: 0 15rem;
        @media screen and (max-width: 1700px) {
          padding: 0 10rem;
          width: 70%;
        }
        @media screen and (max-width: 1300px) {
          padding: 0 5rem;
          width: 80%;
        }
        @media screen and (max-width: 900px) {
          width: 100%;
          padding: 0 2rem;
        }
        h2 {
          text-shadow: 0 4px 2px #0000007e;
          color: white;
          font-size: 3rem;
          line-height: 1.25em;
          font-weight: 700;
          @media screen and (max-width: 900px) {
            font-size: 2.5rem;
          }
          @media screen and (max-width: 800px) {
            font-size: 2.25rem;
          }
          @media screen and (max-width: 700px) {
            font-size: 2rem;
          }
          @media screen and (max-width: 600px) {
            font-size: 1.5rem;
          }
        }
        p {
          color: #fff;
          font-weight: 400;
          font-size: 1.25rem;
          text-shadow: 0 4px 2px #0000007e;
          @media screen and (max-width: 800px) {
            font-size: 1rem;
          }
          @media screen and (max-width: 600px) {
            font-size: 0.8rem;
          }
        }
        .btns {
          display: flex;
          column-gap: 1rem;
          padding: 2rem 0;
          @media screen and (max-width: 500px) {
            width: 100%;
            padding: 1rem 0;
            flex-direction: column;
            row-gap: 1rem;
            .btn {
              display: block;
            }
          }
        }
      }
    }
  }
  .about {
    padding: 4rem 15rem;
    display: grid;
    grid-template-columns: 50% 50%;
    background: #fff;
    @media screen and (max-width: 1700px) {
      padding: 4rem 10rem;
    }
    @media screen and (max-width: 1300px) {
      padding: 3rem 5rem;
    }
    @media screen and (max-width: 900px) {
      padding: 2rem;
      grid-template-columns: 100%;
    }
    .left {
      @media screen and (max-width: 900px) {
        padding-bottom: 1.5rem;
        margin-bottom: 1.5rem;
        border-bottom: 1px #eee solid;
      }
      .myhr {
        border-top: 3px $orange solid;
        width: 70px;
        margin-bottom: 1rem;
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
    .right {
      p {
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
  }
  .services {
    position: relative;
    background: url("/assets/images/bg2.jpg");
    background-size: cover;
    background-attachment: fixed;
    padding: 4rem 15rem;
    box-shadow: inset 0 0 0 2000px #0000004d;
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
      .my-title {
        color: #fff;
      }
      .desc {
        color: #fff;
        @media screen and (max-width: 1200px) {
          font-size: 1rem;
        }
        @media screen and (max-width: 900px) {
          font-size: 0.8rem;
        }
      }
    }
    .services-body {
      display: grid;
      grid-template-columns: 26.6% 26.6% 26.6%;
      grid-column-gap: 10%;
      grid-row-gap: 2rem;
      margin: 2rem 0;
      @media screen and (max-width: 1500px) {
        grid-template-columns: 30% 30% 30%;
        grid-column-gap: 3%;
        margin: 0;
      }
      @media screen and (max-width: 1100px) {
        grid-template-columns: 47.5% 47.5%;
        grid-column-gap: 3%;
      }
      @media screen and (max-width: 700px) {
        grid-template-columns: 100%;
        grid-column-gap: 3%;
      }
      .service-item {
        background: #ffffffd7;
        padding: 2rem;
        border-radius: 1rem;
        // box-shadow: 0px 0px 10px 3px #1d1d1d48;
        transition: all 0.4s ease-in-out;
        &:hover,
        &:focus {
          transform: scale(1.2, 1.2);
        }
        @media screen and (max-width: 1300px) {
          padding: 1rem;
        }
        .content {
          display: flex;
          flex-direction: column;
          row-gap: 2rem;
          .icon-widget {
            display: flex;
            justify-content: center;
            align-items: center;
            align-self: center;
            position: relative;
            border: 2px $orange solid;
            border-radius: 50%;
            width: 80px;
            height: 80px;
            @media screen and (max-width: 1300px) {
              width: 60px;
              height: 60px;
            }
            i {
              font-size: 2rem;
              padding: 1rem;
              display: inline-block;
              color: $orange;
              @media screen and (max-width: 1300px) {
                font-size: 1.5rem;
                padding: 0.75rem;
              }
            }
          }
          .service-title {
            font-size: 1.5rem;
            font-weight: 600;
            text-transform: capitalize;
            text-align: center;
            @media screen and (max-width: 1300px) {
              font-size: 1.25rem;
            }
          }
          .desc-content {
            font-size: 0.9rem;
            color: #1d1d1d;
            @media screen and (max-width: 1300px) {
              font-size: 0.8rem;
            }
          }
        }
      }
    }
    .services-footer {
      padding: 2rem 0;
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
  .whyus {
    padding: 4rem 15rem;
    display: grid;
    grid-template-columns: 50% 50%;
    background: $orange;
    @media screen and (max-width: 1700px) {
      padding: 4rem 10rem;
    }
    @media screen and (max-width: 1300px) {
      padding: 3rem 5rem;
    }
    @media screen and (max-width: 900px) {
      padding: 2rem;
      grid-template-columns: 100%;
    }
    .left {
      padding-right: 3rem;
      @media screen and (max-width: 900px) {
        padding-right: 0rem;
      }
      .my-title {
        color: white;
      }
      .myhr {
        border-top: 3px $orange solid;
        width: 70px;
        margin-bottom: 1rem;
      }
      .desc {
        color: #fff;
        font-weight: 400;
        font-size: 1.1rem;
        @media screen and (max-width: 1200px) {
          font-size: 1rem;
        }
        @media screen and (max-width: 900px) {
          font-size: 0.8rem;
          padding-bottom: 1rem;
        }
      }
    }
    .right {
      display: grid;
      grid-template-columns: 33.6% 33.6% 33.6%;
      grid-gap: 1rem;
      grid-row-gap: 1rem;
      @media screen and (max-width: 1100px) {
        grid-template-columns: 48% 48%;
      }
      @media screen and (max-width: 600px) {
        grid-template-columns: 100%;
      }
      .why-item {
        display: flex;
        flex-direction: column;
        row-gap: 1rem;
        padding: 1rem;
        background-color: white;
        box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.171);
        border-radius: 10px;
        @media screen and (max-width: 600px) {
          padding: 0.8rem;
        }
        label {
          color: $orange;
          font-weight: 600;
          font-size: 1.1rem;
        }
        p {
          color: #525252;
          font-weight: 400;
          font-size: 0.9rem;
          @media screen and (max-width: 600px) {
            font-size: 0.8rem;
          }
        }
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
  .testimonials {
    position: relative;
    background: url("/assets/images/gor1.jpg");
    background-size: cover;
    padding-bottom: 10rem;
    .testimonials-content {
      width: 80%;
      background-color: white;
      padding: 4rem 15rem;
      @media screen and (max-width: 1700px) {
        padding: 4rem 10rem;
      }
      @media screen and (max-width: 1300px) {
        padding: 3rem 5rem;
        width: 90%;
      }
      @media screen and (max-width: 900px) {
        padding: 2rem;
        width: 95%;
      }
      .header {
        display: flex;
        align-items: center;
        flex-direction: column;
        width: 100%;
        margin-bottom: 2rem;
      }
      .testimonials-body {
        .test-text {
          display: grid;
          grid-template-columns: 50% 50%;
          grid-row-gap: 1rem;
          @media screen and (max-width: 550px) {
            grid-template-columns: 100%;
            &:nth-child(0) {
              border-bottom: 1px #eee solid;
            }
          }
          .text-item {
            padding-right: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            row-gap: 1rem;
            flex-direction: column;
            @media screen and (max-width: 550px) {
              padding-right: 0rem;
            }
            p {
              font-size: 0.9rem;
              font-weight: 500;
              color: #1d1d1d;
              text-align: center;
              @media screen and (max-width: 900px) {
                font-size: 0.8rem;
              }
            }
            label {
              color: $orange;
              text-align: center;
              font-weight: 600;
              font-style: italic;
              @media screen and (max-width: 900px) {
                font-size: 0.9rem;
              }
            }
          }
        }
        .partners {
          margin-top: 4rem;
          .partners-body {
            align-items: center !important;
            .partners-item {
              padding: 1.5rem;
              img {
                width: 80%;
              }
            }
          }
        }
      }
    }
  }
}
</style>
