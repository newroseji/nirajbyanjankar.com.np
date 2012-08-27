   <?php
	
	
	
		$link = mysql_connect('chyasalcom.fatcowmysql.com', 'newroseji', 'Openit123'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
// echo 'Connected successfully'; 
mysql_select_db(mysqldb); 

    $tdate=$_POST[txtdt];
	$address = getenv("REMOTE_ADDR");
	$flg=0;
	$result = mysql_query("SELECT Email FROM membersinfo where Email = '$_POST[txtemail]' ");
	while($row = mysql_fetch_array($result)) {
		if($row['Email']==$_POST[txtemail]){
			$flg=1;
				echo "<h2 class=h4forTopRtHeading>Sorry!!</h2><p>This <b>USER ( " . $_POST[txtemail] . " ) ALREADY <u>EXISTS</u>,</b> choose different user with different email address<br>";
				echo "<br>Click on BACK button at top-left corner.</p><hr>";
		}
	}

	if($flg==0){
		$sql="INSERT INTO membersinfo (FirstName,LastName,Address,Email, Web,Phone,Hobbies,Password,EntryDate,IP_Address_Client)
		VALUES('$_POST[txtfn]','$_POST[txtln]','$_POST[txtaddr]','$_POST[txtemail]','$_POST[txtweb]','$_POST[txtph]','$_POST[txtint]','$_POST[txtpw1]','$tdate','$address')";
		
		if (!mysql_query($sql,$link))
		  {	
			  die('Error: ' . mysql_error());
		  }
		  echo "<br><h2 class=h4forTopRtHeading>Success!!</h2><p> Please, login with your login userame and password.</p><br>"; 
		 
		  echo "<br><br><a href=login.php>Login Page</a>";

			$msg = "E-MAIL Sent From NirajByanjankar.com.np.\n";$msg .= "Sender's Name:    $_POST[txtfn] $_POST[txtln]\n";$msg .= "Sender's Email:  $_POST[txtemail]\n";$msg .= "Sender's Address:  $_POST[txtaddr]\n";$msg .= "Sender's Telephone:  $_POST[txtph]\n";$msg .= "Sender's Web:  $_POST[txtweb]\n";$msg .= "Hobbies:   $_POST[txtint]\n\n";;$msg .= "Registered Date: $tdate\n\n";$msg .= "IP: $address\n\n";$to = "bjkniraj@gmail.com";$subject = "New User Registered";


				function spamcheck($field)
				  {
				  //filter_var() sanitizes the e-mail
				  //address using FILTER_SANITIZE_EMAIL
				  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
				
				  //filter_var() validates the e-mail
				  //address using FILTER_VALIDATE_EMAIL
				  if(filter_var($field, FILTER_VALIDATE_EMAIL))
					{
					return TRUE;
					}
				  else
					{
					return FALSE;
					}
				  }

				if (isset($_REQUEST['txtemail']))
				  {//if "email" is filled out, proceed
				
					  //check if the email address is invalid
					  $mailcheck = spamcheck($_REQUEST['txtemail']);
				  
					  if ($mailcheck==FALSE)
						{
							echo "Invalid input";
						}
					  else
						{
							//send email
							$email = $_REQUEST['txtemail'] ;
						   
							mail($to, "Subject: $subject",
							$msg, "From: $email" );
							
						}
				  }
	}
		



?>