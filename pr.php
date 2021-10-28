<?php
require "sql.php";
if ($mysql->connect_errno){
    echo "ti pidor";
} else{
    echo "KRASAVA";
}
?>