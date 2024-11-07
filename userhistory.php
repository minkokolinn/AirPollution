<?php
	session_start();
	include ('connect.php');
	include('uheader.php');
	include ('BrowsingFunction.php');
	recordBrowse("http://127.0.0.1:60/MIN_KO_KO_LINN_DW_AirPollution_Asg/userhistory.php"); 

	if (isset($_SESSION['uid'])) {
	    $userid=$_SESSION['uid'];
  }else{
    echo "<script>window.alert('Please Login Account Firstly!.');</script>";
    echo "<script>window.location='index.php';</script>";
  }
 ?>
 <!-- -------------------------------- -->
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
/*  font-family: arial, sans-serif;
  border-collapse: collapse;
  
  margin-top: 40px;
  margin-bottom: 40px;
  margin-left: 10%;*/
  width: 80%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-left: 10%;
  margin-bottom: 30px;
  border: 1px solid #ddd;
}
th, td {
  text-align: left;
  padding: 8px;
}
#historytitle{
	margin-top: 50px;
}
/*td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}*/

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
	<center><h2 class="text-black" id="historytitle">Pages You Entered! History</h2></center>
	<div style="overflow-x:auto;">
	<?php 
		if (isset($_REQUEST['action'])) 
		{
			unset($_SESSION['Browsing']);
		}

		if (isset($_SESSION['Browsing'])) 
		{
			$count=count($_SESSION['Browsing']);

			if ($count==0) 
			{
				// echo "no history";
			}
			else
			{
				
				echo "<table>";
				echo "
				<tr>
				   <th>URL</th>
				   <th>Date and Time</th>
				</tr>
				";
				for ($i=0; $i < $count ; $i++) 
				{ 
					echo "<tr>";
					echo "<td>".$_SESSION['Browsing'][$i]['PageName']."</td>";
					echo "<td>".$_SESSION['Browsing'][$i]['DateTime']."</td>";
					echo "</tr>";
				}
				echo "</table>";
			}
		}
		else
		{
			echo "<h2> No History</h2>";
		}

	 ?>
	 </div>

 <center>
 <a href="userhistory.php?action=clear" class="md-col-12 btn btn-primary mr-2 mb-5">
 	Clear All History
 </a>
 </center>
</body>
</html>

 <!-- ------------------------------------- -->
 <?php 
 	include('footer.php');
  ?>