<?php 
	session_start();
	unset($_SESSION['aid']);
	include('connect.php');
	include('beforeloginadminheader.php');
	if (isset($_SESSION['uid'])) {
		echo "<script> window.alert ('Please log out your user account firstly!')</script>";
		echo "<script> window.location = 'PageHome.php'</script>";
	}else{
		// echo "<script> window.location = 'adminlogin.php'</script>";
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
		if (isset($_POST['btnalogin'])) 
		{
			$aemail=$_POST['txtaemail'];
			$apassword=$_POST['txtapassword'];

			$selectadmin="SELECT * FROM Admin where Email='$aemail' AND Password='$apassword'";
			$selectadminrun=mysqli_query($connection,$selectadmin);
			$countadmin=mysqli_num_rows($selectadminrun);

			if ($countadmin==1) 
			{
				$ret=mysqli_fetch_array($selectadminrun);

				$_SESSION['aid']=$ret['AdminID'];

				echo "<script>window.alert('Valid Admin! Admin Login Successful!')</script>";
				unset($_SESSION['loginCount']);
				echo "<script>window.location='admincountryregister.php'</script>";
			}
			else
			{
				$_SESSION['loginCount']++;
		 		echo "<script>window.alert ('Invalid Admin! Login Attempt:".$_SESSION['loginCount']."')</script>";
		    // echo "<script>window.location='adminlogin.php'</script>";
			}

		}
	}

 ?>
<section class="site-section bg-light bg-image" id="adminloginform">
      <div class="container">
        <div class="row">
        	<div class="col-md-3">
        		
        	</div>
          <div class="col-md-6 mb-0" data-aos="fade-up" data-aos-once="false">

            <form action="" class="p-5 bg-white" method="post">
              
              <!-- <center><h2 class="h4 text-black mb-3">HEY Admin! &nbsp;&nbsp; LOGIN HERE!</h2></center> -->

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="email">Admin Email</label>
                  <input type="email" id="email" class="form-control" name="txtaemail" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3">
                  <label class="text-black" for="passwordtxt">Admin Password</label> 
                  <input type="password" id="passwordtxt" class="form-control" name="txtapassword" required>
                </div>
              </div>

              <div class="row form-group">
              	<div class="col-md-3">
              		
              	</div>
                <div class="col-md-3 mb-3">
                  <input type="submit" value="Login" class="btn btn-primary btn-md text-white" name="btnalogin">
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
 <?php 
 	include('footer.php');
  ?>