<?php
$db_host = "localhost"; // database host
$db_login = "root"; // database user
$db_pass= ""; // database password
$con= mysql_connect($db_host, $db_login, $db_pass);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

if (mysql_query("CREATE DATABASE mysqldb",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

mysql_close($con);
?> 