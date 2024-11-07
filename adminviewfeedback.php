<?php 
	// session_start();
  include('adminheader.php');
	include('connect.php');

	// $adminid=$_SESSION['aid'];
      $selectfeedback="Select * from Feedback";
      $runselectfeedback=mysqli_query($connection,$selectfeedback);

 ?>
<section class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Testimonials or Feedbacks<h2>
          </div>
        </div>

        <div class="row">
          <?php 
              while ($ret=mysqli_fetch_array($runselectfeedback)) {
                      
                    $varfeedbackid=$ret['FeedbackID'];
                    $varfeedbackuserid=$ret['UserID'];
                    $varfeedbackdate=$ret['FeedbackDate'];
                    $varfeedbackcomment=$ret['Comment']; 

                    $selectuser="Select * from Users where UserID='$varfeedbackuserid'";
                    $runselectuser=mysqli_query($connection,$selectuser);
                    $ret2=mysqli_fetch_array($runselectuser);
                    $varuname=$ret2['UserName'];
                    $varuimg=$ret2['ProfileImage'];
                    $varuemail=$ret2['Email'];
      
                   ?>
                    <div class='col-md-6 mb-4'>
              <div class='ftco-testimonial-1'>
              <div class='ftco-testimonial-vcard d-flex align-items-center mb-4'>
              <img src="<?php echo($varuimg) ?>" alt='Image' class='img-fluid mr-3'>
              <div>
              <h3 class='text-black'><b><?php echo "$varuname"; ?></b></h3>
              <span class='mr-5 text-black'><?php echo "$varuemail"; ?></span>
              
                    <span class='text-black'><?php echo "$varfeedbackdate"; ?></span>
                    </div>
                  </div>
                  <div>
                    <p class='text-black'><?php echo "$varfeedbackcomment"; ?></p>
                  </div>
                </div>
                              <a href="deletefeedbackbyadmin.php?feedbackadmin=<?php echo($varfeedbackid) ?>" class="md-col-12 btn btn-primary mr-2 mb-5">
 	Delete
 </a>
              </div>
              
         <?php
              }      
        ?>     
        </div>

      </div>
    </section>
 <?php 
 	include('footer.php');
  ?>