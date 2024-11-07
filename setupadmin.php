<?php
include('connect.php');
$dropadmin="Drop table Admin";
$dropadminrun=mysqli_query($connection,$dropadmin);
if ($dropadminrun) 
{
	echo "<p>Admin Table is dropped Successfully!!!</p>";
}
$createadmin="CREATE table Admin
		(
			AdminID int Auto_Increment not null primary key,
			AdminName varchar(100),
			PhoneNumber varchar(30),
			Email varchar(50),
			Password varchar(50),
			PostalAddress varchar(255)
		)" ;
$createadminrun=mysqli_query($connection, $createadmin);
if($createadminrun)
{
	echo "<p>Admin Table is created Successfully!!!</p>";
}
else
{
	echo mysqli_error($connection);
}
$insertadmin="INSERT into Admin values(1,'root','09123456789','root@gmail.com','root123','Myanmar')";
$insertadminrun=mysqli_query($connection,$insertadmin);
if ($insertadminrun) 
{
	echo "<p>A sample admin data is data is inserted successfully!!!</p>";
}
?>
<!-- ----------------------------------------------------------------- -->