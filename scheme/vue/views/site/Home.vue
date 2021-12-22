<template>
  <div class="home">
    <clientHeader />
    <div class="all-content">
      <div class="jumbo">
        <div class="jumbo-content">
          <div class="jumbo-body">
            <h2 data-aos="fade-left" data-aos-duration="2000">
              Welcome To The Leading Travel Agency In The Heart Of Africa.
            </h2>
            <p
              class="txt-shad-sm"
              data-aos="fade-left"
              data-aos-duration="2000"
            >
              We pride ourselves in offering world-class service and convenient
              travel solutions in the regions we operate.
            </p>
            <div
              class="btns"
              data-aos="fade-up"
              data-aos-duration="2000"
              data-aos-delay="1000"
            >
              <router-link to="/packages" class="mybtn"
                >View Packages</router-link
              >
              <router-link to="/contact" class="mybtn">Contact Us</router-link>
            </div>
          </div>
        </div>
      </div>
      <div class="about" data-aos="fade-up" data-aos-duration="2000">
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
            For 2 years Maken Africa Safari has been providing an unrivalled
            full spectrum of business and leisure travel services that our
            satisfied customers will certainly attest to.
          </p>
          <p>
            We pride ourselves in offering world class service in the regions we
            operate. Our well experienced consultants offer clients with most
            economical, practical and convenient travel solutions.
          </p>
        </div>
      </div>
      <div class="services">
        <div class="header" data-aos="fade-up" data-aos-duration="2000">
          <label for="Our Services" class="my-title txt-shad-sm"
            >Our Services</label
          >
          <hr class="myhr" />
          <p class="desc txt-shad-sm">
            Pick your destination and we'll handle the rest.
          </p>
        </div>
        <div class="services-body" data-aos="fade-up" data-aos-duration="2000">
          <div class="service-item">
            <div class="content">
              <div class="icon-widget">
                <i class="fas fa-plane"></i>
              </div>
              <label for="Travel - Corporate And Leisure" class="service-title"
                >Travel - Corporate And Leisure</label
              >
              <div class="desc-content">
                <p>Domestic and International ticketing.</p>
                <p>
                  planning which encompasses visa processing at a nominal fee
                  and advice on other Immigration requirements.
                </p>
                <p>
                  Meet and Assist services provided upon request at reasonable
                  charges.
                </p>
                <p>Hotel bookings, both local and international.</p>
                <p>
                  Ground transportation including airport transfers on request.
                </p>
              </div>
            </div>
          </div>
          <div class="service-item">
            <div class="content">
              <div class="icon-widget">
                <i class="fas fa-leaf"></i>
              </div>
              <label for="Safaris And Tours" class="service-title"
                >Safaris And Tours</label
              >
              <div class="desc-content">
                <p>
                  Wildlife safaris within East Africa and other African
                  destinations.
                </p>
                <p>
                  Tour and Holiday planning for both Inbound and Outbound travel
                  for Individuals, Groups or Families.
                </p>
                <p>Adventure packages / Private camping safaris.</p>
                <p>
                  We can tailor make packages to suit your needs and interests;
                  and to help you explore and experience the best White water
                  rafting, Students and family packages, hand gliding, Horse
                  Riding, Helicopter Adventure tours.
                </p>
              </div>
            </div>
          </div>
          <div class="service-item">
            <div class="content">
              <div class="icon-widget">
                <i class="fas fa-tree"></i>
              </div>
              <label
                for="Safaris And Incentives, Corporate Deals &amp; Airline Negotiations"
                class="service-title"
                >Incentives, Corporate Deals &amp; Airline Negotiations</label
              >
              <div class="desc-content">
                <p>
                  Having worked with Multinational Companies and several
                  airlines, Maken Africa Safaris has been able to negotiate with
                  supplier's incentives, corporate deals and corporate frequent
                  flyer programs which lead to savings for the organization in
                  terms of pricing, excess baggage and many other added value
                  products from the supplier.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="services-footer jc-center"
          data-aos="fade-up"
          data-aos-duration="2000"
        >
          <router-link to="/services" class="mybtn">View More</router-link>
        </div>
      </div>
      <div class="packages">
        <div class="header" data-aos="fade-up" data-aos-duration="2000">
          <label for="Our Popular Packages" class="my-title"
            >Our Popular Packages</label
          >
          <hr class="myhr" />
          <p class="desc">
            Book a package with us and let's bring adventure to your table.
          </p>
        </div>
        <div class="packages-body" data-aos="fade-up" data-aos-duration="2000">
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
        </div>
        <div
          class="packages-footer jc-center"
          data-aos="fade-up"
          data-aos-duration="2000"
        >
          <router-link to="/packages" class="mybtn-o"
            >View More Packages</router-link
          >
        </div>
      </div>
      <div class="whyus" data-aos="fade-up" data-aos-duration="2000">
        <div class="left">
          <label for="Maken Africa Safaris" class="my-title"
            >Why Book with Maken Africa Safaris</label
          >
          <hr class="myhr" />
          <p class="desc">
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
        <div class="header" data-aos="fade-up" data-aos-duration="2000">
          <label for="Upcoming Trips" class="my-title">Upcoming Trips</label>
          <hr class="myhr" />
          <p class="desc">Come join us and lets explore beyond expectations.</p>
        </div>
        <div class="trips-body" data-aos="fade-up" data-aos-duration="2000">
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
          data-aos-duration="2000"
        >
          <router-link to="/trips" class="mybtn-o">View More Trips</router-link>
        </div>
      </div>
      <div class="testimonials">
        <div class="testimonials-content">
          <div class="header" data-aos="fade-up" data-aos-duration="2000">
            <label for="Testimonials" class="my-title">Testimonial</label>
            <hr class="myhr" />
            <p class="desc">What our clients said about us.</p>
          </div>
          <div class="testimonials-body">
            <div class="test-text" data-aos="fade-up" data-aos-duration="2000">
              <div class="text-item">
                <p>
                  Our tour of Akagera was a wonderful experience, and a large
                  element of that was owing to the arrangements provided by
                  <strong>Maken Africa Safaris</strong>. The logistics went like clockwork: we were met on
                  time by your drivers and guides on every occasion - and we
                  appreciated the welcoming bowl of fruit in our hotel rooms.
                </p>
                <label for="John Doe"> - John Doe</label>
              </div>
              <div class="text-item">
                <p>
                  I would like to thank the <strong>Maken Africa Safaris</strong> for the excelent
                  service provided. The reservation process was excellent and
                  flexible. The tour to Nyungwe in Rwanda was perfect.
                  Pick-up occurred at the right time, the guide was waiting for
                  me across the border when I arrived. Saïd was an excellent
                  guide and made the tour worthwhile.
                </p>
                <label for="Jane Smith"> - Jane Smith</label>
              </div>
            </div>
            <div class="partners" data-aos="fade-up" data-aos-duration="2000">
              <hooper :settings="partnersSettings" class="partners-body">
                <slide class="partners-item">
                  <img src="/assets/images/logo1.png" alt="" />
                </slide>
                <slide class="partners-item">
                  <img src="/assets/images/logo2.png" alt="" />
                </slide>
                <slide class="partners-item">
                  <img src="/assets/images/logo3.png" alt="" />
                </slide>
                <slide class="partners-item">
                  <img src="/assets/images/logo4.png" alt="" />
                </slide>
                <slide class="partners-item">
                  <img src="/assets/images/logo5.png" alt="" />
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
            itemsToShow: 2,
          },
          800: {
            itemsToShow: 2,
          },
          1000: {
            itemsToShow: 3,
          },
          1300: {
            itemsToShow: 4,
          },
          1600: {
            itemsToShow: 5,
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
.home {
  width: 99.1vw;
  overflow: hidden;
  @media screen and (max-width: 900px) {
    width: 100vw;
  }
  .jumbo {
    height: calc(100vh - 100px);
    background: url("/assets/images/bg1.jpg");
    background-size: cover;
    background-position: center bottom;
    background-attachment: fixed;
    position: relative;
    .jumbo-content {
      width: 100%;
      height: 100%;
      background: #000000;
      background: linear-gradient(90deg, #000000a4 0%, #13860300 53%);
      display: flex;
      align-items: center;
      .jumbo-body {
        width: 60%;
        padding: 0 15rem;
        @media screen and (max-width: 1700px) {
          padding: 0 10rem;
        }
        @media screen and (max-width: 1300px) {
          padding: 0 5rem;
        }
        h2 {
          text-shadow: 0 4px 2px #0000007e;
          color: white;
          font-size: 3rem;
          line-height: 1.25em;
          font-weight: 700;
        }
        p {
          color: #fff;
          font-weight: 400;
          font-size: 1.25rem;
          text-shadow: 0 4px 2px #0000007e;
        }
        .btns {
          display: flex;
          column-gap: 1rem;
          padding: 2rem 0;
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
    .left {
      .my-title {
        font-size: 2.2rem;
        font-weight: 500;
        line-height: 2;
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
      }
    }
    .right {
      p {
        color: #333333;
        font-weight: 400;
        font-size: 1.1rem;
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
      }
    }
    .services-body {
      display: grid;
      grid-template-columns: 26.6% 26.6% 26.6%;
      grid-gap: 10%;
      margin: 2rem 0;
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
            i {
              font-size: 2rem;
              padding: 1rem;
              display: inline-block;
              color: $orange;
            }
          }
          .service-title {
            font-size: 1.5rem;
            font-weight: 600;
            text-transform: capitalize;
            text-align: center;
          }
          .desc-content {
            font-size: 0.9rem;
            color: #1d1d1d;
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
    .header {
      display: flex;
      align-items: center;
      flex-direction: column;
      width: 100%;
    }
    .packages-body {
      display: grid;
      grid-template-columns: 23.5% 23.5% 23.5% 23.5%;
      grid-gap: 2%;
      margin: 2rem 0;
      .package-item {
        background: #fff;
        border-radius: 1.5rem;
        box-shadow: 0px 0px 10px 3px #4d4d4d2a;
        overflow: hidden;
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
            .package-title {
              color: #1d1d1d;
              font-weight: 500;
              font-size: 1.2rem;
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
    .left {
      padding-right: 3rem;
      .my-title {
        font-size: 2.2rem;
        font-weight: 500;
        line-height: 2;
        color: white;
      }
      .myhr {
        border-top: 3px $orange solid;
        width: 70px;
        margin-bottom: 1rem;
      }
      .desc {
        color: #eee;
        font-weight: 400;
        font-size: 1.1rem;
      }
    }
    .right {
      display: grid;
      grid-template-columns: 33.6% 33.6% 33.6%;
      grid-gap: 1rem;
      grid-row-gap: 1rem;
      .why-item {
        display: flex;
        flex-direction: column;
        row-gap: 1rem;
        padding: 1rem;
        background-color: white;
        box-shadow: 0px 0px 10px 3px rgba(0, 0, 0, 0.171);
        border-radius: 10px;
        label {
          color: $orange;
          font-weight: 600;
          font-size: 1.1rem;
        }
        p {
          color: #525252;
          font-weight: 400;
          font-size: 0.9rem;
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
    .header {
      display: flex;
      align-items: center;
      flex-direction: column;
      width: 100%;
    }
    .trips-body {
      display: grid;
      grid-template-columns: 23.5% 23.5% 23.5% 23.5%;
      grid-gap: 2%;
      margin: 2rem 0;
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
            .trip-title {
              color: #1d1d1d;
              font-weight: 500;
              font-size: 1.2rem;
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
          .text-item {
            padding-right: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            row-gap: 1rem;
            flex-direction: column;
            p {
              font-size: 0.9rem;
              font-weight: 500;
              color: #1d1d1d;
              text-align: center;
            }
            label {
              color: $orange;
              text-align: center;
              font-weight: 600;
              font-style: italic;
            }
          }
          &:nth-child(1) {
            border-radius: 1px #eee solid;
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
