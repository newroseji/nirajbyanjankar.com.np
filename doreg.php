<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/MainTmpl.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Registration :: NirajByanjankar.com.np</title>
<!-- InstanceEndEditable --><link href="nbstyles/nbstyle1.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<script language="javascript" src="nbstyles/subRootStyle.js"></script>
<script language="javascript" src="selectuser.js"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<meta name="keywords" content="nirajbyanjankar.com.np niraj byanjankar personal homepage website nepali english date converter nepali bikram sambhat ajax download poems applications kathmandu lalitpur nepal designed with dreamweaver php mysql template 14 february 2010 valantines day resume blogs chyasal newa newar northwest missouri state university st xavier's college gyanodaya bal batika unique academy facebook">
<meta name="description" content="nirajbyanjankar.com.np is my personal homepage with an intention to educate people with what I know. This site contains my personal pictures, poems, applications, essays , and more. Attraction of this site can be Nepali to English to Nepali Date Converter. Please, feel free to give me comment on it.">
<meta name="Author" content="Niraj Byanjankar">


<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
</head>

<body>
<a name="mathi"></a>
<div id="topHeaderNB">
<div align="center">
	
	<table width="753" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="559" rowspan="6"><img src="images/headerimg.png" border="0" usemap="#Map" class="noBord" ></td>
		<td bgcolor="#FF0000" align="right" >
		<?php  

			if (isset($_COOKIE["membername"]))
			{
				$emailalso=$_COOKIE["emaill"];
				echo"<a href='../viewmemrec.php' class='topcornerLinkStyles'>";
				echo $_COOKIE["membername"];
				echo "</a>";
			}
			else
			{
				echo "<a href=login.php class=topcornerLinkStyles>Guest</a>";
			}

			
		?>
		</a></td>
	  </tr>
	  <tr>
	    <td bgcolor="#FF0000" align="right" >
		<?php  

			if (isset($_COOKIE["membername"]))
			{
				echo "<a href='logout.php' class='topcornerLinkStyles'>Logout</a>";

			}
			else
			{
				echo "<a href='login.php' class='topcornerLinkStyles'>Login</a>";
			}

			
		?>
		</td>
      </tr>
	  <tr>
	    <td bgcolor="#FF0000" align="right" ><a href="smap.php"  class="topcornerLinkStyles" >Site Map</a></td>
      </tr>
	  <tr>
	    <td bgcolor="#FF0000" align="right" ><a href="#"  class="topcornerLinkStyles" > </a></td>
      </tr>
	  <tr>
	    <td bgcolor="#FF0000" align="right" >[Beta Version] </td>
      </tr>
	  <tr>
	    <td bgcolor="#FF0000" align="right"  > <a href="#"   class="topcornerLinkStyles"><?php
 echo  date("jS F, l, Y");  ?> </a>
</td>
      </tr>
	</table>

	</div>
    <!--
	<div id="headingNaviNB">| <a href="../index.php" class="topNaviLinkStyles">HOME</a> | <a href="../about.php" class="topNaviLinkStyles">ABOUT ME </a> | <a href="../picgal.php" class="topNaviLinkStyles">MY PICTURES</a> | <a href="../doreg.php" class="topNaviLinkStyles">REGISTER</a> | <a href="../dloads.php" class="topNaviLinkStyles">DOWNLOAD</a> |
   <a href="../extras.php" class="topNaviLinkStyles">EXTRAS</a>  |<a href="../fbacks.php" class="topNaviLinkStyles">FEEDBACK</a>|</div>
</div>
-->
<div id="centerWithBorderNB">
<div class="menuBarBG">
<ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="index.php">HOME</a>    </li>
      <li><a href="about.php" class="MenuBarItemSubmenu">ABOUT ME</a> 
        <ul>
          <li><a href="about.php#ht">Hometown</a></li>
          <li><a href="about.php#aca">Academics</a></li>
          <li><a href="about.php#career">Career</a></li>
        </ul>
      </li>
      <li><a href="picgal.php">PICTURES</a>      </li>
      <li><a href="doreg.php">REGISTER</a></li>
      <li><a href="dloads.php">DOWNLOADS</a></li>
      <li><a href="extras.php">EXTRAS</a></li>
      <li><a href="fbacks.php">FEEDBACK</a></li>
      
</ul>
</div>
  
  <!-- InstanceBeginEditable name="MainEdReg" -->
  <table cellspacing="0" cellpadding="0">
   <tr>
      <td valign="top">
	  <h4 class="h4forTopRtHeading">Register</h4>
	  <h3 class="Heading3forMain2">Please, fill the form </h3>
         
          <div id="Para4MainAbout" >
		   <img src="images/Icons/GuestBkicon.gif" name="imgThmbRT" id="imgThmbRT"> 
		   
			<script language="javascript" src="nbstyles/checkterms.js"></script>
		    <form method="POST" name="regfrm" action="savedata.php" id="frmstyletxt" onSubmit="return checkterms()">
            
   <table width="380" border="0" cellpadding="0" cellspacing="0">

  <tr>
  
    <td width="107" class="formlabel"> First Name</td>
    <td colspan="3">
      <input name="txtfn" type="text" class="txtboxesRequired" id="txtfn" size="25" onBlur="inited()"></td>
    </tr>
      <tr>
    <td class="formlabel">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td class="formlabel">Last Name </td>
    <td colspan="3"><input name="txtln" type="text" class="txtboxesRequired" id="txtln" size="25"></td>
    </tr>
  <tr>
    <td class="formlabel">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td class="formlabel">Email Address </td>
    <td colspan="3"><input name="txtemail" type="text" class="txtboxesRequired" id="txtemail" size="25">
      <input name="txtdt" type="hidden"  size="25"></td>
    </tr>
    <tr>
    <td class="formlabel">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td class="formlabel">Address</td>
    <td colspan="3"><input name="txtaddr" type="text" class="txtboxesOptional" id="txtaddr" size="25"></td>
    </tr>
      <tr>
    <td class="formlabel">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td class="formlabel">Website</td>
    <td colspan="3"><input name="txtweb" type="text" class="txtboxesOptional" id="txtweb" size="25"></td>
    </tr>
      <tr>
    <td class="formlabel">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td class="formlabel">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td class="formlabel">Interests</td>
    <td colspan="3"><input name="txtint" type="text" class="txtboxesOptional" id="txtint" size="25"></td>
    </tr>
      <tr>
    <td class="formlabel">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td class="formlabel">Phone</td>
    <td colspan="3"><input name="txtph" type="text" class="txtboxesOptional" id="txtph" size="25"></td>
    </tr>
  <tr>
    <td class="formlabel">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td class="formlabel">Password</td>
    <td colspan="3"><input name="txtpw1" type="password" class="txtboxesRequired" id="txtpw1" size="25"></td>
    </tr>
      <tr>
    <td class="formlabel">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td class="formlabel">Confirm Password </td>
    <td colspan="3"><input name="txtpw2" type="password" class="txtboxesRequired" id="txtpw2" size="25"></td>
    </tr>
  <tr>
    <td class="formlabel">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td width="58">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" class="formlabel"><input name="tc1" type="checkbox" class="formtextbox" id="tc1" value="checkbox">
      I agree all the <a href="tnc.php" title="Disclaimer" class="bottomPathNaviLinksStyles">terms and condition</a> of this site.</td>
    </tr>
  <tr>
    <td class="formlabel">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    </tr>
      <tr>
    <td colspan="4" class="formlabel"><strong>Note:</strong> All Text fields with Red Border are compulsory fields. Password should be at least 6 characters.</td>
    </tr>
      <tr>
    <td class="formlabel">&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="12">&nbsp;</td>
    <td width="148"><input name="frmSubmit" type="submit" class="formbuttons" id="frmSubmit"  value=" Submit "></td>
    <td>&nbsp;</td>
  </tr>
 
</table>

 </form>
  </div>
		</td>
		   
      <td rowspan="3" valign="top">
	  <div id="sidebar">
	    <?php include("inc/attractions.php"); ?>
	  </div>
	  </td>
    </tr>
  </table>
  <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="MainEdRegPathNavi" -->
  <div id="naviStyle">&nbsp;<a href="index.php" class="bottomPathNaviLinksStyles">Home</a>\<a href="doreg.php" class="bottomPathNaviLinksStyles">Registration</a></div>
  <!-- InstanceEndEditable -->
</div>
 <div id="footerCenterNB"> &copy; 2010, Niraj Byanjankar</div>
 <div id="bottomLinksNB"> <a href="tnc.php" class="bottomLinksNBLnk">Disclaimer</a> <a href="tnc.php" class="bottomLinksNBLnk">Policies</a> <a href="fbacks.php" class="bottomLinksNBLnk">Feedback</a> <a href="mailto:info@nirajbyanjankar.com.np" class="bottomLinksNBLnk">Webmaster</a> <a href="fbacks.php" class="bottomLinksNBLnk">Advertisements</a> <a href="#mathi" class="bottomLinksNBLnk">Top</a> </div>
 <map name="Map">
   <area shape="rect" coords="15,26,234,74" href="index.php" alt="Homepage">
</map>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
 </script>
</body>
<!-- InstanceEnd --></html>
