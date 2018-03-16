<?php
session_start();
if(!isset($_SESSION['User_id']))
header('location:http://localhost/login/login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
<h2> Hello <?php echo $_SESSION['User_id']; ?></h2>
<a href="logout.php">logout</a>
</body>
</html>
