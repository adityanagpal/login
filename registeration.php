

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>
<?php
$User_id=$_POST['User_id'];
$Password=$_POST['Password'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'user');
$q="insert into user_login values('$User_id','$Password')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<h1>user registeration</h1>
<p><?php if($status!=0)
	echo "user registered";
     else
	echo "Registration Failed ";
     ?>
 </p>
 Do you want to login now?   <a href="login.php">Click Here</a></br>
 </body>
 </html>