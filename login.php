<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: '. mysql_error());
  }

mysql_select_db("emi_2",$con);
$username=$_POST['username'];
$password=$_POST['password'];
$sql=("select * from users where Username='$username' and Password='$password'");
$result = mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1)
{
header("location:admin.php");
}
else
{echo'
					<script>
					alert("No user found");
					window.location.href="login.html";
					</script>';
}


mysql_close($con);

?>