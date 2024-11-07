<?php 
  session_start();
  include('connect.php');
    if (isset($_POST['btnareg'])) {
    $aname=$_POST['txtaname'];
    $aphone=$_POST['txtaphone'];
    $aemail=$_POST['txtaemail'];
    $apass=$_POST['txtapass'];
    $aaddress=$_POST['txtaaddress'];
    
      $insertadmin="INSERT INTO Admin
          (AdminName,PhoneNumber,Email,Password,PostalAddress) values
          ('$aname','$aphone','$aemail','$apass','$aaddress')";
        $insertadminrun=mysqli_query($connection,$insertadmin);
        if ($insertadminrun) {
          echo "<script>window.alert('Admin Account Is Successfully Created!')</script>";
          echo "<script>window.location='adminlogin.php'</script>";
        }else{
          echo mysqli_error($connection);
          echo "<script>window.alert('Run admin user query failed!')</script>";
          echo "<script>window.location='adminregister.php'</script>";
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
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0">Admin Panel</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="adminlogin.php" class="nav-link">Back To Admin Login</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(AllImage/headerimg3.jpg); background-size: cover;" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 mx-auto mt-lg-5 text-center">
            <h1>Hello! Admin</h1>
            <p class="mb-5"><strong class="text-white">Please Register Your New Account!</strong></p>
            
          </div>
        </div>
      </div>

      <a href="#adminloginform" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>
<!-- ------------------------------------------------------------------- -->
<section class="site-section bg-light bg-image">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            
          </div>
          <div class="col-md-6 mb-0" data-aos="fade-up" data-aos-once="false">

            <form action="" class="p-5 bg-white" method="post" enctype="multipart/form-data">
              
              <center><h2 class="h4 text-black mb-3">Admin Registration Form!</h2></center>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="namebox">Enter Admin Name</label>
                  <input type="text" id="namebox" class="form-control" name="txtaname" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="phonebox">Enter Phone Number</label>
                  <input type="text" id="phonebox" class="form-control" name="txtaphone" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="emailbox">Enter Admin Email</label>
                  <input type="email" id="emailbox" class="form-control" name="txtaemail" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="passwordbox">Create a Password</label>
                  <input type="Password" id="passwordbox" class="form-control" name="txtapass" required>
                </div>
              </div>      

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="addressbox">Postal Address</label>
                  <input type="text" id="addressbox" class="form-control" name="txtaaddress" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-2">
                  
                </div>
                <div class="col-md-5">
                  <input type="submit" value="Register" class="btn btn-primary btn-md text-white" name="btnareg">
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
<!-- ------------------------------------------------------------------- -->
<?php 
  include('footer.php');
 ?>