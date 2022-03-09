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
            :to="'/viewGallery/' + item.id"
            class="gallery-item"
            :style="
              'background: url(\'/assets/uploaded/' +
              item.image +
              '\');' +
              ' background-size: cover; background-position: center;'
            "
            v-for="item in items"
            :key="item.id"
          >
            <div class="gallery-body">
              <label :for="item.title" class="gallery-title">{{
                item.title
              }}</label>
              <label for="trip date" class="date"
                >{{ item.day }}, {{ item.date }}</label
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
      items: null,
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
    getItems() {
      this.isLoading = true;
      this.$store.dispatch("GET_GALLERY").then((response) => {
        this.items = response.data;
        this.items.forEach((item) => {
          let newDate = new Date(item.date);
          item.day = newDate.toLocaleString("default", { weekday: "long" });
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
