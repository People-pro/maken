<script>
export default {
  data() {
    return {};
  },
  mounted() {},
  methods: {
    $startLoader() {
      let vm = this;
      vm.$store.state.isLoading = true;
    },
    $stopLoader() {
      let vm = this;
      vm.$store.state.isLoading = false;
    },

    $adminlogout() {
      let vm = this;
      vm.$localStorage.remove("maken_admin_access_token");
      vm.$localStorage.remove("maken_admin");
      vm.$router.push({ name: "AdminLogin" });
    },
    $loggedAdmin() {
      let vm = this;
      if (vm.$localStorage.get("maken_admin")) {
        let admin = JSON.parse(vm.$localStorage.get("maken_admin"));
        return admin;
      } else {
        return false;
      }
    },
    $loggedAdminToken() {
      let vm = this;
      if (vm.$localStorage.get("maken_admin_access_token")) {
        let admin_access_token = vm.$localStorage.get(
          "maken_admin_access_token"
        );
        return admin_access_token;
      } else {
        return false;
      }
    },
    $adminLogin(user, token) {
      this.$localStorage.set("maken_admin_access_token", token);
      this.$localStorage.set("maken_admin", JSON.stringify(user));
      this.$router.push({ name: "Dashboard" });
    },
    $clientLogout() {
      let vm = this;
      vm.$localStorage.remove("maken_client_access_token");
      vm.$localStorage.remove("maken_client");
      vm.$notify({
        group: "status",
        type: "success",
        title: "Important",
        text: "You are logged out now",
      });
      document.location.reload();
    },
    $loggedClient() {
      let vm = this;
      if (vm.$localStorage.get("maken_client")) {
        let client = JSON.parse(vm.$localStorage.get("client"));
        return client;
      } else {
        return false;
      }
    },
    $loggedClientToken() {
      let vm = this;
      if (vm.$localStorage.get("maken_client")) {
        let client_access_token = vm.$localStorage.get("client_access_token");
        return client_access_token;
      } else {
        return false;
      }
    },
    $isFieldsValidated(form, rules) {
      let vm = this;
      let is_error = false;
      Object.keys(rules).forEach((key, index) => {
        if (rules[key].run(form[key])) {
          let error_message = rules[key].run(form[key]);
          if (error_message) {
            if (!is_error) {
              vm.$notify({
                group: "status",
                type: "warn",
                title: "OOPS!!!",
                text: error_message,
              });
            }
            is_error = true;
          }
        }
      });
      return !is_error;
    },
  },
};
</script>
