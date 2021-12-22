<template>
  <div class="clientFooter">
    <div class="footer-content">
      <div class="left">
        <img src="/assets/images/logo.png" alt="" srcset="" />
        <p>
          Our vision is to maintain a high class travel services at reasonable
          prices through consistent Leadership controlled growth and excellent
          commitment
        </p>
      </div>
      <div class="middle">
        <label for="Quick Links"> Quick Links</label>
        <ul class="navs">
          <li><router-link to="/" class="nav-item">Home</router-link></li>
          <li>
            <router-link to="/services" class="nav-item">Services</router-link>
          </li>
          <li>
            <router-link to="/packages" class="nav-item">Packages</router-link>
          </li>
          <li>
            <router-link to="/gallery" class="nav-item">Gallery</router-link>
          </li>
          <li><router-link to="/trips" class="nav-item">Trips</router-link></li>
          <li>
            <router-link to="/aboutus" class="nav-item">About Us</router-link>
          </li>
          <li>
            <router-link to="/contact" class="nav-item">Contact Us</router-link>
          </li>
        </ul>
      </div>
      <div class="right">
        <label for="contact us">Reach Us Through</label>
        <ul>
          <li><i class="fa fa-phone"></i> +250 785 848 669</li>
          <li><i class="fa fa-envelope"></i> makenafricasafaris@gmail.com</li>
        </ul>
        <div class="socials">
          <a
            href="https://www.facebook.com/makensafaris/?ref=page_internal"
            target="_blank"
            ><i class="fab fa-facebook"></i
          ></a>
          <a
            href="https://www.instagram.com/maken_africa_safaris_rw/"
            target="_blank"
            ><i class="fab fa-instagram"></i
          ></a>
          <a
            href="https://www.youtube.com/channel/UCwchHGXb5vMSeHcwEEYLwWA/featured"
            target="_blank"
            ><i class="fab fa-youtube"></i
          ></a>
        </div>
      </div>
    </div>
    <div class="copyright">
      <p>
        Copyright &copy; <strong>Maken Africa Safaris</strong> 2021 | Developed
        by
        <a href="">Omega</a>
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: "clientFooter",
};
</script>

<style lang="scss" scoped>
$orange: #ef6203;
$green: #044914;
.clientFooter {
  .footer-content {
    width: 99.1vw;
    overflow: hidden;
    background: #1d1d1d;
    padding: 3rem 15rem;
    align-items: flex-start;
    display: grid;
    grid-template-columns: 33% 33% 33%;
    @media screen and (max-width: 1700px) {
      padding: 3rem 10rem;
    }
    @media screen and (max-width: 1300px) {
      padding: 3rem 5rem;
    }
    @media screen and (max-width: 900px) {
      padding: 2rem 3rem;
      width: 100vw;
    }
    .left {
      img {
        width: 150px;
      }
      p {
        font-size: 0.9rem;
        color: white;
        width: 70%;
        margin-top: 1rem;
      }
    }
    .middle {
      display: flex;
      flex-direction: column;
      row-gap: 1rem;
      label {
        font-weight: 600;
        font-size: 1.2rem;
        color: #fff;
      }
      ul {
        list-style: none;
        line-height: 2;
        .nav-item {
          color: white;
          font-size: 0.9rem;
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
    .right {
      display: flex;
      flex-direction: column;
      row-gap: 0.2rem;
      label {
        font-weight: 600;
        font-size: 1.2rem;
        color: #fff;
      }
      ul {
        list-style: none;
        font-size: 0.9rem;
        color: #fff;
        line-height: 2;
        i {
          color: $orange;
          margin-right: 0.5rem;
        }
      }
      .socials {
        display: flex;
        align-items: center;
        font-size: 1.5rem;
        column-gap: 1rem;
        a {
          color: #fff;
          &:hover {
            color: $orange;
          }
        }
      }
    }
  }
  .copyright {
    padding: 1rem 0;
    display: flex;
    justify-content: center;
    background: #1d1d1d;
    border-top: 1px #3b3b3b dashed;
    p {
      color: white;
      font-weight: 200;
      font-size: 0.9rem;
      strong {
        text-transform: uppercase;
      }
      a {
        color: $orange;
        font-weight: 500;
      }
    }
  }
}
</style>
