
<?php
$link = mysql_connect('chyasalcom.fatcowmysql.com', 'newroseji', 'Openit123'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
// echo 'Connected successfully'; 
mysql_select_db(mysqldb); 


$fulldate=$_GET["q"];


$tok1=strtok($fulldate, "-");

$pref=$tok1;// for prefix nep or eng

while($tok1 !=false)
{
	$newdate=$tok1;// for remaing date
	$tok1=strtok("-");
}

// echo "<br> $newdate <br>"; // Displays new date format mm/dd/yyyy


function swapdate($tdate)// for swapping dd/mm/yyyy to mm/dd/yyyy
{
	$t1=strtok($tdate,"/");
	//echo "<br> $t1 <br>";

	$t2=strtok("/");
	//echo "<br> $t2 <br>";


	$t3=strtok("/");
	//echo "<br> $t3 <br>";

	$tolddate=$t2. "/" . $t1 . "/" . $t3;
	//echo "<br> $tolddate <br>";
	return $tolddate;

}

function nep($ndate)
{
	$t1=strtok($ndate,"/");
	//echo "<br> $t1 <br>";

	$t2=strtok("/");
	//echo "<br> $t2 <br>";

	$t3=strtok("/");
	$mm="";
	switch ($t1)
	{
		case '01':
		$m="January";
		break;
		
		case '02':
		$m="February";
		break;
		
		case '03':
		$m="March";
		break;
		
		case '04':
		$m="April";
		break;
		
		case '05':
		$m="May";
		break;
		
		case '06':
		$m="June";
		break;
		
		case '07':
		$m="July";
		break;
		
		case '08':
		$m="August";
		break;
		
		case '09':
		$m="September";
		break;
		
		case '10':
		$m="October";
		break;
		
		case '11':
		$m="November";
		break;
		
		case '12':
		$m="December";
		break;
			
		default:
		$m="outflow";
	}//end of switch
	
	echo $m . " " . $t2 . ", " . $t3 . " AD";
}//end of function


function eng($edate)
{
	$t1=strtok($edate,"/");
	//echo "<br> $t1 <br>";

	$t2=strtok("/");
	//echo "<br> $t2 <br>";

	$t3=strtok("/");
	$mm="";
	switch ($t1)
	{
		case '01':
		$m="Baisakh";
		break;
		
		case '02':
		$m="Jestha";
		break;
		
		case '03':
		$m="Ashadh";
		break;
		
		case '04':
		$m="Shrawan";
		break;
		
		case '05':
		$m="Bhadra";
		break;
		
		case '06':
		$m="Ashwin";
		break;
		
		case '07':
		$m="Kartik";
		break;
		
		case '08':
		$m="Mangshir";
		break;
		
		case '09':
		$m="Posh";
		break;
		
		case '10':
		$m="Magh";
		break;
		
		case '11':
		$m="Falgun";
		break;
		
		case '12':
		$m="Chaitra";
		break;
			
		default:
		$m="outflow";
	}//end of switch
	
	echo $m . " " . $t2 . ", " . $t3 . " BS";
}//end of function


$olddate=swapdate($newdate);

if($pref=='eng'){
	
	$result = mysql_query("SELECT M_Miti FROM nepdate where M_Date = '$olddate' ");
	$flg=0;

	while($row = mysql_fetch_array($result)) {
		//echo  "<b>English Date: " . $newdate . " </b><br>" ;

		$showdate=swapdate($row['M_Miti']);
		echo  "<b>Nepali Date: ";
		eng($showdate);// shows date in right format
		echo  " </b><br>" ;
		$flg=1;
	}
	if($flg==0){
		echo "<b>Date format is either invalid or out of range. Please make sure Day and Month are of 2 digits. For eg: 05 or 01 but not like 5 or 1.<br><br>
		      Also, the format should be MM/DD/YYYY</b>";
	}
}
else{
//	$nn=$ee;
	$result = mysql_query("SELECT M_Date FROM nepdate where M_Miti = '$olddate' ");
	$flg=0;
	 while($row = mysql_fetch_array($result)) {
		//echo  "<b>Nepali Date: " . $newdate . " </b><br>" ;
		$showdate=swapdate($row['M_Date']);
		echo  "<b>English Date: " ;
		nep($showdate); // shows date in right format
		echo  " </b><br>" ;
		$flg=1;
	  }

	if($flg==0){
		echo "<b>Date format is either invalid or out of range. Please make sure Day and Month are of 2 digits. For eg: 05 or 01 but not like 5 or 1.<br><br>
		      Also, the format should be MM/DD/YYYY</b>";
	}
}

?>