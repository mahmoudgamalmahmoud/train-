<?php

 include("database.php");
 
$q= "INSERT into train(t_id,sl,sr,speed,type,timel,timer,duration ,stops) VALUES
(1, 'اسيوط','سوهاج',120,'ركاب','11:43','3:84',3,6),
(2, 'سوهاج','اسيةط',177,'vip','1:43','3:07',3,6),(3,'قنا','مصر',177,'vip','1:43','3:07',3,6);";
 $db->myExec($q);

?>
