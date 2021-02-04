<main>
    <div class="cds-container container">
            <div class="cd" v-for="album in filteredGenre">
            <img :src="album.poster" alt=""/>
            <h3>{{album.title}}</h3>
            <span class="author">{{album.author}}</span>
            <span class="year">{{album.year}}</span>
            </div>
        </div>
</main>
        </div>

        <script src="../dist/js/app.js"></script>
    </body>
</html>