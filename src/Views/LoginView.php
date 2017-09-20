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
          <a href="/game">Играть</a>
      </div>
  </div>

  <div class="main">
      <div class="container">
         <h1>Чтобы поиграть, войдите!</h1>
           <div class="login-form">
               <form action="/login" method="POST">
                    <div class="login-lb" style="display:none">Логин или пароль неверны</div>
                    <div class="login-lb">Логин</div>
                    <div><input class="text-input" type="text" name="username" id="username" required></div>
                    <div class="login-lb">Пароль</div>
                    <div><input class="text-input" type="password" name="password" id="password" required></div>
                    <div class="login-lb">
                        <input class="button" type="submit" value="Вход">
                    </div>

                </form>
           </div>

      </div>
  </div>

  <div class="footer">
      <div class="container">

      </div>
  </div>
</body>
</html>
