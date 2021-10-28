<?php
$name = filter_var(trim($_COOKIE['name']),FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_COOKIE['surname']),FILTER_SANITIZE_STRING);
$patryonic = filter_var(trim($_COOKIE['patryonic']),FILTER_SANITIZE_STRING);
$class = filter_var(trim($_COOKIE['class']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_COOKIE['pass']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_COOKIE['email']),FILTER_SANITIZE_STRING);
require "sql.php";
$mysql->query("INSERT INTO `register` ( `name`, `surname`, `patryonic`,`class`,`email`,`pass`) VALUES ('$name', '$surname', '$patryonic','$class','$email','$pass' )") ;
$mysql->close();
header('location: lich.php' );
?>
