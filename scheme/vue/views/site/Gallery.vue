<template>
  <div class="Gallery">
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
              Gallery
            </h2>
            <p
              class="txt-shad-sm intro-desc"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              What we've been up to.
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
  name: "Gallery",
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
.Gallery {
  width: 99.1vw;
  overflow: hidden;
  @media screen and (max-width: 900px) {
    width: 100vw;
  }
  .intro {
    background: url("/assets/images/bg1.jpg");
    background-size: cover;
    background-position: center bottom;
    background-attachment: fixed;
    position: relative;
    .intro-content {
      padding: 3rem 0;
      width: 100%;
      height: 100%;
      background: #000000a4;
      display: flex;
      align-items: center;
      justify-content: center;
      .intro-body {
        width: 100%;
        padding: 0 15rem;
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
    }
  }
}
</style>
