<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="container mt-4">
        <center>
    <h1>Введите следующие данные:</h1>
    <form  action="register3.php" method="post">
 <input type="text" class="form" name="name" id="name" placeholder="имя"><br>
<input type="text" class="form" name="surname" id="surname" placeholder="фамилия"><br>
<input type="text" class="form" name="patryonic" id="patryonic" placeholder="отчество"><br>
<input type="text" class="form" name="class" id="class" placeholder="класс"><br>
<input type="text" class="form" name="email" id="email" placeholder="электронная почта"><br>
<input type="password" class="form" name="pass" id="pass" placeholder="придумайте пароль"><br>
*Пароль должен содержать не менее 5 символов <br>
<button type="submit" class="btn btn-success">Зарегистрироваться</button>
<?php
     if ($_COOKIE['error']=='12345'):
      ?>
      <div class="error">Учетная запись с такой почтой уже существует</div>
      <?php endif; ?>
      <?php
     if ($_COOKIE['error2']=='12345'):
      ?>
      <div class="error">Какое-то из полей не было заполнено, повторите попытку</div>
      <?php endif; ?>      
    </form>
    </center>
</body>
</html>