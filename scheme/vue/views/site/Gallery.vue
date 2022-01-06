<template>
  <div class="Gallery">
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
      <div class="gallery-content">
        <div class="gallery-content-body">
          <router-link
            to="/viewGallery"
            class="gallery-item"
            style="
              background: url('/assets/images/pe2.jpg');
              background-size: cover;
              background-position: center;
            "
          >
            <div class="gallery-body">
              <label
                for="Our Trip To Nyungwe National Park"
                class="gallery-title"
                >Our Trip To Nyungwe National Park.</label
              >
              <label for="trip date" class="date"
                >Saturday, 18<sup>th</sup> December 2021</label
              >
            </div>
          </router-link>
          <router-link
            to="/viewGallery"
            class="gallery-item"
            style="
              background: url('/assets/images/pe3.jpg');
              background-size: cover;
              background-position: center;
            "
          >
            <div class="gallery-body">
              <label
                for="Our Trip To Akagera National Park"
                class="gallery-title"
                >Our Trip To Akagera National Park.</label
              >
              <label for="trip date" class="date"
                >Thursday, 11<sup>th</sup> November 2021</label
              >
            </div>
          </router-link>
          <router-link
            to="/viewGallery"
            class="gallery-item"
            style="
              background: url('/assets/images/pe4.jpg');
              background-size: cover;
              background-position: center;
            "
          >
            <div class="gallery-body">
              <label for="Our Trip To Fazenda" class="gallery-title"
                >Our Trip To Fazenda.</label
              >
              <label for="trip date" class="date"
                >Tuesday, 27<sup>th</sup> Octover 2020</label
              >
            </div>
          </router-link>
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
  .gallery-content {
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
    .gallery-content-body {
      display: grid;
      grid-template-columns: 30% 30% 30%;
      grid-column-gap: 3.333%;
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
      .gallery-item {
        height: 300px;
        border-radius: 0.5rem;
        overflow: hidden;
        .gallery-body {
          padding: 1rem;
          background: rgb(0, 0, 0);
          background: linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.8295693277310925) 0%,
            rgba(19, 134, 3, 0) 50%
          );
          height: 100%;
          display: flex;
          justify-content: flex-end;
          flex-direction: column;
          .gallery-title {
            color: white;
            font-weight: 600;
          }
          .date {
            color: #eee;
            font-weight: 400;
            font-size: 0.75rem;
          }
        }
      }
    }
  }
}
</style>
