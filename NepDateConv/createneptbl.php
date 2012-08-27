<?php

$link = mysql_connect('chyasalcom.fatcowmysql.com', 'newroseji', 'Openit123'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
// echo 'Connected successfully'; 
mysql_select_db(mysqldb); 

$sql = "CREATE TABLE nepdate 
(
 id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
M_date varchar(14),
M_Miti varchar(14)

)";
mysql_query($sql,$link);
mysql_close($link);
echo "table created";
?>