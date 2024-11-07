<?php
	session_start();
	include ('connect.php');
	include('uheader.php');
  include ('BrowsingFunction.php');
  recordBrowse("http://127.0.0.1:60/MIN_KO_KO_LINN_DW_AirPollution_Asg/PageHome.php"); 
  
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
 <!-- ---------------------------------------------------------------- -->
   <div class="site-section" id="properties-section" data-aos="fade-right" data-aso-once="false">
   	        <div class="container">
   	        	  <h2 class="section-title mb-5">"Latest Events about Air Pollution"</h2>
   	        </div>
      <div class="container">
        <div class="row large-gutters">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">
                <a href="property-single.html" class="d-inline-block mb-4"><img src="AllImage/homeair1.jpg" alt="FImageo" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3>Bangladesh</h3>
                  <p>Bangladesh air quality index (AQI) and PM2.5 air pollution</p>
                  <strong><u>Pollution-166,368,149</u></strong>
                </div>
  
              </div> 
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                  <div class="ftco-media-1-inner">
                    <a href="property-single.html" class="d-inline-block mb-4"><img src="AllImage/homeair2.jpg" alt="Image" class="img-fluid"></a>
                    <div class="ftco-media-details">
                      <h3>Pakistan</h3>
                      <p>Pakistan air quality index (AQI) and PM2.5 air pollution</p>
                      <strong><u>200,813,818</u></strong>
                    </div>
      
                  </div> 
                </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                  <div class="ftco-media-1-inner">
                    <a href="property-single.html" class="d-inline-block mb-4"><img src="AllImage/homeair3.jpg" alt="Image" class="img-fluid"></a>
                    <div class="ftco-media-details">
                      <h3>Mongolia</h3>
                      <p>Mongolia air quality index (AQI) and PM2.5 air pollution</p>
                      <strong><u>3,121,772</u></strong>
                    </div>
      
                  </div> 
                </div>
          </div>
      </div>
    </div>
  </div>
 	<!-- ---------------------------------------------------------------- -->
 	<section class="site-section" id="about-section">
      <div class="container">
        
        <div class="row large-gutters">
          <div class="col-lg-6 mb-0" data-aos="fade-right" data-aso-once="false">

              <div class="owl-carousel slide-one-item with-dots">
					<video width="100%" controls>
						  <source src="video/vdo2.mp4" type="video/mp4">
						  <source src="video/vdo2.ogg" type="video/ogg">
						  Your browser does not support the video tag.
					</video>
                </div>
          </div>
          <div class="col-lg-6 ml-auto" data-aos="fade-up" data-aos-once="false">
            
            <h2 class="section-title mb-3">Air Pollution</h2>
                <p class="lead">About 1,500 active volcanoes can be found around the world. Learn about the major types of volcanoes, the geological process behind eruptions, and where the most destructive volcanic eruption ever witnessed occurred.</p>

                <ul class="list-unstyled ul-check success">
                  <li>Inhaling air pollution takes away at least 1-2 years of a typical human life.</li>
                  <li> It has effects as small as burning eyes and itchy throat to as large as breathing problems and death.</li>
                  <li>Pollutants that are released into the air, as opposed to land and water pollutants, are the most harmful.</li>
                  <li>Deaths caused by air pollution cost the European Union €161 billion.</li>
                </ul>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
            
          </div>
        </div>
      </div>
    </section>
    <!-- ----------------------------------------------------------- -->
    <!-- ---------------------------------------------------------------- -->
 	<section class="site-section" id="about-section">
      <div class="container">
      	<div class="row large-gutters">
        <div class="col-lg-6 mb-0" data-aos="fade-up" data-aos-once="false">
            
            <h2 class="section-title mb-3">Air pollution – a major global public health issue</h2>
                <p class="lead">Air pollution kills an estimated seven million people worldwide every year. WHO data shows that 9 out of 10 people breathe air containing high levels of pollutants. WHO is working with countries to monitor air pollution and improve air quality.</p>

                <ul class="list-unstyled ul-check success">
                  <li>Placeat maxime animi minus</li>
                  <li>Dolore qui placeat maxime</li>
                  <li>Consectetur adipisicing</li>
                  <li>Lorem ipsum dolor</li>
                  <li>Placeat molestias animi</li>
                </ul>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
            
          </div>
          
        
          <div class="col-lg-6 ml-auto" data-aos="fade-left" data-aso-once="false">

              <div class="owl-carousel slide-one-item with-dots">
                  <video width="100%" controls>
						  <source src="video/vdo1.mp4" type="video/mp4">
						  <source src="video/vdo1.ogg" type="video/ogg">
						  Your browser does not support the video tag.
					</video>
                </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ----------------------------------------------------------- -->
    <!-- ---------------------------------------------------------------- -->
 	<section class="site-section" id="about-section">
      <div class="container">
        
        <div class="row large-gutters">
          <div class="col-lg-6 mb-0" data-aos="fade-right" data-aso-once="false">

              <div class="owl-carousel slide-one-item with-dots">
                  <video width="100%" controls>
						  <source src="video/vdo3.mp4" type="video/mp4">
						  <source src="video/vdo3.ogg" type="video/ogg">
						  Your browser does not support the video tag.
					</video>
                </div>
          </div>
          <div class="col-lg-6 ml-auto" data-aos="fade-up" data-aos-once="false">
            
            <h2 class="section-title mb-3">Environmental Pollution</h2>
                <p class="lead">Environmental pollution is contamination of air, water and land from man-made waste. Pollution leads to depletion of the ozone layer, global warming and climate change. Air pollution is the release of chemicals and particles into the atmosphere. Water pollution includes surface runoff, leakage into groundwater, liquid spills, wastewater discharge and littering. If toxins are spilled on the ground or if an underground storage tank leaks, soil can become contaminated. Well known contaminants include herbicides and pesticides.</p>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
            
          </div>
        </div>
      </div>
    </section>
    <!-- ----------------------------------------------------------- -->
    <hr>
    <section class="site-section" id="agents-section" >
      <div class="container">
        <div class="row mb-5"  data-aos="zoom-in" data-aos-once="false">
          <div class="col-md-12 text-left">
            <h2 class="section-title mb-3">About Us</h2>
            <p class="lead">Along with its rapid development since 2011, Myanmar has been experiencing a rise in air pollution in urban areas. Yangon and Mandalay are experiencing increased urbanization from rural-urban migration and growing density as the urban population growth has been faster than spatial growth. In 2017, air pollution is estimated to attribute to more than 45,000 deaths in Myanmar. As a risk factor for death, air pollution is higher in Myanmar than in other countries in the region, almost twice the average for Southeast Asia. Yet actual data with high reliability on air quality in Myanmar is lacking, and arrangements for monitoring of air quality and pollution control are still in their infancy.</p>
          </div>
        </div>
        <h2 class="section-title mb-5">Admins of organization</h2>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up"
     data-aos-duration="0" data-aos-once="false">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2">Allison Holmes</h3>
                <span class="position">Manager</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up"
     data-aos-duration="5000" data-aos-once="false">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2">Dave Simpson</h3>
                <span class="position">Advisor</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up"
     data-aos-duration="7000" data-aos-once="false">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2">Ben Thompson</h3>
                <span class="position">Senior Staff</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
    		<div class="col-md-2">
    			
    		</div>
    		<div class="col-md-4 ml">
    			<p><a href="https://waqi.info/" class="btn btn-primary mr-4 mb-2">Learn More About Air pollution in waqi</a></p>
    		</div>
    		<div class="col-md-4">
    			<p><a href="https://www.who.int/airpollution/publications/aqg2005/en/" class="btn btn-primary mr-2 mb-2">View In WHO air pollution guideline</a></p>
    		</div>
    		<div class="col-md-2">
    			
    		</div>
    	</div>
    </section>

    <section class="py-5 bg-primary site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3 text-black">How It Affects</h2>
          </div>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-once="false" data-aso-duration="10000">
          <div class="col-md-4 text-center">
            <div class="pr-5 first-step">
              <span class="text-black">01.</span>
              <span class="custom-icon flaticon-house text-black"></span>
              <h3 class="text-black">Global warming</h3>
              <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5 second-step">
              <span class="text-black">02.</span>
              <span class="custom-icon flaticon-coin text-black"></span>
              <h3 class="text-dark">More Cost.</h3>
              <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="text-black">03.</span>
              <span class="custom-icon flaticon-home text-black"></span>
              <h3 class="text-dark">Health of People.</h3>
              <p class="text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>  
    </section>

    <section class="site-section bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Ask for Admin</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5 bg-light">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Get In Touch</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Corner of Alone Street and Pyay Street, Dagon Township, Yangon Region.</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">081-202226/081</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">mandalay@pds.hluttaw.mm</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>


    <center>
    <div class="fb-page" data-href="https://www.facebook.com/WHO/?__tn__=%2Cd%3C-R&amp;eid=ARBWZWGTNWWJYswg4LAxdwYrC3jlsIX77VRjSGv0MulDeimFIkdgS3wnH3vJ9pn7pK_5IEqAtnc6l-E2" data-tabs="" data-width="500" data-height="150" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/WHO/?__tn__=%2Cd%3C-R&amp;eid=ARBWZWGTNWWJYswg4LAxdwYrC3jlsIX77VRjSGv0MulDeimFIkdgS3wnH3vJ9pn7pK_5IEqAtnc6l-E2" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/WHO/?__tn__=%2Cd%3C-R&amp;eid=ARBWZWGTNWWJYswg4LAxdwYrC3jlsIX77VRjSGv0MulDeimFIkdgS3wnH3vJ9pn7pK_5IEqAtnc6l-E2">World Health Organization (WHO)</a></blockquote></div>
  </center>
  <hr>
  <center>
    <div class="fb-page" data-href="https://www.facebook.com/airqualityyangon/" data-tabs="" data-width="500" data-height="150" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/airqualityyangon/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/airqualityyangon/">Air Quality Yangon</a></blockquote></div>
  </center>
<hr>
    <!-- ---------------------------------------------------------- -->
 <?php 
 	include('footer.php');
  ?>