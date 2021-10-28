<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Личный кабинет</title>
</head>
<body>
    <center>
<p><h1>Добро пожаловать,  <?php echo $_COOKIE['name']?>.</h1></p>
     <form  action="temperature2.php" method="post">
     <input type="text" class="form" name="temperature" id="temperature" placeholder="введите температуру">  
    <a href="exit.php" class="log_exit">Выйти</a>
     </form> 
     <h2>История температур:</h2>
     <?php
     $name = filter_var(trim($_COOKIE['name']),FILTER_SANITIZE_STRING);
     $surname = filter_var(trim($_COOKIE['surname']),FILTER_SANITIZE_STRING);
     $patryonic = filter_var(trim($_COOKIE['patryonic']),FILTER_SANITIZE_STRING);
     $class = filter_var(trim($_COOKIE['class']),FILTER_SANITIZE_STRING);
     require "sql.php";
     ?>
     <table border="1" class="history">
     <tr>
     <th>Дата</th>
     <th>Температура</th>
     </tr>
         <?php
     $result=$mysql->query("SELECT * FROM `users` WHERE `name`='$name' AND `surname`='$surname' AND `patryonic`='$patryonic' AND `class`='$class'") ;
     while ($user=mysqli_fetch_assoc($result)){
         echo "<tr>", "<td>", $user['date'],"</td>","<td>",$user['temperature'],"</td>","</tr>";
     }  
     ?>
     </table>
</center>
</body>
</html>