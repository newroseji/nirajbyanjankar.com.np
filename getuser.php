<?php
$q=$_GET["q"];
$link = mysql_connect('chyasalcom.fatcowmysql.com', 'newroseji', 'Openit123'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
// echo 'Connected successfully'; 
mysql_select_db(mysqldb); 

$sql="SELECT * FROM zip_city WHERE city = '".$q."'";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>Zip Code</th>
<th>City</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['zipcode'] . "</td>";
  echo "<td>" . $row['abb'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['state'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($link);
?> 

	  
<?php
$link = mysql_connect('chyasalcom.fatcowmysql.com', 'newroseji', 'Openit123'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
// echo 'Connected successfully'; 
mysql_select_db(mysqldb); 


$q=$_GET["q"];





if($flag=='eng'){
	$ee=$_REQUEST[txte];
	$result = mysql_query("SELECT M_Miti FROM nepdate where M_Date = '$ee' ");
	$flg=0;
	echo "<br><br>";
	while($row = mysql_fetch_array($result)) {
		echo  "<b>English Date is " . $ee . " </b><br>" ;
		echo  "<b>Nepali Date is " . $row['M_Miti'] . " </b><br>" ;
		$flg=1;
	}
	if($flg==0){
		echo "<b>Date either invalid or out of range.<br>Please make sure that day and month are of 2 digits like 05 or 01<br> but not like 5 or 1.</b>";
	}
}
else{
	$nn=$_REQUEST[txtn];
	$result = mysql_query("SELECT M_Date FROM nepdate where M_Miti = '$nn' ");
	$flg=0;
	 while($row = mysql_fetch_array($result)) {
		echo  "<b>Nepali Date is " . $nn . " </b><br>" ;
		echo  "<b>English Date is " . $row['M_Date'] . " </b><br>" ;
		$flg=1;
	  }

	if($flg==0){
		echo "<b>Date either invalid or out of range.<br>Please make sure that day and month are of 2 digits like 05 or 01<br> but not like 5 or 1.</b>";
	}
}
mysql_close($link);
?>