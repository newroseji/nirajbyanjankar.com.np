<?php

	if($_POST[txtemail]!=""){


		
$link = mysql_connect('chyasalcom.fatcowmysql.com', 'newroseji', 'Openit123'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
// echo 'Connected successfully'; 
mysql_select_db(mysqldb); 



	
		$flg=0;
		$fn="";
		$ln="";
		$ftn="";
		$ema="";
	
		$result = mysql_query("SELECT Email,Password,FirstName,LastName FROM membersinfo where Email='" . $_POST[txtemail] . "' and Password='" . $_POST[txtpw] . "'");	
		while($row = mysql_fetch_array($result)) {
			if($row['Email']==$_POST[txtemail] && $row['Password']==$_POST[txtpw]){
				$fn=$row['FirstName'];
				$ln=$row['LastName'];
					$flg=1;
					$ftn=$fn. " ". $ln;
					$ema=$_POST[txtemail];
			}
		}

		if($flg==1){
			setcookie("membername",$ftn, time()+3600);
			setcookie("emaill",$ema, time()+3600);
			header("Location: http://www.nirajbyanjankar.com.np/dloads.php");
		}
		else{	
			setcookie("membername", "", time()-3600); // delete cookie
			setcookie("emaill", "", time()-3600); // delete cookie
			header("Location: http://www.nirajbyanjankar.com.np/",FALSE);
		}
	}
	else{
		header("Location: http://www.nirajbyanjankar.com.np/",FALSE);
	}



?>