<?php 
	// session_start();
include('adminheader.php');
	include('connect.php');
	
	$questionid=$_GET['questionadmin'];
	if ($questionid=="") {
		echo "<script> window.alert ('Please choose a question to answer in FAQ!')</script>";
		echo "<script> window.location = 'adminviewquestion.php'</script>";
	}
	// $adminid=$_SESSION['aid'];
	$selectqanda="Select * from QandA where QuestionID='$questionid'";
      $selectqandarun=mysqli_query($connection,$selectqanda);
      $retqanda=mysqli_fetch_array($selectqandarun);
      if (isset($_POST['btnanswer'])) {
		    $answer=$_POST['txtanswer'];
		      $updateqanda="UPDATE QandA set Answer='$answer' where QuestionID='$questionid'";
		        $updateqandarun=mysqli_query($connection,$updateqanda);
		        if ($updateqandarun) {
		          echo "<script>window.alert('Answer is updated!')</script>";
		          echo "<script>window.location='adminviewquestion.php'</script>";
		        }else{
		          echo mysqli_error($connection);
		          echo "<script>window.alert('Run question user query failed!')</script>";
		          // echo "<script>window.location='adminviewquestion.php'</script>";
		        }
		  }

 ?>

<section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-md-2 ml-5">
            
          </div>
          <div class="col-md-7 mb-5">
              <form action="#" class="p-5 bg-white" method="post">
              
              <h2 class="h4 text-black mb-5">Answer this question</h2> 
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="date">Question : <?php echo $retqanda['Question']; ?></label>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Enter your Answer</label> 
                  <textarea name="txtanswer" id="message" cols="30" rows="7" class="form-control" placeholder="Tell Something...."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Answer" name="btnanswer" class="btn btn-primary btn-md text-white">
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