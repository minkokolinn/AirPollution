<?php
	session_start();
	include ('connect.php');
	include('uheader.php');
include ('BrowsingFunction.php');
	recordBrowse("http://127.0.0.1:60/MIN_KO_KO_LINN_DW_AirPollution_Asg/usercountry.php"); 
	
	if (isset($_SESSION['uid'])) {
	    $userid=$_SESSION['uid'];

	    $selectcountry="Select * from Country";
	    $runselectcountry=mysqli_query($connection,$selectcountry);
	    $varcountrycount=mysqli_num_rows($runselectcountry);
  }else{
    echo "<script>window.alert('Please Login Account Firstly!.');</script>";
    echo "<script>window.location='index.php';</script>";
  }
 ?>
 <!-- ------------------------- -->
 	
 	 <section class="site-section" id="news-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3 bg-dark p-3">Countries &amp; Pollutions</h2>
          </div>
        </div>
        <div class='row'>
        <?php
        	while($ret=mysqli_fetch_array($runselectcountry)) { 
				    $varcountryid=$ret['CountryID'];
				    $varcountryname=$ret['CountryName'];
				    $varcountryrate=$ret['PollutionRate'];
				    $varcountryyear=$ret['Year'];
				    $varcountryimg1=$ret['CountryImage1'];
				    $varcountrydesp=$ret['Description'];
		?>		 	 	
			          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
			            <div class="h-entry">
			            	<!-- image transfer click -->
			              <a href="countrydetail.php?countryid=<?php echo($varcountryid) ?>"><img src="<?php echo $varcountryimg1 ?>" alt="Image" class="img-fluid"style="background-size: cover;"></a>
			              	<!-- ---- -->
			              <h2 class="font-size-regular"><a href="countrydetail.php?countryid=<?php echo($varcountryid) ?>" class="text-dark"><?php echo "$varcountryname"; ?></a></h2>
			              <div class="meta mb-4">Pollution Rate <span class="mx-2"> - </span><?php echo "$varcountryrate"; ?>
			              <span class="mx-2">&bullet;</span>
			              <a href="countrydetail.php?countryid=<?php echo($varcountryid) ?>"><?php echo "$varcountryyear"; ?></a></div>
			              <p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-height: 1000px;"><?php echo "$varcountrydesp"; ?></p>
			            </div> 
			          </div>
			 <?php 
        	}
		?>
		</div>
        
    </section>
 <!-- -------------------------------- -->
 <?php 
 	include('footer.php');
  ?>