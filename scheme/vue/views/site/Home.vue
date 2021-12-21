<template>
  <div class="rsl-home">
    <clientHeader />
    
    <clientFooter />
  </div>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      isLoading: false,
      color: "#072e4d",
      fullPage: true,
    };
  },
  methods: {
    onCancel() {
      console.log();
    },
  },
  mounted() {
    let vm = this;
  },
};
</script>

<style lang="scss">
</style>
