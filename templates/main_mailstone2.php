<main>
    <div class="cds-container container">
            <div class="cd" v-for="album in albums">
            <img :src="album.poster" alt="" />
            <h3>{{album.title}}</h3>
            <span class="author">{{album.author}}</span>
            <span class="year">{{album.year}}</span>
            </div>
        </div>
</main>
        </div>

        <!-- con cdn funziona, con import no -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="../src/app.js"></script>
    </body>
</html>