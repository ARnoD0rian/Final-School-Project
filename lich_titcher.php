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
<p><h1>Добро пожаловать,  <?php echo $_COOKIE['name'],' ',$_COOKIE['patryonic']?>.</h1></p>
    <a href="exit_titcher.php" class="log_exit">Выйти</a>
    <h2>Введите дату, за которую хотите посмотреть температуру учеников</h2>
     </form> 
     <form action="lich_titcher.php" method="post">
     <input type="text" class="form" name="date" id="date" placeholder="введите дату"><br>
</form>
*Дату необходимо вводить следующим образом:число-месяц-год. Пример:01-01-2021
     <h2>История температур учеников <?php echo $_COOKIE['class']?> класса:</h2>
     <?php
     $date=filter_var(trim($_POST['date']),FILTER_SANITIZE_STRING);
     $class = filter_var(trim($_COOKIE['class']),FILTER_SANITIZE_STRING);
     require "sql.php";
     ?>
      <table border="1" class="history">
     <tr>
         <th>Ученик</th>
     <th>Дата</th>
     <th>Температура</th>
     </tr>
         <?php
     $result=$mysql->query("SELECT * FROM `users` WHERE `class`='$class' AND `date`='$date'") ;
     while ($user=mysqli_fetch_assoc($result)){
         echo "<tr>","<td>",$user['name'],' ', $user['surname'],' ', $user['patryonic'],"</td>","<td>", $user['date'],"</td>","<td>",$user['temperature'],"</td>","</tr>";
     }  
     ?>
     </table>
</center>
</body>
</html>