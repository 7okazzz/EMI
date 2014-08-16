<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: '. mysql_error());
  }
else{
mysql_select_db("emi_2", $con);


$sql="INSERT INTO facilities (Website, Description, Street, Fac_type, Fac_name,Gov_ID)

VALUES ('$_POST[website]','$_POST[description]','$_POST[street]','$_POST[fac_type]','$_POST[name]','$_POST[gov]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
  $name=$_POST['name'];
  
  
  $Facilty_ID = mysql_query("select Facility_ID from facilities where Fac_name='$_POST[name]' ");
  
  $x=mysql_result($Facilty_ID,0);
   $fac_type=$_POST['fac_type'];
  if ($fac_type=="h")
  {
	  if (isset($_POST['dep'])) {
    $deparray = $_POST['dep'];
	for ($i=0; $i<count($deparray); $i++) {
      $dep1=$deparray[$i];
	  $sql1="INSERT INTO hospitals VALUES ('$x','$dep1')";
  mysql_query($sql1,$con);
    }}
	  
  

  }
  else if ($fac_type=="c")
  {
	  
  $sql3="INSERT INTO clinics (Clinic_ID, Speciality, Fees, Working_Hours)
VALUES ('$x','$_POST[ctype]','$_POST[fees]','$_POST[working_Hours]')";
  mysql_query($sql3,$con);
  }
  else if ($fac_type=="m")
  {
	$sql4="INSERT INTO medical_labs (Medical_lab_ID,mtype,Working_hours)VALUES ('$x','$_POST[mtype]','$_POST[working_Hours]')";
  mysql_query($sql4,$con);
  }
  else if ($fac_type=="p")
  {
	$sql5="INSERT INTO pharmacies (Pharmacy_ID, Working_Hours, Delivery)
VALUES ('$x','$_POST[working_Hours]','$_POST[delivery]')";
mysql_query($sql5,$con);
  }
}
echo'
					<script>
					alert("Facility saved");
					window.location.href="admin.php";
					</script>';
mysql_close($con);
?>