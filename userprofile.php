<?php 
	session_start();
  include('connect.php');
  include ('BrowsingFunction.php');
  recordBrowse("http://127.0.0.1:60/MIN_KO_KO_LINN_DW_AirPollution_Asg/userprofile.php"); 
  
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

    <style type="text/css">
    	.profileimgcss{
    		border-radius: 90%;
    		border: 4px solid black;
    		width: 50%;
    		height: auto;
    		margin-left: 25%;
    		box-shadow: 0px 0px 10px #999;
    	}
    	#profilecard{
    		box-shadow: 0px 0px 10px #999;
    	}
    	#textname{
    		margin-top: 20px;
    		font-size: 30px;
    		text-transform: uppercase;
    	}
    </style>
    
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
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0">Profile</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="PageHome.php" class="nav-link">Back</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
<div class="site-block-wrap">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay-2" style="background-image: url(AllImage/headerimg3.jpg);" data-aos="fade" id="home-section">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow mb-2">Profile Information</h1>
              <p class="mb-5 text-shadow">Information about your account can be seen in this profile page. Your can also update your information...</p>
              <p><a href="PageHome.php" target="_blank" class="btn btn-primary px-5 py-3">Get Started</a></p>
            </div>
          </div>
        </div>
      </div>  
    </div>   
    
  </div> 

<section class="site-section bg-image" id="profileimgcss">
      <div class="container">
        <div class="row">
          <div class="col-md-2 ml-5">
            
          </div>
          <div class="col-md-7 mb-0">

            <form action="" class="p-5 bg-white" id="profilecard" method="post" enctype="multipart/form-data">
              
              <center><h2 class="h4 text-black mb-5">View Your Profile</h2></center>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <img src="<?php echo $varuimg; ?>" class="profileimgcss">
                </div>
              </div>
              <div class="row form-group">
               
              </div>
              <center><h3 style="font-family: Arial Black;" class="text-black mb-5"><?php echo "$varuname" ?></h3></center>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="phonebox">Phone Number : <?php echo "$varuphone"; ?></label>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="emailbox">Email : <?php echo "$varuemail"; ?></label>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="passwordbox">Password : <?php echo "$varupass"; ?></label>
                </div>
              </div>              

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="dobbox">Date Of Birth : <?php echo "$varudob"; ?></label>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="genderbox">Gender : <?php echo "$varugender"; ?></label><br>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="addressbox">Postal Address : <?php echo "$varuaddress"; ?></label>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-0 mb-md-0">
                  <label class="text-black" for="codebox">Postal Code : <?php echo "$varucode"; ?></label>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-3 ml-4">
                  
                </div>
                <div class="col-md-5">
                  <a href="userupdate.php" class="btn btn-primary btn-md text-white">Update information</a>
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