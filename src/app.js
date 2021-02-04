import Vue from "vue";
import axios from "axios";

let app = new Vue({
  el: "#app",
  data: {
    albums: [],
    genre: [],
    select: "",
  },
  mounted() {
    axios.get("../templates/db_Api.php").then((response) => {
      let data = response.data;
      this.albums = data;
      this.genre = [...new Set(data.map((item) => item.genre))];
    });
  },
  computed: {
    filteredGenre: function() {
      return this.albums.filter((albumsFilter) => {
        return albumsFilter.genre.includes(this.select);
      });
    },
  },
});
