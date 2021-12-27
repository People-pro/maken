<template>
  <div class="Contact">
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
              Contact Us
            </h2>
            <p
              class="txt-shad-sm intro-desc"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              We are here for you, 24/7, to help you and reply within an hour.
            </p>
          </div>
        </div>
      </div>
      <div class="body">
        <div class="left">
          <h2 for="rsl title" class="">We are always here to help you</h2>
          <div class="indicator">- Reach Out to Us</div>
          <h2 for="rsl title" class="">Please fill out the contact form</h2>
          <div class="info">
            <div><b>Email: </b>info@makenafricasafaris.rw</div>
            <div><b>Phone: </b>(+250) 785 848 669</div>
            <div><b>Address: </b>RN15, Kigali, Rwanda</div>
          </div>
        </div>
        <div class="right">
          <form @submit.prevent="contactNow">
            <h2>Contact form</h2>
            <div class="form-group">
              <label for="names">Fullname:</label>
              <input
                type="text"
                name="fullname"
                v-model="contacts.fullname"
                id=""
                placeholder="fullname"
              />
            </div>
            <div class="form-group">
              <label for="names">Email Address:</label>
              <input
                type="text"
                name="email"
                id=""
                v-model="contacts.email"
                placeholder="email"
              />
            </div>
            <div class="form-group">
              <label for="names">Subject:</label>
              <input
                type="text"
                name="subject"
                id=""
                v-model="contacts.subject"
                placeholder="subject"
              />
            </div>
            <div class="form-group">
              <label for="names">Message:</label>
              <textarea
                name="message"
                id=""
                cols="30"
                rows="10"
                placeholder="message"
                v-model="contacts.message"
              ></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send" class="mybtn" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <clientFooter />
  </div>
</template>

<script>
export default {
  name: "Contact",
  data() {
    return {
      isLoading: false,
      color: "#072e4d",
      fullPage: true,
      contacts: {
        fullname: "",
        email: "",
        subject: "",
        message: "",
      },
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
    contactNow() {
      let vm = this;
      if (
        vm.contacts.fullname &&
        vm.contacts.email &&
        vm.contacts.subject &&
        vm.contacts.message
      ) {
        vm.isLoading = true;
        vm.$store
          .dispatch("CONTACT_NOW", vm.contacts)
          .then((response) => {
            if (response.data.status == "ok") {
              vm.$notify({
                group: "status",
                title: "Important message",
                text: response.data.message,
                type: "success",
              });
              vm.contacts.fullname = null;
              vm.contacts.email = null;
              vm.contacts.subject = null;
              vm.contacts.message = null;
              vm.isLoading = false;
            }
          })
          .catch((error) => {
            console.error({
              error,
            });
            vm.isLoading = false;
          });
      } else {
        vm.$notify({
          group: "status",
          title: "Warning message",
          text: "All fields are required",
          type: "warn",
        });
      }
    },
  },
  mounted() {},
};
</script>

<style lang="scss">
$orange: #ef6203;
$green: #044914;
.Contact {
  width: 99.1vw;
  overflow: hidden;
  @media screen and (max-width: 900px) {
    width: 100vw;
  }
  .body {
    display: grid;
    grid-template-columns: 45% 45%;
    padding: 3rem 15rem;
    @media screen and (max-width: 1700px) {
      padding: 4rem 10rem;
    }
    @media screen and (max-width: 1300px) {
      padding: 3rem 5rem;
    }
    @media screen and (max-width: 900px) {
      padding: 2rem;
    }
    .left {
      display: flex;
      flex-direction: column;
      row-gap: 1rem;
      .info {
        div {
          margin-bottom: 1rem;
          color: #000;
          b {
            font-weight: 500;
          }
        }
      }
    }
    .right {
      h2 {
        color: #000;
      }
      form {
        background: #ffffff;
        display: flex;
        flex-direction: column;
        row-gap: 2rem;
        padding: 1rem;
        border-radius: 3px;
        // box-shadow: 0px 0px 10px 4px #0000000a;
        label {
          color: #000;
        }
        .form-group {
          display: flex;
          flex-direction: column;
          row-gap: 1rem;
          input,
          textarea {
            padding: 0.75em;
            border: 1px #e2e2e2 solid;
            outline: none;
            border-radius: 3px;
            background: #eeeeee1e;
            color: #000;
          }
          input[type="submit"] {
            cursor: pointer;
            border: none;
            background: $orange;
            color: white;
            font-weight: 500;
          }
        }
      }
    }
    @media screen and (max-width: 900px) {
      display: grid;
      grid-template-columns: 96%;
      row-gap: 2%;
      margin-top: 2rem;
      margin-bottom: 3rem;
    }
  }
}
</style>
