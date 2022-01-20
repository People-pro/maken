<template>
  <div class="Logged">
    <h2 class="brand">{{ brand }}</h2>
    <div>
      <div
        class="logged-section"
        v-if="$loggedAdmin()"
        @click="showDrop = true"
        v-click-outside="hide"
      >
        <img
          :src="'/assets/images/avatar.png'"
          alt=""
          srcset=""
        />
        <!-- <label for="My Account">{{ $loggedAdmin().prenom }}</label> -->
      </div>
      <div class="logged-links" v-if="showDrop">
        <ul>
          <li>
            <router-link to="/admin/account" class="logged-item"
              ><span class="fa fa-user"></span> My Account</router-link
            >
          </li>
          <!-- <li>
            <router-link to="/" class="logged-item"
              ><span class="fa fa-cog"></span>Password</router-link
            >
          </li> -->
          <li>
            <button class="logged-item" @click="$adminlogout()">
              <span class="fa fa-power-off"></span>Logout
            </button>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
<script>
import ClickOutside from "vue-click-outside";
export default {
  name: "Logged",
  directives: {
    ClickOutside,
  },
  props: ["brand"],
  data() {
    return {
      showDrop: false,
      closeOnClickOutside: true,
    };
  },
  methods: {
    hide() {
      this.showDrop = false;
    },
  },
  nounted() {
    this.popupItem = this.$el;
  },
};
</script>
<style lang="scss" scoped>
.Logged {
  padding: 1rem;
  border-bottom: 1px #eee solid;
  width: 100%;
  display: flex;
  justify-content: space-between;
  .brand {
    font-size: 1rem;
    color: #2a2a2a;
  }

  .logged-section {
    display: flex;
    flex-direction: column;
    row-gap: 5px;
    align-items: center;
    cursor: pointer;
    img {
      height: 40px;
      width: 40px;
      border-radius: 50%;
      object-fit: cover;
    }
    label {
      color: #000;
      text-transform: capitalize;
      font-weight: 700;
    }
  }
  .logged-links {
    background: #fff;
    position: absolute;
    top: 73px;
    right: 5px;
    min-width: 60px;
    padding: 5px 1rem;
    border-radius: 0 0 1rem 1rem;
    box-shadow: 5px 15px 10px 10px #00000030;
    li {
      list-style: none;
      display: block;
      border-top: 1px rgba(255, 255, 255, 0.068) solid;
      .logged-item {
        padding: 0.5rem 1rem;
        color: #000;
        display: block;
        font-weight: 400;
        // background: #eef9fd;
        display: flex;
        align-items: center;
        background: none;
        outline: none;
        border: none;
        cursor: pointer;
        span {
          font-size: 0.75rem;
          margin-right: 0.5rem;
        }
      }
      &:hover {
        background: #eee;
      }
    }
  }
}
</style>
