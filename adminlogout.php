<?php 
	session_start();
	include('connect.php');
	session_destroy();
	echo "<script>window.alert('User Logout Successfully!!')</script>";
	echo "<script>window.location='adminlogin.php'</script>";
 ?>