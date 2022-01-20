<template>
  <div class="AdminLogin">
    <loading
      :active.sync="isLoading"
      :can-cancel="true"
      :on-cancel="onCancel"
      :color="color"
      :is-full-page="fullPage"
    ></loading>
    <clientHeader />
    <div class="all-content">
      <div class="login">
        <div class="all">
          <div class="center">
            <div class="title">Admin Login</div>
          </div>
          <form class="form">
            <div class="form-body">
              <div class="form-group">
                <label for="">Email:</label>
                <input
                  type="email"
                  name="Email"
                  id=""
                  placeholder="Email"
                  v-model="user.email"
                />
              </div>
              <div class="form-group">
                <label for="">Password:</label>
                <div class="pass">
                  <input
                    :type="!showPassword ? 'password' : 'text'"
                    name="nom"
                    id=""
                    placeholder="Password"
                    v-model="user.password"
                  />
                  <i
                    class="fa fa-eye-slash"
                    v-if="showPassword"
                    @click="showPassword = false"
                  ></i>
                  <i class="fa fa-eye" v-else @click="showPassword = true"></i>
                </div>
              </div>
              <div class="form-group">
                <input
                  type="submit"
                  value="Sign In"
                  class="mybtn"
                  @click.prevent="loginNow()"
                />
              </div>
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
  name: "AdminLogin",
  data() {
    return {
      isLoading: false,
      fullPage: true,
      color: "#015b0a",
      showPassword: false,
      user: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
    loginNow() {
      this.isLoading = true;
      if (this.user.email != "" && this.user.password != "") {
        this.$store
          .dispatch("ADMIN_LOGIN", this.user)
          .then((response) => {
            if (response.data.status == "ok") {
              this.$notify({
                group: "status",
                title: "Important message",
                text: response.data.message,
                type: "success",
              });
              this.$adminLogin(response.data.user, response.data.user_token);
              this.isLoading = false;
            } else {
              this.$notify({
                group: "status",
                title: "Important message",
                text: response.data.message,
                type: "warn",
              });
              this.isLoading = false;
            }
          })
          .catch((error) => {
            console.error({
              error,
            });
            this.isLoading = false;
          });
      } else {
        this.$notify({
          group: "status",
          title: "Important message",
          text: "Please fill all fields",
          type: "error",
        });
        this.isLoading = false;
      }
    },
  },
};
</script>

<style lang="scss" scoped>
$maingreen: #015b0a;
$maintragreen: #015b0a21;
.AdminLogin {
  .all-content {
    width: 99.1vw;
    overflow: hidden;
    @media screen and (max-width: 900px) {
      width: 100vw;
    }
    .login {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 5rem;
      justify-content: center;
      .all {
        // border: 1px #000000b0 solid;
        border-radius: 4px;
        width: 25vw;
        padding: 1rem 2rem;
        margin-bottom: 3rem;
        background: #fcfcfc;
        @media only screen and(max-width: 1200px) {
          width: 35vw;
        }
        @media only screen and(max-width: 900px) {
          width: 50vw;
        }
        @media only screen and(max-width: 700px) {
          width: 60vw;
        }
        @media only screen and(max-width: 550px) {
          width: 80vw;
          padding: 1rem;
        }
        @media only screen and(max-width: 400px) {
          width: 90vw;
        }
        @media only screen and(max-width: 300px) {
          width: 95vw;
        }
        .title {
          margin: 2rem 0;
          font-size: 1.15rem;
          text-align: center;
          @media only screen and(max-width: 900px) {
            margin: 1rem 1rem;
          }
          @media only screen and(max-width: 400px) {
            font-size: 1rem;
          }
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
              textarea {
                font-size: 0.8rem;
                border: none;
                outline: none;
              }
              input[type="text"],
              input[type="email"],
              input[type="password"],
              input[type="number"],
              input[type="date"],
              textarea {
                width: 100%;
                background: #e6e6e6;
                border-bottom: 1px #a3a3a3 solid;
                padding: 0.5rem 0.75rem 0.5rem 0.5rem;
              }
              .Nationalitys {
                display: flex;
                column-gap: 1rem;
              }
              .pass {
                position: relative;
                input {
                  position: relative;
                }
                i {
                  position: absolute;
                  right: 10px;
                  top: 10px;
                  cursor: pointer;
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
