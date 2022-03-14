<template>
  <div class="BookForm" v-if="mypackage">
    <loading
      :active.sync="isLoading"
      :can-cancel="true"
      :on-cancel="onCancel"
      :color="color"
      :is-full-page="fullPage"
    ></loading>
    <div class="modal-content">
      <div class="modal-dialog">
        <div class="modal-header">
          <div class="close" @click="closeModal()">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="modal-body">
          <form>
            <label for="Booking Form" class="form-title"
              >Fill the form to book with us.</label
            >
            <div class="form-body">
              <div class="form-group">
                <label for="Fullname">Fullname:</label>
                <input type="text" v-model="item.fullname" />
              </div>
              <div class="form-group">
                <label for="Phone Number">Phone Number:</label>
                <input type="text" v-model="item.phone" />
              </div>
              <div class="form-group">
                <label for="Email">Email:</label>
                <input type="text" v-model="item.email" />
              </div>
              <div class="form-group">
                <label for="Number Of People">Number Of People:</label>
                <input
                  type="number"
                  :max="mypackage.max_people"
                  min="1"
                  v-model="item.people"
                />
              </div>
              <div class="form-group">
                <label for="Date">Date:</label>
                <input type="date" v-model="item.date" />
              </div>
              <div class="form-group">
                <label for="Nationality">Residence:</label>
                <select v-model="item.nationality">
                  <option value="">Select</option>
                  <option>Rwandan</option>
                  <option>Foreigner</option>
                </select>
              </div>
              <div class="form-group">
                <label for="Any additional Details"
                  >Any Additional Details:</label
                >
                <textarea rows="5" v-model="item.details"></textarea>
              </div>
              <div class="terms">
                <input type="checkbox" v-model="terms" />
                <p>
                  I Agree with Maken Africa Safaris
                  <a href="/terms">Terms and Conditions</a>
                </p>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="submit" @click="bookNow()">Book Now</button>
          <button class="close" @click="closeModal()">Close</button>
        </div>
      </div>
    </div>
    <Done v-if="bookDone" @closeDone="closeModal()" />
  </div>
</template>

<script>
export default {
  name: "BookForm",
  props: ["action", "mypackage"],
  data() {
    return {
      isLoading: false,
      color: "#072e4d",
      fullPage: true,
      bookDone: false,
      terms: false,
      item: {
        fullname: "",
        phone: "",
        email: "",
        people: 1,
        nationality: "",
        date: "",
      },
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
    closeModal() {
      this.bookDone = false;
      this.$emit("closeModal");
    },
    bookNow() {
      if (this.terms) {
        this.isLoading = true;
        if (
          this.item.fullname != "" &&
          this.item.phone != "" &&
          this.item.email != "" &&
          this.item.people != "" &&
          this.item.nationality != "" &&
          this.item.date != ""
        ) {
          this.item.package_id = this.mypackage.id;
          this.$store
            .dispatch("BOOK_PACKAGE", this.item)
            .then((response) => {
              if (response.data.status == "ok") {
                this.$notify({
                  group: "status",
                  title: "Important message",
                  text: response.data.message,
                  type: "success",
                });
                this.$emit("closeModal");
              } else {
                this.$notify({
                  group: "status",
                  title: "Important message",
                  text: response.data.message,
                  type: "error",
                });
              }
            })
            .catch((error) => {
              console.error({
                error,
              });
            });
          this.isLoading = false;
        } else {
          this.$notify({
            group: "status",
            title: "Important message",
            text: "Please fill all fields",
            type: "error",
          });
        }
      } else {
        this.$notify({
          group: "status",
          title: "Important message",
          text: "You have to first agree with the terms and conditions",
          type: "error",
        });
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.BookForm {
  $orange: #ef6203;
  $green: #044914;
  .modal-content {
    background: #000000ea;
    width: 100vw;
    height: 100vh;
    top: 0;
    left: 0;
    z-index: 99999;
    overflow: hidden;
    overflow-y: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    flex-wrap: wrap;
    .modal-dialog {
      background: #fff;
      width: 30%;
      border-radius: 5px;
      margin: 2rem 0;
      @media screen and (max-width: 1400px) {
        width: 40%;
      }
      @media screen and (max-width: 1200px) {
        width: 50%;
      }
      @media screen and (max-width: 1000px) {
        width: 60%;
      }
      @media screen and (max-width: 800px) {
        width: 70%;
      }
      @media screen and (max-width: 600px) {
        width: 80%;
      }
      @media screen and (max-width: 500px) {
        width: 90%;
      }
      .modal-header {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1rem;
        border-bottom: 1px #eee solid;
        .close {
          background: #b40000;
          display: flex;
          justify-content: center;
          align-items: center;
          width: 35px;
          height: 35px;
          padding: 0.5rem;
          border-radius: 50%;
          font-size: 1.2rem;
          cursor: pointer;
          i {
            color: #fff;
          }
        }
      }
      .modal-body {
        padding: 1rem 2rem;
        @media screen and (max-width: 500px) {
          padding: 0.7rem 1rem;
        }
        form {
          .form-title {
            font-size: 0.9rem;
            margin-bottom: 2rem;
            display: block;
          }
          .form-body {
            display: flex;
            flex-direction: column;
            row-gap: 1rem;
            .form-group {
              display: flex;
              flex-direction: column;
              row-gap: 0.5rem;
              label {
                font-size: 0.8rem;
              }
              input,
              textarea,
              select {
                font-size: 0.8rem;
                border: none;
                outline: none;
              }
              input[type="text"],
              input[type="number"],
              input[type="date"],
              textarea,
              select {
                width: 100%;
                background: #e6e6e6;
                border-bottom: 1px #a3a3a3 solid;
                padding: 0.5rem 0.75rem 0.5rem 0.5rem;
              }
              .Nationalitys {
                display: flex;
                column-gap: 1rem;
              }
            }
          }
        }
      }
      .modal-footer {
        border-top: 1px #eee solid;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        button {
          padding: 10px;
          font-size: 0.95rem;
          color: white;
          border: none;
          outline: none;
          border-radius: 2px;
          cursor: pointer;
          &.submit {
            background: $green;
          }
          &.close {
            background: #ad0000;
          }
        }
      }
    }
  }
  .terms {
    display: flex;
    align-items: center;
    column-gap: 10px;
    a {
      color: $orange;
      font-weight: 600;
    }
  }
}
</style>
