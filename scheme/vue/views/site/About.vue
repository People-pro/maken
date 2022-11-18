<template>
  <div class="About">
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
              About Us
            </h2>
            <p
              class="txt-shad-sm intro-desc"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              Who we are.
            </p>
          </div>
        </div>
      </div>
      <div class="about-content">
        <div class="about-item">
          <div class="my-title">WHO WE ARE</div>
          <hr class="myhr" />
          <div class="about-body">
            <p>
              <strong>Maken Africa Safaris</strong> has been providing an
              unrivalled full spectrum of leisure and business travel services
              that our satisfied customers will certainly attest to.
            </p>

            <p>
              We pride ourselves on offering world class customer service. Our
              specialties include: Tour Packages, Guest Itinerary, Hotel
              Reservations, Guiding, Training/Internships and Team building
              excursions. Our experienced travel consultants offer clients the
              most economical, practical and convenient travel solutions.
            </p>
            <p>
              <strong>Maken Africa Safaris</strong> was incorporated in 2019 and
              has established a reputation in the industry for having strong and
              long lasting relationships with both our clients and suppliers.
            </p>
          </div>
        </div>
      </div>
      <div class="missions-widget">
        <div class="mis-body">
          <div class="mission">
            <h2 class="my-title">Our Mission</h2>
            <hr class="myhr" />
            <p>
              To fulfill your Group's and private tour dreams and mission in new
              and Exciting way, and do it better than envisioned. We aim to make
              every safari Exhilarating and energizing for everyone involved.
            </p>
          </div>
          <div class="vision">
            <h2 class="my-title">Our Vision</h2>
            <hr class="myhr" />
            <p>
              To lead travel agency in the travel industry by providing
              efficient and effective Services to our customers.
            </p>
            <p>
              To maintain a high class travel services at reasonable prices
              through consistent Leadership controlled growth and excellent
              commitment.
            </p>
          </div>
          <div class="vision">
            <h2 class="my-title">Our Strengths</h2>
            <hr class="myhr" />
            <p>
              To lead travel agency in the travel industry by providing
              efficient and effective Services to our customers.
            </p>
            <p>
              To maintain a high class travel services at reasonable prices
              through consistent Leadership controlled growth and excellent
              commitment.
            </p>
          </div>
        </div>
      </div>
      <div class="about-content">
        <div class="about-item">
          <div class="my-title">MEET OUR TRAVEL EXPERTS</div>
          <hr class="myhr" />
          <div class="about-body">
            <label for="Trust Our Experience" class="item-title"
              >Trust Our Experience</label
            >
            <p>
              Our qualified team has over two decades of tourism experience. We
              ensure that our clients are satisfied and a successful
              continuation of business is maintained.
            </p>

            <p>
              Our team has several years of experience working within a business
              travel or airline reservation/ticketing environment. On-going
              training and orientation is a key objective to ensuring the
              excellent level of service is maintained year in and year out.
            </p>
          </div>
          <div class="about-body">
            <label for="Customer Orientation" class="item-title"
              >Customer Orientation</label
            >
            <p>
              Although we have grown in all aspects of our operations, our motto
              of “customer satisfaction first” is paramount. This philosophy
              ensures that our customers are given the best-personalized and
              unparalleled professional service.
            </p>
          </div>
        </div>
      </div>
    </div>
    <clientFooter />
  </div>
</template>

<script>
export default {
  name: "About",
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
.About {
  width: 99.1vw;
  overflow: hidden;
  @media screen and (max-width: 900px) {
    width: 100vw;
  }
  .about-content {
    padding: 2rem 15rem;
    @media screen and (max-width: 1700px) {
      padding: 4rem 10rem;
    }
    @media screen and (max-width: 1300px) {
      padding: 3rem 5rem;
    }
    @media screen and (max-width: 900px) {
      padding: 2rem;
      font-size: 0.75rem;
    }
    label {
      font-weight: 600;
      font-size: 1.25rem;
      line-height: 3rem;
      @media screen and (max-width: 900px) {
        line-height: 2rem;
        font-size: 1rem;
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
  .missions-widget {
    background: url("/assets/images/pe2.jpg");
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    box-shadow: inset 0 0 0 2000px #0000004d;
    padding: 2rem 15rem;
    @media screen and (max-width: 1700px) {
      padding: 4rem 10rem;
    }
    @media screen and (max-width: 1300px) {
      padding: 3rem 5rem;
    }
    @media screen and (max-width: 900px) {
      padding: 2rem;
      font-size: 0.75rem;
    }
    .mis-body {
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
        grid-column-gap: 0%;
      }

      .mission {
        background: #ffffffd7;
        box-shadow: 0px 0px 10px 3px #1d1d1d48;
        border-radius: 1rem;
        padding: 2rem;
        @media screen and (max-width: 700px) {
          padding: 1.5rem;
        }
      }
      .vision {
        background: #ffffffd7;
        box-shadow: 0px 0px 10px 3px #1d1d1d48;
        border-radius: 1rem;
        padding: 2rem;
        position: relative;
        left: -1rem;
      }
    }
  }
}
</style>
