<body>
    <div class="wrapper" id="app">
        <header>
          <div class="container">
            <img class="logo" src="../dist/img/logo.png" alt="logo"/>
          <!-- BONUS -->
          <select name="Genere" id="genere" v-model="select" @change="">
            <option value="">All</option>
            <option v-for="genere in genre" :value= "genere">{{genere}}</option>
          </select>
          </div>
        </header>
        