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
          <div class="my-title">Who we are</div>
          <hr class="myhr" />
          <div class="about-body">
            <p>
              For 2 years <strong>Maken Africa Safaris</strong> has been
              providing an unrivalled full spectrum of business and leisure
              travel services that our satisfied customers will certainly attest
              to.
            </p>

            <p>
              We pride ourselves in offering world class service in the regions
              we operate. Our well experienced consultants offer clients with
              most economical, practical and convenient travel solutions.
            </p>
            <p>
              <strong>Maken Africa Safaris</strong> was incorporated on May 2018
              and is ready to receive numerous awards and recognitions since
              date. We have established a reputation in the industry for having
              strong and long lasting relationships with both our suppliers and
              clients
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
        grid-column-gap: 3%;
      }

      .mission {
        background: #ffffffd7;
        box-shadow: 0px 0px 10px 3px #1d1d1d48;
        border-radius: 1rem;
        padding: 2rem;
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
