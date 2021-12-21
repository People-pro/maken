<template>
  <div id="app">
    <router-view />
    <notifications group="status" position="bottom right" :duration="5000" />

    <vue-confirm-dialog></vue-confirm-dialog>
    <div class="app-loader" v-if="$store.state.main_loader">
      <div class="loading-panel">
        <a-spin :spinning="true"></a-spin>
        <span class="text">Loading...</span>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
@import url("https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
* {
  font-family: Montserrat;
  outline: none;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.app-loader {
  position: fixed;
  z-index: 9999999999999999999999999;
  bottom: 20px;
  right: 25px;
  .loading-panel {
    width: 174px;
    display: flex;
    justify-content: center;
    background: #000;
    padding: 10px 13px;
    align-items: center;
    border: 1px solid #ddd;
    border-radius: 5px;
    .text {
      font-size: 19px;
      margin-left: 19px;
    }
  }
}
</style>
