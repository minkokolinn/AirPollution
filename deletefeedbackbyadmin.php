<?php 
	include('connect.php');
	$feedbackid=$_GET['feedbackadmin'];
	$deletefeedback="delete from Feedback where FeedbackID='$feedbackid'";
	$rundeletefeedback=mysqli_query($connection,$deletefeedback);
	if ($rundeletefeedback) {
		echo "<script> window.alert ('Feedback is delete successfully!')</script>";
		echo "<script> window.location = 'adminviewfeedback.php'</script>";
	}
 ?>