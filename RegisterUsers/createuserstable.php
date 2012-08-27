<?php
$link = mysql_connect('chyasalcom.fatcowmysql.com', 'newroseji', 'Openit123'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
// echo 'Connected successfully'; 
mysql_select_db(mysqldb); 


$sql = "CREATE TABLE membersinfo 
(
SN INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
FirstName varchar(30),
LastName varchar(30),
Address varchar(50),
Email varchar(30),
Web varchar(30),
Phone varchar(25),
Hobbies varchar(50),
Password varchar(15),
EntryDate varchar(35),
IP_Address_Client varchar(30)
)";
mysql_query($sql,$link);
mysql_close($link);
echo "Table has created successfully.";
?>