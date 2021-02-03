// import Vue from "vue";
// import axios from "axios";

let app = new Vue({
  el: "#app",
  data: {
    albums: [],
  },
  mounted() {
    axios.get("../templates/db_Api.php").then((response) => {
      let data = response.data;
      this.albums = data;
    });
  },
});
