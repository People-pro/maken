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
    <a
      href="https://api.whatsapp.com/send/?phone=250785848669"
      target="_blank"
      class="help"
    >
      <i class="fas fa-comment-alt"></i>
    </a>
  </div>
</template>

<style lang="scss">
@import url("https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
* {
  font-family: "Poppins", sans-serif;
  outline: none;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
$orange: #ef6203;
$green: #044914;
.help {
  position: fixed;
  bottom: 1.5rem;
  right: 1.5rem;
  padding: 1.1rem;
  background-color: $orange;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  outline: none;
  box-shadow: 0px 0px 10px 2px #0000004f;
  transition: all 0.4s ease-in-out;
  &:hover,
  &:focus {
    background: $green;
  }
  i {
    color: white;
    font-size: 2rem;
  }
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
.my-title {
  font-size: 2.2rem;
  font-weight: 500;
  line-height: 2;
  @media screen and (max-width: 900px) {
    font-size: 2rem;
  }
  @media screen and (max-width: 800px) {
    font-size: 1.8rem;
    line-height: 1.25;
    padding-bottom: 0.5rem;
  }
}
.intro-header {
  text-shadow: 0 4px 2px #0000007e;
  color: white;
  font-size: 4rem;
  line-height: 1.25em;
  font-weight: 700;
  text-align: center;
  @media screen and (max-width: 900px) {
    font-size: 3rem;
  }
  @media screen and (max-width: 800px) {
    font-size: 2.25rem;
    line-height: 1.25;
    padding-bottom: 0.5rem;
  }
}
.intro-desc {
  color: #fff;
  font-weight: 400;
  font-size: 1.25rem;
  text-shadow: 0 4px 2px #0000007e;
  text-align: center;
  @media screen and (max-width: 900px) {
    font-size: 1rem;
  }
  @media screen and (max-width: 800px) {
    font-size: .9rem;
  }
}
.myhr {
  border: none;
  border-top: 3px $orange solid;
  width: 70px;
  margin-bottom: 1rem;
}
.mybtn {
  padding: 0.8rem 1.5rem;
  border: none;
  color: white;
  background: $orange;
  border-radius: 3px;
  transition: all 0.7s ease-in-out;
  display: inline-block;
  &:hover,
  &:focus {
    box-shadow: inset 20em 3rem 0 0 $green;
    color: white;
  }
  @media screen and (max-width: 600px) {
    font-size: 0.8rem;
    padding: 0.6rem 1.2rem;
  }
}
.mybtn-o {
  padding: 0.8rem 1.5rem;
  border: none;
  color: $orange;
  border-radius: 3px;
  transition: all 0.7s ease-in-out;
  display: inline-block;
  border: 2px $orange solid;
  background-color: #fff;
  &:hover,
  &:focus {
    box-shadow: inset 20em 3rem 0 0 $orange;
    color: white;
  }
  @media screen and (max-width: 600px) {
    font-size: 0.8rem;
    padding: 0.6rem 1.2rem;
  }
}
.txt-shad {
  text-shadow: 0 4px 2px #0000007e;
}
.txt-shad-sm {
  text-shadow: 0 2px 2px #0000007e;
}
.d-flex {
  display: flex;
}
.jc-center {
  display: flex;
  justify-content: center;
}
.ai-center {
  display: flex;
  align-items: center;
}
</style>
