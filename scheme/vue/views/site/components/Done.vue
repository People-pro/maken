<template>
  <div class="Done">
    <div class="modal-content">
      <div class="modal-dialog">
        <div class="modal-header">
          <div class="close" @click="closeModal()">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="modal-body">
          <p>
            Thanks for booking with us.<br />
            Our tourism consultant team will reach out to you in less than 24
            hours. Please be patient
          </p>
        </div>
        <div class="modal-footer">
          <p></p>
          <button class="close" @click="closeModal()">Close</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Done",
  methods: {
    closeModal() {
      this.$emit("closeDone");
    },
  },
};
</script>

<style lang="scss" scoped>
.Done {
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
    .modal-dialog {
      background: #fff;
      width: 30%;
      border-radius: 5px;
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
        p {
          font-size: 0.95rem;
          padding: 4rem 0;
          text-align: center;
          @media screen and (max-width: 600px) {
            padding: 2rem 0;
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
}
</style>
