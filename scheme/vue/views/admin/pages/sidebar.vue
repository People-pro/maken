<template>
  <div class="Sidebar">
    <div class="nav">
      <div class="brand">
        <img src="/assets/images/logo.png" alt="" srcset="" />
      </div>
      <ul class="nav-items">
        <li>
          <router-link to="/admin" class="nav-item"
            ><i class="fa fa-tachometer-alt"></i
            >&nbsp;&nbsp;Dashboard</router-link
          >
        </li>
        <li>
          <router-link to="/admin/attractions" class="nav-item"
            ><i class="fa fa-tree"></i>&nbsp;&nbsp;Attractions</router-link
          >
        </li>
        <li>
          <router-link to="/admin/packages" class="nav-item"
            ><i class="fas fa-list"></i>&nbsp;&nbsp;Packages</router-link
          >
        </li>
        <li>
          <router-link to="/admin/trips" class="nav-item"
            ><i class="fas fa-bus"></i>&nbsp;&nbsp;Trips</router-link
          >
        </li>
        <li>
          <router-link to="/admin/gallery" class="nav-item"
            ><i class="fa fa-images"></i>&nbsp;&nbsp;Gallery</router-link
          >
        </li>
        <li>
          <router-link to="/admin/slides" class="nav-item"
            ><i class="fa fa-images"></i>&nbsp;&nbsp;Slides</router-link
          >
        </li>
        <li>
          <router-link to="/admin/partners" class="nav-item"
            ><i class="fa fa-handshake"></i>&nbsp;&nbsp;Partners</router-link
          >
        </li>
        <li>
          <router-link to="/admin/users" class="nav-item"
            ><i class="fa fa-users"></i>&nbsp;&nbsp;Users</router-link
          >
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "Sidebar",
  method: {},
  mounted() {
    if (this.$loggedAdmin()) {
    } else {
      this.$adminlogout();
    }
  },
};
</script>

<style lang="scss" scoped>
$orange: #ef6203;
$green: #044914;
.Sidebar {
  .nav {
    width: 200px;
    background: $green;
    height: 100vh;
    overflow: hidden;
    box-shadow: 0px 5px 20px 10px #f0f0f0;
    @media only screen and(max-width: 600px) {
      width: 100px;
    }
    .brand {
      position: relative;
      padding: 1rem 1.5rem;
      background: #fff;
      display: flex;
      justify-content: center;
      // inner shadow
      box-shadow: inset 0px 0px 1000px 0px #0000003d;
      img {
        width: 80%;
      }
    }
    .nav-items {
      display: flex;
      flex-direction: column;
      li {
        display: block;
        border-bottom: 1px #eeeeee3a solid;
        .nav-item {
          background: none;
          border: none;
          padding: 0.75rem 1rem;
          color: white;
          display: block;
          font-size: 0.85rem;
          width: 100%;
          text-align: left;
          cursor: pointer;
          &.router-link-exact-active,
          &:hover {
            background: $orange;
          }
        }
      }
    }
  }
}
</style>
