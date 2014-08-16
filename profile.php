<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("emi_2", $con);
$id=$_GET['id'];
$sql=("select *  from facilities where Facility_ID = ".$id);
$result = mysql_query($sql);
$count=mysql_num_rows($result);
if($count==0)
				{
					header('location:profile.php');
					echo'
					<script>

						x=document.getElementById("error");
						x.innerHTML="No Result !"; 
						
						</script>';
					//echo "NONE";
				}
					else
				{
while($row = mysql_fetch_array($result))
{
$Fac_type=$row['Fac_type'];
$name=$row['Fac_name'];
$website=$row['Website'];
$descr=$row['Description'];
$gov=$row['Gov_ID'];
$District_ID=$row['District_ID'];
$street=$row['Street'];
}

//district
$sql=("select *  from district_enum where District_ID = ".$District_ID);
$resultdd = mysql_query($sql);
$countdd=@mysql_num_rows($resultdd);$District_name= "NONE";
if($countdd==0)
				{
					$District_name= "NONE";
				}
					else
				{
while($row = mysql_fetch_array($resultdd))
{
$District_name=$row['District_name'];
}}

//gov
$sql=("select *  from governorates_enum where Gov_ID = ".$gov);
$resultg = mysql_query($sql);
$countg=@mysql_num_rows($resultg);$Gov_name= "NONE";
if($countg==0)
				{
					$Gov_name= "NONE";
				}
					else
				{
while($row = mysql_fetch_array($resultg))
{
$Gov_name=$row['Gov_name'];
}}

//tele

$sql=("SELECT * FROM telephones where Telephone_ID = ".$id);
$resultt = mysql_query($sql);
$countt=@mysql_num_rows($resultt);
$Phone=array();$Phone[0]= "None";
if($countt==0)
				{
					$Phone[0]= "None";
				}
					else
				{
$i=0;
while(($row = mysql_fetch_array($resultt)) and $i<$countt)
{
$Phone[$i]=$row['Phone'];
$i++;
}}

//hospital
if($Fac_type=='h'){
	echo' <script src="jquery-1.9.1.min.js">
</script><script> 
$(document).ready(function(){
    $("#l").hide();
    $("#c").hide();
    $("#p").hide();
    $("#h").show();
});
</script>';
$sql=("select *  from hospitals where Hospital_ID = ".$id);
$resulth = mysql_query($sql);
$countd=@mysql_num_rows($resulth);$Department_name=array();$Department_name[0]= "None";
if($count==0)
				{
					$Department_name[0]= "None";
				}
					else
				{
$i=0;
while($row = @mysql_fetch_array($resulth) and $i<$countd)
{
$Department_name[$i]=$row['Department_name'];
$i++;
}
}}
//lab
if($Fac_type=='m'){
	echo' <script src="jquery-1.9.1.min.js">
</script><script> 
$(document).ready(function(){
    $("#h").hide();
    $("#c").hide();
    $("#p").hide();
    $("#l").show();
});
</script>';
$sql=("select *  from medical_labs and Medical_lab_ID = ".$id);
$resultl = mysql_query($sql);
$countl=@mysql_num_rows($resultl);
if($countl==0)
				{
					$type= "None";$fees="None";$working_hours="None";
				}
					else
				{
while($row = mysql_fetch_array($resultl))
{
$type=$row['mtype'];
$fees=$row['Fees'];
$working_hours=$row['Working_hours'];
}
}
$sql=("SELECT * FROM medical_lab_enum where ID =".$type);
$resultl = mysql_query($sql);
$countl=@mysql_num_rows($resultl);
if($countl==0)
				{
					$type= "None";
				}
					else
				{
while($row = mysql_fetch_array($resultl))
{
$type=$row['Ml_type'];
}
}

}
//phram
if($Fac_type=='p'){
		echo' <script src="jquery-1.9.1.min.js">
</script><script> 
$(document).ready(function(){
    $("#h").hide();
    $("#c").hide();
    $("#l").hide();
    $("#p").show();
});
</script>';
$sql=("select *  from pharmacies where Pharmacy_ID = ".$id);
$resultp = mysql_query($sql);
$countp=mysql_num_rows($resultp);
if($countp==0)
				{
					$working_hours= "None";
					$delivery="None";;
				}
					else
				{
while($row = mysql_fetch_array($resultp))
{
$working_hours=$row['Working_hours'];
$delivery=$row['Delivery'];
}
}}
//clinic
if($Fac_type=='c'){
		echo' <script src="jquery-1.9.1.min.js">
</script><script> 
$(document).ready(function(){
    $("#h").hide();
    $("#l").hide();
    $("#p").hide();
    $("#c").show();
});
</script>';
$sql=("select *  from clinics where Clinic_ID = ".$id);
$resultc = mysql_query($sql);
$countc=mysql_num_rows($resultc);
if($countc==0)
				{
					$speciality= "None";$fees="None";$working_hours="None";
				}
					else
				{
while($row = mysql_fetch_array($resultc))
{
$speciality=$row['Speciality'];
$fees=$row['Fees'];
$working_hours=$row['Working_hours'];
}
}}

mysql_close($con);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Egypt Medical Index - Beta</title>
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
        <div id="logo"> <a href="index1.php" title="Egypt Medical Index"><img src="image/logo.png" alt="logo" /></a> </div>
        <!-- HEADER TOP CONTENT -->
        
        <!-- <div id="welcome">Welcome <a href="account.html" title="Account">User Name</a>.</div> -->
        
        <!-- END OF HEADER TOP CONTENT --> 
      </div>
    </div>
    <div id="header_bottom">
      <div class="inner">
        <div id="main-menu">
          <ul class="menu" id="main_nav">
            <li class="menu-item"><a href="index.php" title="home">Home</a></li>
            <li class="menu-item"><a href="login.html" title="Login">Login</a></li>
            <li class="menu-item"><a href="about.html" title="home">About us</a></li>
            <li class="menu-item"><a href="contacts.html" title="home">Contacts</a></li>
          </ul>
        </div>
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
      
      <div class="box box-common fixed">
 
  <!-- Profile Details -->
  <h2><strong>Your Profile Information</strong></h2>
            
            <h2>Name : <?php echo $name; ?><br /></h2>
            <!--clinic-->
            <h2 id="c" style="display:none">Speciality : <?php echo $speciality; ?><br/><br/>
            Fees : <?php echo $fees ;?><br/><br/>
            Working hours : <?php echo $working_hours; ?><br/></h2>
      
            <!--Lab-->
            <h2 id="l" style="display:none">Type : <?php echo $type; ?><br/><br/>
            Fees : <?php echo $fees; ?><br/><br/>
            Working hours : <?php echo $working_hours ;?><br/></h2>
        
           <!--hospital-->
            <h2 id="h" style="display:none">Department Name : <?php for($i=0;$i<$countd;$i++){echo $Department_name[$i]." - ";}?><br/></h2>
            
            <!--pharm-->
            <h2 id="p" style="display:none">Working hours : <?php echo $working_hours; ?><br/><br/>            Delivery : <?php echo $delivery; ?><br/></h2>
            
            
            <h2>Tele : <?php for($i=0;$i<$countt;$i++){echo $Phone[$i]." - "; }?><br /></h2>
            <h2>Website : <?php echo $website; ?><br /></h2>
            <h2>Description : <?php echo $descr; ?><br /></h2>
            <h2>Gov : <?php echo $Gov_name;?><br /></h2>
            <h2>District : <?php  echo $District_name;?><br /></h2>
            <h2>Street : <?php if($street==NULL){echo "NONE";}else
			{echo $street; }?><br /></h2>
        

  <!-- END OF Profile Details -->
    </div>
  </div>
  <!-- END OF MAIN CONTENT --> 
    
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
      <div class="author_credits">
      EMI | Copyright © 2013 All rights reserved!</div>
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