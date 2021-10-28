<?php
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
$patryonic = filter_var(trim($_POST['patryonic']),FILTER_SANITIZE_STRING);
$class = filter_var(trim($_POST['class']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
if (mb_strlen($name)>0 && mb_strlen($surname)>0 && mb_strlen($pass)>4 && mb_strlen($patryonic)>0 && mb_strlen($class)>0 && mb_strlen($email)>0) {
  require "sql.php";
$result=$mysql->query("SELECT * FROM `register` WHERE `email`='$email'") ;
$user=$result->fetch_assoc();
if (count ($user)==0) {
    setcookie("rerror3",12345, time()-3600,"/");
    setcookie("error2",12345, time()-3600,"/");
    setcookie("error",12345, time()-3600,"/");
    setcookie("name", $name, time()+3600*24*30,"/");
    setcookie("surname", $surname, time()+3600*24*30,"/");
    setcookie("patryonic", $patryonic, time()+3600*24*30,"/");
    setcookie("class", $class, time()+3600*24*30,"/");
    setcookie("pass", $pass, time()+3600*24*30,"/");
    setcookie("email", $email, time()+3600*24*30,"/");
 $mysql->close();
header('location: register.php' );
  } 
  else{
    setcookie("error2",12345, time()-3600,"/");
    setcookie("error",12345, time()+3600,"/");
$mysql->close();
header('location: register2.php');
  }
} else {
  setcookie("error2",12345, time()+3600,"/");
  setcookie("error",12345, time()-3600,"/");
header('location: register2.php');
}
?>