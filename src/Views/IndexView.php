<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="static/css/main.css">
</head>
<body>

  <div class="header">
      <div class="container">
          <a href="/">Главная</a>
          <a href="game">Играть</a>
      </div>
  </div>

  <div class="main">
      <div class="container">
         <h1>Таблица рекордов</h1>
          <div class="table">
            <?php foreach ($array_records as $key => $value){ ?>
              <div class="row">
                  <div class="cell text-left"><?= $key; ?></div>
                  <div class="cell text-right"><?= $value; ?></div>
              </div>
            <?php } ?>
          </div>
      </div>
  </div>

  <div class="footer">
      <div class="container">

      </div>
  </div>



</body>
</html>
