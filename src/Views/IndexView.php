<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="static/css/main.css">
</head>
<body>
  <div class="main">
      <div class="container">
         <h1>Обновленный Оксфордский опросник счастья (OHI, Oxford Happiness Inventory)</h1>
          <div>
            <h3> Инструкция</h3>
            <p>
             Ниже вы видите группы утверждений, касающихся личного счастья. Прочитайте, пожалуйста, все 4 утверждения в каждой группе и затем определите, какое из них лучше всего описывает ваши ощущения в последнее время, в том числе и сегодня. Обведите в кружок букву (а, б, в или г) напротив выбранного вами утверждения.
            </p>
            
            <div class="login-form">
              <form action="rez" method="POST">
              <ol>


              <?php
                  $i = 1;
                  foreach ($array_records as $key => $value) { ?>
                 

                <!-- <?= $key+1 ?> -->
                <li>
                  <ul>
                    <li><input type="radio" name="v<?= $key+1 ?>" value="a">
                      <?= $value[0] ?>
                    </li>
                    <li><input type="radio" name="v<?= $key+1 ?>" value="b">
                      <?= $value[1] ?>
                    </li>
                    <li><input type="radio" name="v<?= $key+1 ?>" value="c">
                      <?= $value[2] ?>
                    </li>
                    <li><input type="radio" name="v<?= $key+1 ?>" value="d">
                      <?= $value[3] ?>

                    </li>
                  </ul>
                </li>

              <?php } ?>
              </ol>
              <div class="login-lb">
                <input class="button" type="submit" value="Получить результат">
              </div>
            </form>

            </div>
            
          </div>
      </div>
  </div>

  <div class="footer">
      <div class="container">

      </div>
  </div>



</body>
</html>
