<template>
  <div class="clientHeader">
    <div class="header-content">
      <section class="topbar">
        <router-link to="/" class="left">
          <img
            src="/assets/images/logo.png"
            alt="Maken Africa Safaris"
            srcset=""
          />
        </router-link>
        <div class="right">
          <div class="navbar">
            <ul class="nav-links">
              <li class="link-item">
                <router-link to="/" class="link-a">Home</router-link>
                <router-link to="/services" class="link-a"
                  >Services</router-link
                >
                <router-link to="/packages" class="link-a"
                  >Packages</router-link
                >
                <router-link to="/gallery" class="link-a">Gallery</router-link>
                <router-link to="/trips" class="link-a">Trips</router-link>
                <router-link to="/aboutus" class="link-a">About Us</router-link>
                <router-link to="/contact" class="link-a"
                  >Contact Us</router-link
                >
              </li>
            </ul>
          </div>
        </div>

        <button class="lines" @click="leftbar = true">
          <i class="fas fa-bars"></i>
        </button>
      </section>
      <section
        class="sidebar"
        data-aos="fade-right"
        data-aos-duration="1000"
        v-if="leftbar"
      >
        <div class="sidebar-body">
          <div class="sidebar-header">
            <label for="Maken Africa Safaris">Maken Africa Safaris</label>
            <button @click="leftbar = false">&times;</button>
          </div>
          <ul class="side-links">
            <li><router-link class="side-link" to="/">Home</router-link></li>
            <li>
              <router-link class="side-link" to="/services"
                >Services</router-link
              >
            </li>
            <li>
              <router-link class="side-link" to="/packages"
                >Packages</router-link
              >
            </li>
            <li>
              <router-link class="side-link" to="/gallery">Gallery</router-link>
            </li>
            <li>
              <router-link class="side-link" to="/trips">Trips</router-link>
            </li>
            <li>
              <router-link class="side-link" to="/aboutus"
                >About Us</router-link
              >
            </li>
            <li>
              <router-link class="side-link" to="/contact"
                >Contact Us</router-link
              >
            </li>
          </ul>
        </div>
      </section>
    </div>

    <a
      href="https://api.whatsapp.com/send/?phone=250788232465"
      target="_blank"
      class="help"
    >
      <i class="fas fa-comment-alt"></i>
    </a>
  </div>
</template>

<script>
export default {
  name: "clientHeader",
  data() {
    return {
      leftbar: false,
    };
  },
  methods: {},
  mounted() {},
};
</script>

<style lang="scss" scoped>
$orange: #ef6203;
$green: #044914;
* {
  transition: all 0.4s ease-in;
}
.clientHeader {
  width: 100vw;
  overflow: hidden;
  background: white;
  box-shadow: 0px 1px 10px 1px #eee;
  .header-content {
    .topbar {
      display: flex;
      justify-content: space-between;
      width: 100%;
      padding: 1rem 15rem;
      align-items: center;
      @media screen and (max-width: 1700px) {
        padding: 1rem 10rem;
      }
      @media screen and (max-width: 1300px) {
        padding: 1rem 5rem;
      }
      @media screen and (max-width: 900px) {
        padding: 1rem 2rem;
      }
      .left {
        img {
          width: 100px;
          @media screen and (max-width: 1200px) {
            width: 80px;
          }
        }
      }
      .right {
        margin-bottom: -10px;
        @media screen and (max-width: 750px) {
          display: none;
        }
        .navbar {
          .nav-links {
            list-style: none;
            display: flex;
            .link-item {
              .link-a {
                padding: 0.8rem 1rem;
                color: black;
                font-weight: 400;
                position: relative;
                @media screen and (max-width: 1000px) {
                  padding: 0.8rem 0.5rem;
                  font-size: 0.9rem;
                }
                &:hover {
                  color: $orange;
                }
                &:hover:after {
                  color: $orange;
                  transform: scaleX(1);
                  transform-origin: bottom left;
                }
                &.router-link-exact-active {
                  color: $orange;
                }
                &:after {
                  content: "";
                  position: absolute;
                  width: 100%;
                  transform: scaleX(0);
                  height: 1px;
                  bottom: 0;
                  left: 0;
                  background-color: $orange;
                  transform-origin: bottom right;
                  transition: transform 0.4s ease-in-out;
                }
              }
            }
          }
        }
      }
      .lines {
        background: none;
        font-size: 1.25rem;
        border: none;
        outline: none;
        background: #ff6f0f;
        padding: 0 10px;
        box-shadow: 0px 0px 5px 10px #00000025 inset;
        color: white;
        border-radius: 3px;
        cursor: pointer;
        @media screen and (min-width: 750px) {
          display: none;
        }
      }
    }
    .sidebar {
      position: fixed;
      z-index: 99;
      background: white;
      width: 50vw;
      height: 100vh;
      top: 0;
      left: 0;
      box-shadow: 5px 0px 10px 10px #0000005b;
      @media screen and (min-width: 750px) {
        display: none;
      }
      @media screen and (max-width: 450px) {
        width: 80vw;
      }
      .sidebar-body {
        display: flex;
        flex-direction: column;
        .sidebar-header {
          display: flex;
          justify-content: space-between;
          padding: 1rem;
          align-items: center;
          label {
            font-size: 0.9rem;
          }
          button {
            background: none;
            font-size: 1.25rem;
            border: none;
            outline: none;
            background: #eee;
            padding: 0 10px;
            box-shadow: 0px 0px 5px 10px #00000025 inset;
            cursor: pointer;
          }
        }
        .side-links {
          list-style: none;
          display: flex;
          flex-direction: column;
          li {
            display: block;
            .side-link {
              padding: 0.5rem 1rem;
              color: #00051b;
              font-size: 0.9rem;
              display: block;
              border-bottom: 1px #eee solid;
              &:hover {
                background: $orange;
                color: white;
              }
              &.router-link-exact-active {
                background: $orange;
                color: white;
              }
            }
          }
        }
      }
    }
  }
}
</style>
