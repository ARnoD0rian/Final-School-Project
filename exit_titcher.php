<?php
setcookie("name", $user['name'], time()-3600*24*30,"/");
setcookie("surname", $user['surname'], time()-3600*24*30,"/");
setcookie("patryonic", $user['patryonic'], time()-3600*24*30,"/");
setcookie("class", $user['class'], time()-3600*24*30,"/");
header('location: log_titcher.php' );  
 ?>