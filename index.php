<?php 
	session_start();
  unset($_SESSION['uid']);
	include('beforeloginheader.php');
  include('connect.php');
 ?>
 	<?php 

if (isset($_SESSION['loginCount']))
	{
	if($_SESSION ['loginCount'] >=3)
	{
		echo "<script> window.alert ('Please Try Again in 10 Minutes')</script>";
		echo "<script> window.location = 'LoginTimer.php'</script>";
	}
	}
	else if (!isset($_SESSION['loginCount']))
	{
	$_SESSION['loginCount']=0;
	}
if (isset($_POST['btnlogin'])) 
{
	$email=$_POST['txtemail'];
	$password=$_POST['txtpassword'];

	$select="SELECT * FROM Users where Email='$email' AND Password='$password'";
	$run=mysqli_query($connection,$select);
	$count=mysqli_num_rows($run);

	if ($count==1) 
	{
		$ret=mysqli_fetch_array($run);

		$_SESSION['uid']=$ret['UserID'];

		echo "<script>window.alert('Valid User!User Login Successful!')</script>";
		unset($_SESSION['loginCount']);
		echo "<script>window.location='PageHome.php'</script>";
	}
	else
	{
		$_SESSION['loginCount']++;
 		echo "<script>window.alert ('Invalid User! Login Attempt:".$_SESSION['loginCount']."')</script>";
    echo "<script>window.location='index.php'</script>";
	}

}

 ?>

<html>
<head>
	<title></title>

</head>
<body>
      <section class="site-section bg-light bg-image">
      <div class="container">
        <div class="row">
        	<div class="col-md-3">
        		
        	</div>
          <div class="col-md-6 mb-0" data-aos="fade-up" data-aos-once="false">

            <form action="" class="p-5 bg-white" method="post">
              
              <center><h2 class="h4 text-black mb-3">HEY USER! &nbsp;&nbsp; LOGIN HERE!</h2></center>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" class="form-control" name="txtemail" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3">
                  <label class="text-black" for="passwordtxt">Password</label> 
                  <input type="password" id="passwordtxt" class="form-control" name="txtpassword" required>
                </div>
              </div>

              <div class="row form-group">
              	<div class="col-md-3">
              		
              	</div>
                <div class="col-md-3">
                  <input type="submit" value="Login" class="btn btn-primary btn-md text-white" name="btnlogin">
                </div>
                <div class="col-md-3">
                  <input type="reset" value="Cancel" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
        </div>
      </div>
    </section>
</body>
</html>

 <?php 
 	include('footer.php');
  ?>