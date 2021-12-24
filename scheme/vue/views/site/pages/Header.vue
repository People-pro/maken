<template>
  <div class="clientHeader">
    <div class="header-content">
      <section>
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
      </section>
    </div>
  </div>
</template>

<script>
export default {
  name: "clientHeader",
  data() {
    return {};
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
    section {
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
      .left {
        img {
          width: 100px;
        }
      }
      .right {
        .navbar {
          .nav-links {
            list-style: none;
            display: flex;
            .link-item {
              .link-a {
                padding: .8rem 1rem;
                color: black;
                font-weight: 400;
                position: relative;
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
    }
  }
}
</style>
