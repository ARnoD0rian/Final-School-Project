<?php
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
require "sql.php";
$result=$mysql->query("SELECT * FROM `titcher` WHERE `email`='$email' AND `pass`='$pass'") ;
$user=$result->fetch_assoc();
if (count ($user)==0) { 
setcookie("error3",12345, time()+3600,"/");
$mysql->close();
header('location: log_titcher.php' );
  } else {
    setcookie("name", $user['name'], time()+3600*24*30,"/");
    setcookie("patryonic", $user['patryonic'], time()+3600*24*30,"/");
    setcookie("class", $user['class'], time()+3600*24*30,"/");
    setcookie("error3",12345, time()-3600,"/");
$mysql->close();
header('location: lich_titcher.php' ); 
  } 
?>