<?php
include ('constant.php');
   $pd=new PDO("mysql:host=".HOST,USER,PASS);
   $q="create database trains;";

   $pd->exec($q);

?>
