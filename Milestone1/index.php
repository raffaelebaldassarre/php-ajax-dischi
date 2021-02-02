<?php 

require __DIR__ .'/dist/php_partials/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./dist/app.css">
</head>
<body>
    <div class="wrapper" id="app">
        <header>
          <div class="container">
            <img class="logo" src="./dist/img/logo.png" alt="logo"/>
          </div>
        </header>
        
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