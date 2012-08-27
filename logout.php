<?php 
ob_start();
// set the expiration date to one hour ago

setcookie("membername", "", time()-3600);
setcookie("emaill", "", time()-3600);

echo"Logging Out, please wait...";
header("Location:http://www.nirajbyanjankar.com.np/");
exit;
?>
