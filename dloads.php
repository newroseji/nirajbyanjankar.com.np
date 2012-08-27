<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/MainTmpl.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Downloads :: NirajByanjankar.com.np</title>
<!-- InstanceEndEditable --><link href="nbstyles/nbstyle1.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css">
<!-- InstanceEndEditable -->
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
	  <h4 class="h4forTopRtHeading">Downloads</h4>
	       
        <div id="Para4MainAbout" >
		   <img src="images/Icons/PaintIcon.png" width="128" height="128" class="noBord" id="imgThmb">
	      <p><strong>Downloading</strong> my work can be done which I think will be very useful and handy. Project files, assignments, VB applications, Flash applications, and scripts are some of them. Downloading sectors includes downloadable files in the form of zip files. For the future reference purpose, I have made mandatory requirement to register in order to download the files.</p>
		   <p>Last but not least, if you feel this site very informational to you then do not forget to tell you friend about it. If you have any question, suggestion, comments regarding site then feel free to contact me.</p>
		   <p><strong>P.S.: </strong>Download files can only be viewable when you <a href="doreg.php">register</a> in this site.</p>
          
    <?php

	if(isset($_COOKIE["emaill"])){

	$link = mysql_connect('chyasalcom.fatcowmysql.com', 'newroseji', 'Openit123'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
// echo 'Connected successfully'; 
mysql_select_db(mysqldb); 
		
		echo"<div id=Accordion1 class=Accordion tabindex=0>
        	<div class=AccordionPanel>
              <div class=AccordionPanelTab>Simple Calculator</div>
              <div class=AccordionPanelContent>
			   <div id=Para4MainAbout>
			  <img src='images/downloads/calculator.gif' width='150' height='251' class='noBord' id='imgThmb'>
			  <a href='downloads/calculator.zip' target=_blank>Simple Calculator</a><p>This calculator is very use for for daily use. It is made by
			  using Visual Basic 6. Please, feel free to use it and send feedback to the programmer. Thank you!</p>
			  </div>
			  </div>
            </div>
       	 	<div class=AccordionPanel>
          		<div class=AccordionPanelTab>Scientific Calculator</div>
          		<div class=AccordionPanelContent>
				<div id=Para4MainAbout>
			  <img src='images/downloads/scalculator.gif' class='noBord' >
			  
			  </div>
				</div>
        	</div>
        	<div class=AccordionPanel>
          		<div class=AccordionPanelTab>Flash Spiderman</div>
          		<div class=AccordionPanelContent>
				<div id=Para4MainAbout>
			  <img src='images/downloads/spiderm.jpg' class='noBord' >
			  
			  </div>
				</div>
        	</div>
        	<div class=AccordionPanel>
          		<div class=AccordionPanelTab>Samigya</div>
          		<div class=AccordionPanelContent>
				<div id=Para4MainAbout>
			  <img src='images/downloads/sami.jpg' class='noBord' >
			  
			  </div>
				</div>
        	</div>
        	<div class=AccordionPanel>
          		<div class=AccordionPanelTab>Marksheet (C++)</div>
          		<div class=AccordionPanelContent>
				<div id=Para4MainAbout>
			  <a href='downloads/ms.zip' target=_blank>Marksheet in CPP with code</a>
			  
			  </div>
				</div>
        	</div>
			<div class=AccordionPanel>
          		<div class=AccordionPanelTab>Resume</div>
          		<div class=AccordionPanelContent><a href='resume/Niraj.pdf' target=_blank>Resume in PDF Format</a><br/><br/>
				<a href='resume/Niraj.doc' target=_blank>Resume in DOC Format</a></div>
        	</div>
		</div>";
	}
		?>
</div>

</td>
		   
      <td rowspan="3" valign="top">
	  <div id="sidebar"><?php include("inc/attractions.php"); ?>
	</div>
	  </td>
    </tr>
  </table>
  <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="MainEdRegPathNavi" -->
  <div id="naviStyle">&nbsp;<a href="index.php" class="bottomPathNaviLinksStyles">Home</a>\<a href="dloads.php" class="bottomPathNaviLinksStyles">Downloads</a></div>
  <script type="text/javascript">
<!--
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
//-->
  </script>
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
