<?php 
  session_start();
  include('connect.php');
include ('BrowsingFunction.php');
  recordBrowse("http://127.0.0.1:60/MIN_KO_KO_LINN_DW_AirPollution_Asg/userupdate.php"); 

  if (isset($_SESSION['uid'])) {
    $userid=$_SESSION['uid'];
    $select="Select * from Users where UserID='$userid'";
    $run=mysqli_query($connection,$select);
    $ret=mysqli_fetch_array($run);
    $varuname=$ret['UserName'];
    $varuphone=$ret['PhoneNumber'];
    $varuemail=$ret['Email'];
    $varupass=$ret['Password'];
    $varudob=$ret['DateOfBirth'];
    $varugender=$ret['Gender'];
    $varuaddress=$ret['PostalAddress'];
    $varucode=$ret['PostalCode'];
    $varuimg=$ret['ProfileImage'];

      if (isset($_POST['btnupdate'])) {
        $uname=$_POST['txtuname'];
        $uphone=$_POST['txtuphone'];
        $uemail=$_POST['txtuemail'];
        $upass=$_POST['txtupass'];
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
        
          $updateuser="UPDATE Users
                        SET UserName='$uname',
                        PhoneNumber='$uphone',
                        Email='$uemail',
                        Password='$upass',
                        DateOfBirth='$udob',
                        Gender='$ugender',
                        PostalAddress='$uaddress',
                        PostalCode='$ucode',
                        ProfileImage='$filename'
                        where UserID='$userid'";
            $updateuserrun=mysqli_query($connection,$updateuser);
            if ($updateuserrun) {
              echo "<script>window.alert('User Account Info Is Successfully Updated!')</script>";
              echo "<script>window.location='userprofile.php'</script>";
            }else{
              echo mysqli_error($connection);
              echo "<script>window.alert('Run update user query failed!')</script>";
              echo "<script>window.location='userupdate.php'</script>";
            }

      }
  }else{
    echo "<script>window.alert('Please Login Account Firstly!.');</script>";
    echo "<script>window.location='index.php';</script>";
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
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0">UPDATE USER</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">

                <li><a href="userprofile.php" class="nav-link">BACK TO PROFILE</a></li>
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
              <h1 class="text-shadow mb-5">Update Your Info</h1>
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
              
              <center><h2 class="h4 text-black mb-3">HEY USER! &nbsp;&nbsp; UPDATE YOUR ACCOUNT!</h2></center>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="namebox">Enter User Name</label>
                  <input type="text" id="namebox" class="form-control" name="txtuname" value="<?php echo $varuname; ?>" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="phonebox">Enter Phone Number</label>
                  <input type="text" id="phonebox" class="form-control" name="txtuphone" value="<?php echo $varuphone; ?>" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="emailbox">Enter Your Email</label>
                  <input type="email" id="emailbox" class="form-control" name="txtuemail" value="<?php echo $varuemail; ?>" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="passwordbox">Enter Your New Password</label>
                  <input type="Password" id="passwordbox" class="form-control" name="txtupass" value="<?php echo $varupass; ?>" required>
                </div>
              </div>              

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="dobbox">Date Of Birth</label>
                  <input type="date" id="dobbox" class="form-control" name="txtudob" value="<?php echo $varudob; ?>" required>
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
                  <input type="text" id="addressbox" class="form-control" name="txtuaddress" value="<?php echo $varuaddress ?>" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="codebox">Postal Code</label>
                  <input type="text" id="codebox" class="form-control" name="txtucode" value="<?php echo $varucode ?>" required>
                </div>
              </div>

              <div class="row form-group mb-5">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="imagebox">Profile Image</label>
                  <input type="file" id="imagebox" class="form-control" name="txtuimg" value="<?php echo $varuimg ?>" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-4">
                  
                </div>
                <div class="col-md-5">
                  <input type="submit" value="Update" class="btn btn-primary btn-md text-white" name="btnupdate">
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
