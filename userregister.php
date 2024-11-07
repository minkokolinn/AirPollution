<?php 
  include('connect.php');
  if (isset($_POST['btnreg'])) {
    $uname=$_POST['txtuname'];
    $uphone=$_POST['txtuphone'];
    $uemail=$_POST['txtuemail'];
    $upass=$_POST['txtupass'];
    $ucpass=$_POST['txtucpass'];
    $udob=$_POST['txtudob'];
    $ugender=$_POST['txtugender'];
    $uaddress=$_POST['txtuaddress'];
    $ucode=$_POST['txtucode'];

    // ----------------------for img1------------------
    $uimg=$_FILES['txtuimg']['name'];
    $folder="ProfileImage/";
    if ($uimg) {
      $filename=$folder."".$uimg;
      $copy=copy($_FILES['txtuimg']['tmp_name'],$filename);
      if (!$copy) {
        exit("Problem occured! Cannot upload image!");
      }
    }

    $selectuser="SELECT * from Users where UserName='$uname' or Email='$uemail'";
    $runselectuser=mysqli_query($connection,$selectuser);
    $countofuser=mysqli_num_rows($runselectuser);
    if ($countofuser>0) {
      echo "<script>window.alert('User Account Is Already Existed!')</script>";
      echo "<script>window.location='userregister.php'</script>";
    }else{
      if ($upass==$ucpass) {
        $insertuser="INSERT INTO Users
          (UserName,PhoneNumber,Email,Password,DateOfBirth,Gender,PostalAddress,PostalCode,ProfileImage) values
          ('$uname','$uphone','$uemail','$ucpass','$udob','$ugender','$uaddress','$ucode','$filename')";
        $insertuserrun=mysqli_query($connection,$insertuser);
        if ($insertuserrun) {
          echo "<script>window.alert('User Account Is Successfully Created!')</script>";
          echo "<script>window.location='index.php'</script>";
        }else{
          echo mysqli_error($connection);
          echo "<script>window.alert('Run inser user query failed!')</script>";
          echo "<script>window.location='userregister.php'</script>";
        }
        }else{
            echo "<script>window.alert('Password and Confirm Password must be same!')</script>";
        }
    }
    
    
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Air Pollution</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="ProfileImage/tabicon2.webp">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0">Air Pollution</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">

                <li><a href="index.php" class="nav-link">Already have a user account?</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    
        <div class="site-block-wrap">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(AllImage/reg_banner.jpg);" data-aos="fade" id="home-section">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow mb-5">Registeration of new customer</h1>
<!--               <p class="mb-5 text-shadow">Environmental pollution is not only humanity’s treason to humanity but also a treason to all other living creatures on earth!</p> -->
              <p><a href="PageHome.php" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>
            </div>
          </div>
        </div>
      </div>  
    </div>   
    
  </div> 

  <br>
  <!-- --------------------------------------------------- -->

<section class="site-section bg-light bg-image">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            
          </div>
          <div class="col-md-6 mb-0" data-aos="fade-up" data-aos-once="false">

            <form action="" class="p-5 bg-white" method="post" enctype="multipart/form-data">
              
              <center><h2 class="h4 text-black mb-3">HEY USER! &nbsp;&nbsp; CREATE YOUR NEW ACCOUNT!</h2></center>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="namebox">Enter User Name</label>
                  <input type="text" id="namebox" class="form-control" name="txtuname" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="phonebox">Enter Phone Number</label>
                  <input type="text" id="phonebox" class="form-control" name="txtuphone" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="emailbox">Enter Your Email</label>
                  <input type="email" id="emailbox" class="form-control" name="txtuemail" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="passwordbox">Create a Password</label>
                  <input type="Password" id="passwordbox" class="form-control" name="txtupass" required>
                </div>
              </div>              

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="cpasswordbox">Reenter this Password</label>
                  <input type="Password" id="cpasswordbox" class="form-control" name="txtucpass" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="dobbox">Date Of Birth</label>
                  <input type="date" id="dobbox" class="form-control" name="txtudob" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="genderbox">Gender</label><br>
                  <input type="radio" id="genderbox" name="txtugender" value="Male" required>
                  <b>Male</b>
                  <input type="radio" id="genderbox" name="txtugender" value="Female" required>
                  <b>Female</b>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="addressbox">Postal Address</label>
                  <input type="text" id="addressbox" class="form-control" name="txtuaddress" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="codebox">Postal Code</label>
                  <input type="text" id="codebox" class="form-control" name="txtucode" required>
                </div>
              </div>

              <div class="row form-group mb-5">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="imagebox">Profile Image</label>
                  <input type="file" id="imagebox" class="form-control" name="txtuimg" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-2">
                  
                </div>
                <div class="col-md-5">
                  <input type="submit" value="Register" class="btn btn-primary btn-md text-white" name="btnreg">
                </div>
                <div class="col-md-3">
                  <input type="reset" value="Reset" class="btn btn-primary btn-md text-white">
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
