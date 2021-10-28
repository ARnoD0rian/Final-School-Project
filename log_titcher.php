<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Авторизация</title>
</head>
<body>
<div class="container mt-5">
        <center>
    <h1>Для входа введите следующие данные:</h1>
    <form  action="logo_titcher.php" method="post">
    <input type="text" class="form" name="email" id="email" placeholder="электронная почта"><br>
<input type="password" class="form" name="pass" id="temperature" placeholder="Введите пароль"><br>
<button type="submit" class="btn btn-success">Войти</button> <br>
*Если вы еще не зарегистрированы, то самое время сделать это! Нажмите на <a href="register2_titcher.php">зарегистрироваться</a> 
     </form>
         <?php
     if ($_COOKIE['error3']=='12345'):
      ?>
      <div class="error">Неверный логин или пароль</div>
      <?php endif; ?>

    </center>
    
</body>
</html>