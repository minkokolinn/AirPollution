<?php
	session_start();
	include ('connect.php');
	include('uheader.php');
include ('BrowsingFunction.php');
  recordBrowse("http://127.0.0.1:60/MIN_KO_KO_LINN_DW_AirPollution_Asg/userfaq.php"); 
  
	if (isset($_SESSION['uid'])) {
	    $userid=$_SESSION['uid'];
	    $selectqanda="select * from QandA";
	    $selectqandarun=mysqli_query($connection,$selectqanda);
	    // $countofqanda=mysqli_num_row($selectqandarun);
	    $countofqanda=mysqli_num_rows($selectqandarun);
  }else{
    echo "<script>window.alert('Please Login Account Firstly!.');</script>";
    echo "<script>window.location='index.php';</script>";
  }
 ?>
<!-- ---------------------------------------------- -->
<section>
      <div class="container">
      	<div class="row mb-5">
          <div class="col-12 mt-5 bg-dark p-3 text-center">
            <h2 class="section-title mb-3">Questions & Answers</h2>
          </div>
        </div>
      	<div class="row mt-5">
      		
      	</div>
      	<h3 class="mb-5 ml-5"><?php echo "$countofqanda"; ?> Questions</h3>
        <div class="row">
        
        	<?php 
        		while ($ret=mysqli_fetch_array($selectqandarun)) {
        			$varqnauserid=$ret['UserID'];
        			$varqnaquestion=$ret['Question'];
        			$varqnadate=$ret['QuestionDate'];
        			$varqnaanswer=$ret['Answer'];

        			$selectuser="select * from Users where UserID=$varqnauserid";
        			$runselectuser=mysqli_query($connection,$selectuser);
        			$ret2=mysqli_fetch_array($runselectuser);
        			$varuname=$ret2['UserName'];
        			$varuimg=$ret2['ProfileImage'];

        	 ?>
		<div class="col-md-10 blog-content ml-5">
            <div class="pt-1">
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?php echo($varuimg) ?>" alt="Image placeholder" style="width: 80%; height: auto;">
                  </div>
                  <div class="comment-body">
                    <h3><?php echo "$varuname"; ?></h3>
                    <div class="meta"><u><?php echo "$varqnadate"; ?></u></div>
                    <p><b>Question : <?php echo "$varqnaquestion"; ?></b></p>
                    <p>Answer : <?php 
                    if ($varqnaanswer=="") {
                    	echo "No Answer";
                    }else{
                    	echo "$varqnaanswer";
                    }
                     ?></p>
                  </div>
                </li>
              </ul>
            </div>
        	</div>

        	 <?php 
        		}
        	  ?>
              <!-- END comment-list -->
          </div>
      </div>
    </section>
<!-- ------------------------------------------------- -->
 <?php 
 	include('footer.php');
  ?>