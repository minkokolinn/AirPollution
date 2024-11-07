<?php
	session_start(); 
	include('connect.php');
  include ('BrowsingFunction.php');
  recordBrowse("http://127.0.0.1:60/MIN_KO_KO_LINN_DW_AirPollution_Asg/countrydetail.php"); 

	$clickcountryid=$_GET['countryid'];

	$selectcountry="Select * from Country where CountryID=$clickcountryid";
	$runselectcountry=mysqli_query($connection,$selectcountry);
	$ret=mysqli_fetch_array($runselectcountry);
	$varcountryname=$ret['CountryName'];
	$varpollutionrate=$ret['PollutionRate'];
	$varyear=$ret['Year'];
	$vardesp=$ret['Description'];
	$varcountryimg1=$ret['CountryImage1'];
	$varcountryimg2=$ret['CountryImage2'];
	$varcountryimg3=$ret['CountryImage3'];
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
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0">Air Pollution</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="usercountry.php" class="nav-link">Back to Country List</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?php echo "$varcountryimg1"; ?>); background-size: cover;" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 mx-auto mt-lg-5 text-center">
            <h1><?php echo "$varcountryname"; ?></h1>
            <p class="mb-5"><strong class="text-white">Pollution Rate - <?php echo "$varpollutionrate"; ?></strong></p>
            
          </div>
        </div>
      </div>

      <a href="#property-details" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>  

    
    
    <div class="site-section" id="property-details">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="owl-carousel slide-one-item with-dots">
              <div><img src="<?php echo($varcountryimg1) ?>" alt="Image" class="img-fluid"></div>
              <div><img src="<?php echo($varcountryimg2) ?>" alt="Image" class="img-fluid"></div>
              <div><img src="<?php echo($varcountryimg3) ?>" alt="Image" class="img-fluid"></div>
            </div>
          </div>
          <div class="col-lg-7 pl-lg-5 ml-auto">
            <div class="mb-5">
              <h3 class="text-black mb-4">Detail Information of <?php echo "$varcountryname"; ?></h3>
              <p><?php echo "$varyear"; ?></p>
              <p><?php echo "$vardesp"; ?></p>
              <!-- <p><a href="#" class="btn btn-primary">Buy Property</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .site-wrap -->

<?php 
 	include('footer.php');
  ?>