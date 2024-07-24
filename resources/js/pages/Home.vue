<template>
    <div class="row">
      Welcome, this page will show to all users
    </div>
    <div class="content">
      <div class="box" id="box1">Box 1</div>
      <div class="box" id="box2">Box 2</div>
      <div class="box" id="box3">Box 3</div>
      <div class="box" id="box4">Box 4</div>
    </div>
  </template>

  <script>
  export default {
    name: "Home",
    data() {
      return {
        //
      }
    },
    created() {
      //
    },
    methods: {}
  }
  </script>

  <style scoped>
  .row {
    font-size: 24px;
    text-align: center;
    margin: 20px 0;
  }

  .content {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: 20px;
  }

  .box {
    width: 100px;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-weight: bold;
    border-radius: 8px;
  }

  #box1 {
    background-color: #FF5733; /* Red */
  }

  #box2 {
    background-color: #33FF57; /* Green */
  }

  #box3 {
    background-color: #3357FF; /* Blue */
  }

  #box4 {
    background-color: #FF33A1; /* Pink */
  }
  </style>

