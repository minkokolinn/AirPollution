<?php
	session_start();
	include ('connect.php');
	include('uheader.php');
include ('BrowsingFunction.php');
  recordBrowse("http://127.0.0.1:60/MIN_KO_KO_LINN_DW_AirPollution_Asg/userfeedback.php"); 
  
  $nowdate = date('m/d/Y');
	if (isset($_SESSION['uid'])) {
	    $userid=$_SESSION['uid'];
      $selectfeedback="Select * from Feedback";
      $runselectfeedback=mysqli_query($connection,$selectfeedback);
  }else{
    echo "<script>window.alert('Please Login Account Firstly!.');</script>";
    echo "<script>window.location='index.php';</script>";
  }


  if (isset($_POST['btnfbsubmit'])) {
      $feedbackdate=$nowdate;
      $feedbackcomment=$_POST['txtfbcomment'];

      $insertfeedback="INSERT INTO Feedback
          (UserID,FeedbackDate,Comment) values
          ('$userid','$feedbackdate','$feedbackcomment')";
        $insertfeedbackrun=mysqli_query($connection,$insertfeedback);
        if ($insertfeedbackrun) {
          echo "<script>window.alert('Successful Feedback')</script>";
          echo "<script>window.location='userfeedback.php'</script>";
        }else{
          echo mysqli_error($connection);
          echo "<script>window.alert('Run insert feedback query failed!')</script>";
          echo "<script>window.location='userfeedback.php'</script>";
        }
  }
 ?>
<!-- --------------------------------------------------------- -->
<section class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 bg-dark p-3 text-center">
            <h2 class="section-title mb-3">Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-once="false">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-house"></span></div>
              <div>
                <h3>Air Pollution Statistics</h3>
                <p>In the United States, the Environmental Protection Agency (EPA) collects air pollution statistics. It's important to study these statistics because they show how polluted the air has become in various places around the country. Generally, the statistics reflect the levels of six pollutants, namely, ozone, nitrogen dioxide, sulfur dioxide, carbon monoxide, lead, and particulate matter. There are maximum allowable limits for each pollutant.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100"  data-aos-once="false">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-flat"></span></div>
              <div>
                <h3>Natural Causes of Air Pollution</h3>
                <p>Other than human actions, air pollution is also caused by natural events. Biological decay and volcanoes release natural sulfur dioxides and nitrogen oxides, affecting air quality in negative ways. Most of the ozone around the ground level is formed when chemical reactions occur in the sunlight but there's also about 10 to 15 percent transported</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300"  data-aos-once="false">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-home"></span></div>
              <div>
                <h3>Health Effects</h3>
                <p>Air pollution can cause long-term and short-term health effects. It's found that the elderly and young children are more affected by air pollution. Short-term health effects include eye, nose, and throat irritation, headaches, allergic reactions, and upper respiratory infections. Some long-term health effects are lung cancer, brain damage, liver damage, kidney damage, heart disease, and respiratory disease.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="0"  data-aos-once="false">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-flat"></span></div>
              <div>
                <h3>Environmental Effects</h3>
                <p>Air pollution causes damage to crops, animals, forests, and bodies of water. It also contributes to the depletion of the ozone layer, which protects the Earth from the sun's UV rays. Another negative effect of air pollution is the formation of acid rain, which harms trees, soils, rivers, and wildlife. Some of the other environmental effects of air pollution are haze, eutrophication, and global climate change.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100"  data-aos-once="false">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-location"></span></div>
              <div>
                <h3>Human Causes of Air Pollution</h3>
                <p>Human activities have been highlighted as the major causes of air pollution, especially in the cities. To support a larger population, there's a need for energy production, transportation, and industries, resulting in the emission of harmful chemicals into the atmosphere. A list of the human causes of air pollution includes vehicles, domestic smoke</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300"  data-aos-once="false">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-mobile-phone"></span></div>
              <div>
                <h3>Providing Information</h3>
                <p>There are some things you can do to help keep the air cleaner. Generally, it's important to conserve energy because sources of energy like electricity, diesel, gasoline, and wood would contribute to air pollution. Rather than driving a car or riding a motorcycle, you can ride a bicycle or walk to perform errands. Try to reduce trips and use public transportation. Gas-powered garden equipment should be avoided</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- ---------------------------------------------------------------------------------- -->
<section class="site-section bg-dark bg-image" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-md-2 ml-5">
            
          </div>
          <div class="col-md-7 mb-5">
              <form action="#" class="p-5 bg-white" method="post">
              
              <h2 class="h4 text-black mb-5">Feedback Form</h2> 
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="date">Date of Your Feedback</label> 
                  <input type="text" disabled id="date" class="form-control" value="<?php echo"$nowdate" ?>" name="txtfbdate">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="txtfbcomment" id="message" cols="30" rows="7" class="form-control" placeholder="Write your feedback here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Submit" name="btnfbsubmit" class="btn btn-primary btn-md text-white">
                </div>
              </div>
  
            </form>
          </div>
        </div>
      </div>
    </section>
<!-- ------------------------------------------------------------- -->
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
      

                    echo "<div class='col-md-6 mb-4'>";
              echo "<div class='ftco-testimonial-1'>";
              echo "<div class='ftco-testimonial-vcard d-flex align-items-center mb-4'>";
              echo "<img src=".$varuimg." alt='Image' class='img-fluid mr-3'>";
              echo "<div>";
              echo "<h3 class='text-black'><b>".$varuname."</b></h3>";
              echo "<span class='mr-5 text-black'>".$varuemail."</span>";
              echo "
                    <span class='text-black'>".$varfeedbackdate."</span>
                    </div>
                  </div>
                  <div>
                    <p class='text-black'>".$varfeedbackcomment."</p>
                  </div>
                </div>
              </div>
              ";
              }      
        ?>
              <!-- <div class="col-md-6 mb-4">
                  <div class="ftco-testimonial-1">
                      <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                          <h3>James Phelps</h3>
                          <span class="mr-5">Customer</span>
                          <span>Customer</span>
                        </div>
                      </div>
                      <div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum nisi amet necessitatibus. A, provident aperiam!</p>
                      </div>
                    </div>
              </div> -->
            
        </div>
      </div>
    </section>

    

<!-- ---------------------------------------------------------- -->
 <?php 
 	include('footer.php');
  ?>