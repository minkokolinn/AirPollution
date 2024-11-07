<?php 
	// session_start();
	include('connect.php');
	include('adminheader.php');
	// $adminid=$_SESSION['aid'];

	if (isset($_POST['btnsavecountry'])) {
      $varcountryname=$_POST['txtcountryname'];
      $varpollutionrate=$_POST['txtpollutionrate'];
      $varyear=$_POST['txtyear'];
      $vardescription=$_POST['txtcountrydescription'];

      $cimg1=$_FILES['img1']['name'];
		$folder1="CountryImage/";
		if ($cimg1) {
			$filename1=$folder1."".$cimg1;
			$copy=copy($_FILES['img1']['tmp_name'],$filename1);
			if (!$copy) {
				exit("Problem occured! Cannot upload image!");
			}
		}
		// ----------------------for img2------------------
		$cimg2=$_FILES['img2']['name'];
		$folder2="CountryImage/";
		if ($cimg2) {
			$filename2=$folder2."".$cimg2;
			$copy=copy($_FILES['img2']['tmp_name'],$filename2);
			if (!$copy) {
				exit("Problem occured! Cannot upload image!");
			}
		}
		// ----------------------for img3------------------
		$cimg3=$_FILES['img3']['name'];
		$folder3="CountryImage/";
		if ($cimg3) {
			$filename3=$folder3."".$cimg3;
			$copy=copy($_FILES['img3']['tmp_name'],$filename3);
			if (!$copy) {
				exit("Problem occured! Cannot upload image!");
			}
		}


      $insertcountry="INSERT INTO Country
          (CountryName,PollutionRate,Year,Description,CountryImage1,CountryImage2,CountryImage3) values
          ('$varcountryname','$varpollutionrate','$varyear','$vardescription','$filename1','$filename2','$filename3')";
        $insertcountryrun=mysqli_query($connection,$insertcountry);
        if ($insertcountryrun) {
          echo "<script>window.alert('Country is inserted successfully!!!')</script>";
          echo "<script>window.location='admincountryregister.php'</script>";
        }else{
          echo mysqli_error($connection);
          echo "<script>window.alert('Run country insert query failed!')</script>";
          echo "<script>window.location='admincountryregister.php'</script>";
        }
  }

 ?>
 <div id="admin1">
<section class="site-section bg-dark bg-image" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-md-2 ml-5">
            
          </div>
          <div class="col-md-7 mb-5">
              <form action="#" class="p-5 bg-white" method="post" enctype="multipart/form-data">
              
              <h2 class="h4 text-black mb-5">Country Registration Form</h2> 
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="countryname">Name of Country</label> 
                  <input type="text" id="countryname" class="form-control" name="txtcountryname" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="pollutionrate">Pollution Rate</label> 
                  <input type="text" id="pollutionrate" class="form-control" name="txtpollutionrate" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="year">Year</label> 
                  <input type="text" id="year" class="form-control" name="txtyear" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="countryimg1">Country's first image</label> 
                  <input type="file" name="img1" id="countryimg1" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="countryimg2">Country's second image</label> 
                  <input type="file" name="img2" id="countryimg2" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="countryimg3">Country's third image</label> 
                  <input type="file" name="img3" id="countryimg3" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="description">Description</label> 
                  <textarea name="txtcountrydescription" id="description" cols="30" rows="10" class="form-control" placeholder="Write country Description here..." required></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Save Country" name="btnsavecountry" class="btn btn-primary btn-md text-white">
                </div>
              </div>
  
            </form>
          </div>
        </div>
      </div>
    </section>
    </div>
 <?php 
 	include('footer.php');
  ?>