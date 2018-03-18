<!DOCTYPE html>
<html>
<head>
	<title>validation</title>
</head>
<body>
<?php
session_start();
$User_id=$_POST['User_id'];
$Password=$_POST['Password'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'user');
$q="select * from user_login where user_id='$User_id' and password='$Password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
  $_SESSION['User_id']=$User_id;
  header('location:http://localhost/login/home.php');
}
else{
	header('location:http://localhost/login/login.php');
}
mysqli_close($con);
?>

</body>
</html>