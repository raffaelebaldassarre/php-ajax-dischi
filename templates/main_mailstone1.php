<main>
        <div class="cds-container container">
        <?php foreach ($database as $value) { ?>
            <div class="cd">
              <img src= <?php echo $value['poster']?> alt="" />
              <h3><?php echo $value['title']?></h3>
              <span class="author"><?php echo $value['author']?></span>
              <span class="year"><?php echo $value['year']?></span>
            </div>
        <?php } ?>
</main>
      </div>

</body>
</html>