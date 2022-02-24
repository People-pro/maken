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
              Our Services
            </h2>
            <p
              class="txt-shad-sm intro-desc"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              What We offer to our clients.
            </p>
          </div>
        </div>
      </div>
      <div class="services">
        <div class="header" data-aos="fade-up" data-aos-duration="1000">
          <!-- <label for="Our Services" class="my-title">Our Services</label> -->
          <hr class="myhr" />
          <p class="desc">Pick your destination and we'll handle the rest.</p>
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
          <div class="service-item">
            <div class="content">
              <div class="icon-widget">
                <i class="fa fa-users"></i>
              </div>
              <label for="Internship" class="service-title">Internship</label>
              <div class="desc-content">
                <p>
                  We help students with in colleges and universities to give
                  them professional and college internship.
                </p>
              </div>
            </div>
          </div>
          <div class="service-item">
            <div class="content">
              <div class="icon-widget">
                <i class="fas fa-chalkboard-teacher"></i>
              </div>
              <label for="Training" class="service-title">Training</label>
              <div class="desc-content">
                <p>we give chance to people who what to learn tourism.</p>
              </div>
            </div>
          </div>
          <div class="service-item">
            <div class="content">
              <div class="icon-widget">
                <i class="fas fa-hiking"></i>
              </div>
              <label for="Tour guiding" class="service-title"
                >Tour Guiding</label
              >
              <div class="desc-content">
                <p>
                  guiding our tourist to different destinations of the world.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonials">
        <div class="testimonials-content">
          <div class="header" data-aos="fade-up" data-aos-duration="1000">
            <label for="Testimonials" class="my-title">Testimonial</label>
            <hr class="myhr" />
            <p class="desc">What our clients said about our services.</p>
          </div>
          <div class="testimonials-body">
            <div class="test-text" data-aos="fade-up" data-aos-duration="1000">
              <div class="text-item">
                <p>
                  Our tour of Akagera was a wonderful experience, and a large
                  element of that was owing to the arrangements provided by
                  <strong>Maken Africa Safaris</strong>. The logistics went like
                  clockwork: we were met on time by your drivers and guides on
                  every occasion - and we appreciated the welcoming bowl of
                  fruit in our hotel rooms.
                </p>
                <label for="John Doe"> - John Doe</label>
              </div>
              <div class="text-item">
                <p>
                  I would like to thank the
                  <strong>Maken Africa Safaris</strong> for the excelent service
                  provided. The reservation process was excellent and flexible.
                  The tour to Nyungwe in Rwanda was perfect. Pick-up occurred at
                  the right time, the guide was waiting for me across the border
                  when I arrived. Saïd was an excellent guide and made the tour
                  worthwhile.
                </p>
                <label for="Jane Smith"> - Jane Smith</label>
              </div>
            </div>
            <div class="partners" data-aos="fade-up" data-aos-duration="1000">
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
.Services {
  width: 99.1vw;
  overflow: hidden;
  @media screen and (max-width: 900px) {
    width: 100vw;
  }
  .services {
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
      .my-title {
        color: #1d1d1d;
      }
      .desc {
        color: #1d1d1d;
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
        box-shadow: 0px 0px 10px 3px #1d1d1d13;
        transition: all 0.4s ease-in-out;
        // &:hover,
        // &:focus {
        //   transform: scale(1.2, 1.2);
        // }
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
