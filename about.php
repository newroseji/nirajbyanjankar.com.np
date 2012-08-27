<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/MainTmpl.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>About Me :: NirajByanjankar.com.np</title>
<!-- InstanceEndEditable --><link href="nbstyles/nbstyle1.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
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
  <link href="nbstyles/custom.css" rel="stylesheet" type="text/css" />
  <table cellspacing="0" cellpadding="0">
   
     
    <tr>
      <td valign="top">
      <h4 class="h4forTopRtHeading">About Me</h4>
      <div id="Accordion1" class="Accordion" tabindex="0">
        <div class="AccordionPanel">
     
          <div class="AccordionPanelTab">Hometown</div>
          <div class="AccordionPanelContent">
            <div id="Para4MainAbout" > <img src="images/ThumbPics/chyasalThmb150.gif" width="150" height="150" id="imgThmb"> I've grown in small town (Tole) of Himalayan country, Nepal. By now, Nepal is well known for its rich culture, tradition, religion, and water resources. Nepal is also well known for Mt. Everest, the top of the World. I believe lord Buddha born in our country.
              <p></p>
              My town, Chyasal is located at the Northern part of Lalitpur. It is famous place for indigenous native Newar people. We believe that our roots belong to Kiratis. Kiratis were believed to be migrated from northern part of Nepal and settled.
              <p></p>
              The name Chyasal is believed to be name as a great honor to 800 Kiratis whose heads are buried beneath this place by former government. Chyasah means number 800 in Newari language.
              <p></p>
              My cast "Byanjankar" means people separated for making delicious food. The specialist people who can made delicious food and are living with that occupation. Like my cast, we have numerous types of other cast whose occupation is indicated by their cast. For an instance, "Chitrakar" people are for painting, drawing, sketching because "Chitra" means picture, "Tamrakar" people are for crafting metals. </div>
          </div>
        </div>
<div class="AccordionPanel">
  <div class="AccordionPanelTab">Academics</div>
          <div class="AccordionPanelContent">
            <div id="Para4MainAbout" >
              <p>&ldquo;We learn everyday and every moment as learning never finishes&rdquo; &ndash; anonymous</p>
              <p>My official academic learning started from Siddhartha English Boarding School. I studied till grade 4 starting for Nursery. Grade 5 to 10, I completed from Gyanodaya Bal Batika Higher Secondary Boarding English School. Till grade 10, our country considers it as school level education.</p>
              <ul>
                <li>10+2 or High School from Unique Academy, Lalitpur</li>
                <li>Bachelors Degree</li>
                <ul>
                  <li>Bachelors in Information Management from St. Xaviers, Kathmandu, Nepal</li>
                  <ul>
                    <li>Upto 5 th semester</li>
                  </ul>
                  <li>Houston Community College Systems</li>
                  <ul>
                    <li>Partial general courses</li>
                  </ul>
                  <li>Northwest Missouri State University</li>
                  <ul>
                    <li>Bachelors in Science with major Management Information Systems</li>
                    <li>Graduation date December 18 th , 2009</li>
                  </ul>
                </ul>
              </ul>
            </div>
          </div>
        </div>
        <div class="AccordionPanel">
   
          <div class="AccordionPanelTab">My Career</div>
          <div class="AccordionPanelContent">
          <div id="Para4MainAbout" > 
          As a graduate student in Mgmt Info System, I have chose my career of course in IT field. I always dreamt of being IT expert when I was learning computer for the first time. Realizing the vastness of IT field, I have determined to specialize my career mostly in web-based sectors. Web developer, CMS manager, database administrator, system anaysist, and the like are some of my targeted fields.<br>
            <br>
            You might wonder why I did not choose Management even though it is embed in my degree. And my answer is, &quot;Yes, I have learnt about management. And now I want to put the application of management in IT.&quot;
<br>
            <br>
            </div>
          </div>
        </div>
      </div>
     
         
         </td>
		   
      <td rowspan="3" valign="top">
	  <div id="sidebar"><?php include("inc/attractions.php"); ?>
		</div>
	  </td>
    </tr>
   <tr><td valign="top">
   
	 </td>
    </tr>
    <tr>
      <td valign="top">
      <div id="CollapsiblePanel1" class="CollapsiblePanel">
        <div class="CollapsiblePanelTab" tabindex="0">Announcements !</div>
        <div class="CollapsiblePanelContent">
          <img src="images/Icons/announcementIcon.png" width="128" height="128" id="imgThmbRT">
          <div id="Para4Main2" >
		  <?php 
			include("inc/announcements.php");
		  ?>
        </div></div>
      </div>
    
        
      </td>
    </tr>
  </table>
  <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="MainEdRegPathNavi" -->
  <div id="naviStyle">&nbsp;<a href="index.php" class="bottomPathNaviLinksStyles">Home</a>\<a href="about.php" class="bottomPathNaviLinksStyles">About Me</a> </div>
  <script type="text/javascript">
<!--
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
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
