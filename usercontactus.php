<?php
	session_start();
	include ('connect.php');
	include('uheader.php');
include ('BrowsingFunction.php');
  recordBrowse("http://127.0.0.1:60/MIN_KO_KO_LINN_DW_AirPollution_Asg/usercontactus.php"); 
  
	  $nowdate = date('m/d/Y');
	if (isset($_SESSION['uid'])) {
	    $userid=$_SESSION['uid'];

	if (isset($_POST['btnqnasend'])) {
    $varqnadate=$nowdate;
    $varqnaquestoin=$_POST['txtqnaquestion'];
      $insertqanda="INSERT INTO QandA
          (UserID,Question,QuestionDate) values
          ('$userid','$varqnaquestoin','$varqnadate')";
        $insertqandarun=mysqli_query($connection,$insertqanda);
        if ($insertqandarun) {
          echo "<script>window.alert('Your Question is sent!')</script>";
          echo "<script>window.location='userfaq.php'</script>";
        }else{
          echo mysqli_error($connection);
          echo "<script>window.alert('Run question user query failed!')</script>";
          // echo "<script>window.location='userregister.php'</script>";
        }
  }

  }else{
    echo "<script>window.alert('Please Login Account Firstly!.');</script>";
    echo "<script>window.location='index.php';</script>";
  }
 ?>
 <!-- ---------------------------------------------------------------- -->
<section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-md-2 ml-5">
            
          </div>
          <div class="col-md-7 mb-5">
              <form action="#" class="p-5 bg-white" method="post">
              
              <h2 class="h4 text-black mb-5">Ask Me Question</h2> 
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="date">Date You Asked</label> 
                  <input type="text" disabled id="date" class="form-control" value="<?php echo"$nowdate" ?>" name="txtqnadate">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Enter your Question</label> 
                  <textarea name="txtqnaquestion" id="message" cols="30" rows="7" class="form-control" placeholder="What do you want to know...."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" name="btnqnasend" class="btn btn-primary btn-md text-white">
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