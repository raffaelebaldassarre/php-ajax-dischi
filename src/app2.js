import Vue from "vue";
import axios from "axios";

let app = new Vue({
  el: "#app",
  data: {
    albums: [],
    select: "",
  },
  mounted() {
    this.selectGenre();
  },
  methods: {
    selectGenre() {
      axios.get("../templates/db_Api.php").then((response) => {
        let data = response.data;
        if (this.select == "All") {
          this.albums = data;
        } else {
          this.albums = data.filter((disco) => disco.genre === this.select);
        }
      });
    },
  },
  computed: {
    filteredGenre: function() {
      return this.albums.filter((albumsFilter) => {
        return albumsFilter.genre.match(this.select);
      });
    },
  },
});
