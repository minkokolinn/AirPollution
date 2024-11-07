<?php 
	include('connect.php');
	$questionid=$_GET['questionadmin'];
	$deletequestion="delete from QandA where QuestionID='$questionid'";
	$deletequestionrun=mysqli_query($connection,$deletequestion);
	if ($deletequestionrun) {
		echo "<script> window.alert ('Question is delete successfully!')</script>";
		echo "<script> window.location = 'adminviewquestion.php'</script>";
	}
 ?>