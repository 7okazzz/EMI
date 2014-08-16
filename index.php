
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Egypt Medical Index - Beta</title>

<script src="jquery-1.9.1.min.js">
</script>
<script> 
$(document).ready(function(){
  
  $("#f2").click(function(){

    $("#p1").hide();
    $("#p3").hide();
    $("#p4").hide();
    $("#p5").hide();
    $("#p2").slideToggle("slow");
  });
  
  $("#f3").click(function(){
 
    $("#p1").hide();
    $("#p2").hide();
    $("#p4").hide();
    $("#p5").hide();
    $("#p3").slideToggle("slow");
  });
  
  $("#f4").click(function(){

    $("#p1").hide();
    $("#p2").hide();
    $("#p3").hide();
    $("#p5").hide();
    $("#p4").slideToggle("slow");
  });
  
    $("#f5").click(function(){
    
    $("#p1").hide();
    $("#p2").hide();
    $("#p3").hide();
    $("#p4").hide();
    $("#p5").slideToggle("slow");
  });
  
});
</script>

<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/custom_scripts.js"></script>
<script type="text/javascript" src="js/tipsy/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script>
<script type="text/javascript" src="js/cloud-zoom.1.0.2.min.js"></script>
<script type="text/javascript" src="js/count/jquery.countdown.js"></script>
<script type="text/javascript" src="js/supersized/js/supersized.3.2.7.min.js"></script>
<script type="text/javascript" src="js/supersized/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/flex/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.accordion.js"></script>
<script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/selectnav.min.js"></script>
<script type="text/javascript" src="js/jquery.roundabout.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="js/tipsy/css.tipsy.css" />
<link rel="stylesheet" type="text/css" href="js/jquery.tweet.css" />
<link rel="stylesheet" type="text/css" href="js/cloud-zoom.css" />
<link rel="stylesheet" href="js/supersized/css/supersized.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="js/flex/flexslider.css" />
<link rel="stylesheet" type="text/css" href="js/colorbox/colorbox.css" />
<link href='https://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css' />
</head>

<body>
<!-- MAIN WRAPPER -->
<div id="container"> 
  <!-- HEADER -->
  <div id="header">
    <div id="header_top">
      <div class="inner">
        <div id="logo"> <a href="index.php" title="Egypt Medical Index"><img src="image/logo.png" alt="logo" /></a> </div>
        <!-- HEADER TOP CONTENT --><!-- END OF HEADER TOP CONTENT --> 
      </div>
      <div id="main-menu">
          <ul class="menu" id="main_nav">
            <li class="menu-item"><a href="index.php" title="home">Home</a></li>
            <li class="menu-item"><a href="login.html" title="Login">Login</a></li>
            <li class="menu-item current-menu-item"><a href="addh.php" title="home">About us</a></li>
            <li class="menu-item"><a href="contacts.html" title="home">Contacts</a></li>
          </ul>
        </div>
    </div>
    <div id="header_bottom">
      <div class="inner">
        
        <!-- Admin MENU -->
        <!-- END OF Admin MENU -->
        <div class="clear"></div> 
      </div>
    </div>
  </div>
  <!-- END OF HEADER --> 
  
  
  <!-- MAIN CONTENT -->
  <div id="content">
    <div class="inner"> 
      <!-- SLIDESHOW -->
      <!-- END OF SLIDESHOW -->
      
    <!--  <div class="box box-common fixed">
 
  <!-- MAIN Search -->
 <!-- <center>
  
 <div id="search">
          <form action="#">
            <div class="button-search"></div>
            <input type="text" onkeydown="this.style.color = '#000';" value="Search" name="search" />
          </form>
        </div>
  </center>-->
  
  <!-- END OF Search -->
  <!--<div class="clear"></div>
      </div>-->
      <div class="box box-orange fixed">
        <h2 class="heading-title">Facility Search</h2>
        <div class="box-products"> 

    <a id="f2"  class="link-style1">Pharm.</a>
    <a id="f3"  class="link-style1">Clinic</a>
    <a id="f4"  class="link-style1">Hospital</a>
    <a id="f5"  class="link-style1">Lab</a>
<!-- <div id="p1" style="display: none; margin-top:20px;" ><form name="doc" method="get"><h2>Name of Doctor  : <input type="text" name="name1" value="" size="31" />
<input type="submit" value="Search" name="search" /></h2></form></div>-->
<!--pharm.-->
<div id="p2" style="display: none; margin-top:20px;">
<form name="p" method="post">
<h2>Name of Pharm.  : <input  type="text" name="searchbarp" value="" size="31" />
<input type="submit" value="Search" name="s_p" /></h2></form></div>

<!--clinic-->
<div id="p3" style="display: none;margin-top:20px;">
<form name="c" method="post">
<h2>Name of Clinic  : <input  type="text" name="searchbarc" value="" size="31" />
<input type="submit" value="Search" name="s_c" /></h2></form></div>

<!--hospital-->
<div id="p4" style="display: none;margin-top:20px;">
<form name="h" method="post">
<h2>Hospital Name  : <input  type="text" name="searchbarh" value="" size="31" /></h2>

<h2>Department : <select name="d" class="form-select">
<option value="">ALL</option>
<option value="Card">Cardology </option> </select></h2>
<h2>Governorates : <select name="g" class="form-select">
<option value="">ALL</option>
<option value="Alexandria">Alexandria</option>
<option value="Cairo">Cairo</option>
<option value="Aswan">Aswan</option>
<option value="Giza">Giza</option>
<option value="Al Sharqia">Al Sharqia</option>
<option value="Minya">Minya</option></select>
</h2>

<h2>District : <select name="dist" class="form-select">
<option value="">ALL</option>
<option value="El haram">El Haram</option>
<option value="Ain Shams">Ain Shams</option>
<option value="Downtown Cairo">Downtown Cairo</option>
</select></h2>
<h2><input type="submit" value="Search" name="s_h" /></h2></form></div>

<!--lab-->
<div id="p5" style="display: none;margin-top:20px;">
<form name="l" method="post">
<h2>Name of Lab  : <input  type="text" name="searchbarl" value="" size="31" />
<input type="submit" value="Search" name="s_l" /></h2></form></div>
        

               <p><!-- END OF PRODUCT LISTING UNIT --> 
          </p>
        </div>
      </div>
      
      <!-- CAROUSEL -->
      <!-- END OF CAROUSEL --> 
    </div>
  </div>
  <!-- END OF MAIN CONTENT --> 
  
  <!-- EXPANDABLE FOOTER -->
  <div id="slide_footer"> <a href="#" class="toggler" id="toggle_switch" title="Show/Hide Search Results" >Search Results</a>
    <div id="togglerone" class="inner" >			
	<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
  if(isset($_POST['s_h']))
  		{
			
			if(preg_match("/^[  a-zA-Z]+/", $_POST['searchbarh']))
			{
				mysql_select_db("emi_2", $con);
			$sword=$_POST['searchbar'];
			$depdrop=$_post['depdrop'];
			$gov=$_post['govdrop'];
			$dist=$_post['distdrop'];
			$type=$_post['fac_type'];
      $sql=("select  Fac_name,Facility_ID  from    facilities where Fac_name LIKE '%" . $sword . "%' or Fac_type='h'");

$result = mysql_query($sql);
$count=mysql_num_rows($result);
				if($count==0)
				{
					echo "
					<script>
					alert('Not Found');
					</script>";
					
				}
					else
				{
	 $Fac_name=array();$i=0;$Facility_ID=array();
while($row = mysql_fetch_array($result) and $i<$count)
						{
							$Facility_ID[$i]=$row['Facility_ID'];
            $Fac_name[$i]=$row['Fac_name'];
			echo "<a href="."profile.php?id=".$Facility_ID[$i].">" . $Fac_name[$i] . "</a></br>";
			$i++;
						 }}
						 mysql_close($con);}}
	?>
                         </div>
  </div>
  <!-- END OF EXPANDABLE FOOTER --> 
  
  <!-- FOOTER -->
  <div id="footer">
    <div class="inner">
      <div class="one_fourth">
        <h3>Information</h3>
        <ul class="footer_links">
          <li><a href="about.html">About Us</a></li>
          <li><a href="#">Delivery Information</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms and Conditions</a></li>
        </ul>
      </div>
      <div class="one_fourth">
        <h3>Customer service</h3>
        <ul class="footer_links">
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Returns</a></li>
          <!--<li><a href="#">site map</a></li>-->
          <li><a href="#">RSS feed</a></li>
        </ul>
      </div>
     <!-- <div class="one_fourth">
        <h3>Extras</h3>
        <ul class="footer_links">
          <li><a href="#">Brands</a></li>
          <li><a href="#">Gift vouchers</a></li>
          <li><a href="#">Affiliates</a></li>
          <li><a href="#">Newsletter</a></li>
        </ul>
      </div>
      <div class="one_fourth last">
        <h3>Payment options</h3>
        <div id="seals"></div>
      </div>-->
      <div class="clear"></div>
    </div>
  </div>
  <!-- END OF FOOTER -->
  <div id="powered">
    <div class="inner">
      <div class="author_credits">EMI | Copyright © 2013 All rights reserved!</div>
    </div>
  </div>
</div>
<!-- END OF MAIN WRAPPER -->
<div id="fb-root"></div>
<script type="text/javascript">
  window.fbAsyncInit = function() {
    FB.init({appId: '0c18007de6f00f7ecda8c040fb76cd90', status: true, cookie: true,
     xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
    '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script> 
<script type="text/javascript">
			
			jQuery(function($){
				
				$.supersized({
				
					// Functionality
					slideshow               :   1,			// Slideshow on/off
					autoplay				:	1,			// Slideshow starts playing automatically
					start_slide             :   1,			// Start slide (0 is random)
					stop_loop				:	0,			// Pauses slideshow on last slide
					random					: 	0,			// Randomize slide order (Ignores start slide)
					slide_interval          :   5000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	1300,		// Speed of transition
					new_window				:	0,			// Image links open in new window/tab
					pause_hover             :   0,			// Pause slideshow on hover
					keyboard_nav            :   0,			// Keyboard navigation on/off
					performance				:	1,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
					image_protect			:	1,			// Disables image dragging and right click with Javascript
															   
					// Size and Position						   
					min_width		        :   0,			// Min width allowed (in pixels)
					min_height		        :   0,			// Min height allowed (in pixels)
					vertical_center         :   1,			// Vertically center background
					horizontal_center       :   1,			// Horizontally center background
					fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
					fit_portrait         	:   0,			// Portrait images will not exceed browser height
					fit_landscape			:   0,			// Landscape images will not exceed browser width
															   
					// Components							
					slide_links				:	false,	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
					thumb_links				:	0,			// Individual thumb links for each slide
					thumbnail_navigation    :   0,			// Thumbnail navigation
					slides 					:  	[			// Slideshow Images
														{image : 'image/001.jpg', title : 'Slide 1'},
														{image : 'image/002.jpg', title : 'Slide 2'},
														{image : 'image/003.jpg', title : 'Slide 3'},
														{image : 'image/004.jpg', title : 'Slide 4'},
														{image : 'image/005.jpg', title : 'Slide 5'},
														{image : 'image/006.jpeg', title : 'Slide 6'},
														{image : 'image/007.jpg', title : 'Slide 7'},
														{image : 'image/008.jpg', title : 'Slide 8'},
														{image : 'image/009.jpg', title : 'Slide 9'},
														{image : 'image/010.jpg', title : 'Slide 10'},
														{image : 'image/slider_pic1.jpg', title : 'Slide 11'},
														{image : 'image/slider_pic5.jpg', title : 'Slide 12'},
														{image : 'image/slider_pic2.jpg', title : 'Slide 13'}													
												],
												
					// Theme Options			   
					progress_bar			:	0,			// Timer for each slide							
					mouse_scrub				:	0
					
				});
		    });
		    
		</script>
        <script>
        selectnav('main_nav', {
  	label: ' MAIN MENU ',
  	nested: true,
	activeclass: 'current-menu-item',
  	indent: '-'
	});
        </script>
</body>

</html>