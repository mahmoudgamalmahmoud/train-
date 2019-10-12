<?php
 include("database.php");
$q= "CREATE TABLE IF NOT EXISTS train(
t_id int(11) not null auto_increment primary key,
sl varchar(20) not null,
sr varchar(20) not null,
speed int(11) not null,
type varchar(20) not null,
timel varchar(20) not null,
timer varchar(20) not null,
duration varchar(20) not null,
stops int(11))";
 $db->myExec($q);


?>
