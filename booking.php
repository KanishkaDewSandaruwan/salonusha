<?php require_once "header.php"; ?>
  

<?php 
$home_query = "SELECT * FROM details";
$home_query_result = mysqli_query($con, $home_query);
$row = mysqli_fetch_assoc($home_query_result);
$subpage_image = $row['subpage_image'];
$image_src1 = "upload/home/".$subpage_image; ?>
  

   

    <div class="slide-one-item home-slider owl-carousel">
   
      <div class="site-blocks-cover inner-page-cover" style="background-image: url(<?php echo $image_src1; ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h2 class="text-white font-weight-light mb-2 display-1">Online Booking</h2>

              
            </div>
          </div>
        </div>
      </div>  

    </div>

    <?php if(isset($_REQUEST['service_id'])){ ?>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form class="p-5 bg-white" method="POST">
              <h2 class="mb-4 site-section-heading">Book Now</h2>


              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="date">Date of visit</label> 
                  <input type="date" id="" name="checkindate" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Time</label> 
                  <input type="time" id="time" name="checktime" class="form-control" placeholder="Time">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Make Booking" class="btn btn-dark py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
            <?php
                  if(isset($_POST['submit'])){

                    if(!isset($_SESSION['customer_id'])){
                      echo "<script type=\"text/javascript\">window.location= \"login.php\";</script>";
                    }

                    $checkindate = $_REQUEST['checkindate'];
                    $checktime = $_REQUEST['checktime'];
                    $service_id = $_REQUEST['service_id'];

                    $customer_id = $_SESSION['customer_id'];
                    $cdate = date("Y/m/d m:H:s");

                    $query3="SELECT * FROM about";
                    $sql3=mysqli_query($con,$query3);
                    $row3=mysqli_fetch_assoc($sql3);

                    $close = $row3['close_time'];
                    $open = $row3['open_time'];

                    $total = 0;


                    $query1="SELECT * FROM service WHERE service_id='$service_id'";
                    $sql1=mysqli_query($con,$query1);
                    $row=mysqli_fetch_assoc($sql1);

                    $hour = $row['hour'];
                    $time = date('H:i', strtotime($checktime.'+'.$hour.' hour'));

                    $total = $row['price'];
                    if (!empty($checkindate)) {
                      if (!empty($checktime)) {
                              if (($open <= $checktime) && ($checktime <= $close)) {
                                if (new DateTime() <= new DateTime($checkindate)) {

                                       $query2="SELECT * FROM appinment WHERE service_id = '$service_id' AND eppinment_date = '$checkindate' AND NOT(eppinment_end_time < '$checktime' OR eppinment_time  > '$time') ";
                                       $sql2=mysqli_query($con,$query2);

                                        if(mysqli_num_rows($sql2) > 0)
                                        {
                                          echo "<script type=\"text/javascript\"> alert(\"This Day is Not Available\");</script>";
                                        }
                                        else
                                        {
                                          $q1="INSERT INTO appinment(eppinment_date,eppinment_time,eppinment_end_time,trn_date,service_id,customer_id,status,payment,amount) values('$checkindate','$checktime','$time','$cdate','$service_id','$customer_id','Pending','Pending','$total')";
                                                  $res1=mysqli_query($con,$q1);
                                            if ( $res1) {

                                                $query3="SELECT * FROM appinment WHERE service_id = '$service_id' AND eppinment_date = '$checkindate'";
                                                $sql3=mysqli_query($con,$query3);
                                                $row8=mysqli_fetch_assoc($sql3);
                                                $appoinment_id = $row8['appoinment_id'];

                                                 echo '<script>alert("Appinment Adding is Scussessfully. Please Make Payment"); window.location.href="pay.php?total='.$total.'&appoinment_id='.$appoinment_id.'"; </script>';
                                                
                                            }else{
                                              echo "<script>alert(\"Appinment is Not Scussess\");</script>";
                                            }

                                        }

                                }else{echo "<script type=\"text/javascript\"> alert(\"Start Date need to future day\");</script>";}
                              }else{echo "<script type=\"text/javascript\"> alert(\"Salon is closed in this time please take anoth time\");</script>";}
                      }else{echo "<script type=\"text/javascript\"> alert(\"Please enter Appinment Time\");</script>";}
                    }else{echo "<script type=\"text/javascript\"> alert(\"Please enter Appinment Date\");</script>";}

                } ?>
          </div>
          <div class="col-md-5">
            <?php 
            $viewquery = " SELECT * FROM customer where customer_id = '".$_SESSION['customer_id']."'";
            $viewresult = mysqli_query($con,$viewquery);
            $row = mysqli_fetch_assoc($viewresult); ?>
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Name</p>
              <p class="mb-4"><?php echo $row['name']; ?></p>

              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4"><?php echo $row['address']; ?></p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+94 <?php echo $row['phone']; ?></a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-4"><a href="#"><?php echo $row['email']; ?></a></p>

              <p class="mb-0 font-weight-bold ">Change Details</p>
              <p class="mb-0"><a href="profile.php">Click Here..</a></p>

            </div>

          </div>
        </div>
      </div>
    </div>

  <?php }else{ ?>
            <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form class="p-5 bg-white" method="POST">
              <h2 class="mb-4 site-section-heading">Book Now</h2>


              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="date">Date of visit</label> 
                  <input type="date" id="" name="checkindate" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="email">Time</label> 
                  <input type="time" id="time" name="checktime" class="form-control" placeholder="Time">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="treatment">Service You Want</label> 
                  <select name="treatment" id="treatment" class="form-control">
                    <option value=""></option>
                    <?php 
                      $q3 = "SELECT * FROM service";
                        $res3 = mysqli_query($con,$q3);
                        $c=1;
                        while($row=mysqli_fetch_assoc($res3)){ ?>

                    <option value="<?php echo $row['service_id']; ?>"><?php echo $row['title']; ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Make Booking" class="btn btn-dark py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
            <?php
                  if(isset($_POST['submit'])){

                    if(!isset($_SESSION['customer_id'])){
                      echo "<script type=\"text/javascript\">window.location= \"login.php\";</script>";
                    }

                    $checkindate = $_REQUEST['checkindate'];
                    $checktime = $_REQUEST['checktime'];
                    $service_id = $_REQUEST['treatment'];

                    $customer_id = $_SESSION['customer_id'];
                    $cdate = date("Y/m/d m:H:s");

                    $query3="SELECT * FROM about";
                    $sql3=mysqli_query($con,$query3);
                    $row3=mysqli_fetch_assoc($sql3);

                    $close = $row3['close_time'];
                    $open = $row3['open_time'];

                    $total = 0;


                    $query1="SELECT * FROM service WHERE service_id='$service_id'";
                    $sql1=mysqli_query($con,$query1);
                    $row=mysqli_fetch_assoc($sql1);

                    $hour = $row['hour'];
                    $time = date('H:i', strtotime($checktime.'+'.$hour.' hour'));

                    $total = $row['price'];
                    if (!empty($checkindate)) {
                      if (!empty($checktime)) {
                              if (($open <= $checktime) && ($checktime <= $close)) {
                                if (new DateTime() <= new DateTime($checkindate)) {

                                       $query2="SELECT * FROM appinment WHERE service_id = '$service_id' AND eppinment_date = '$checkindate' AND NOT(eppinment_end_time < '$checktime' OR eppinment_time  > '$time') ";
                                       $sql2=mysqli_query($con,$query2);

                                        if(mysqli_num_rows($sql2) > 0)
                                        {
                                          echo "<script type=\"text/javascript\"> alert(\"This Day is Not Available\");</script>";
                                        }
                                        else
                                        {
                                          $q1="INSERT INTO appinment(eppinment_date,eppinment_time,eppinment_end_time,trn_date,service_id,customer_id,status,payment,amount) values('$checkindate','$checktime','$time','$cdate','$service_id','$customer_id','Pending','Pending','$total')";
                                                  $res1=mysqli_query($con,$q1);
                                            if ( $res1) {

                                                $query3="SELECT * FROM appinment WHERE service_id = '$service_id' AND eppinment_date = '$checkindate'";
                                                $sql3=mysqli_query($con,$query3);
                                                $row8=mysqli_fetch_assoc($sql3);
                                                $appoinment_id = $row8['appoinment_id'];

                                                 echo '<script>alert("Appinment Adding is Scussessfully. Please Make Payment"); window.location.href="pay.php?total='.$total.'&appoinment_id='.$appoinment_id.'"; </script>';
                                                
                                            }else{
                                              echo "<script>alert(\"Appinment is Not Scussess\");</script>";
                                            }

                                        }

                                }else{echo "<script type=\"text/javascript\"> alert(\"Start Date need to future day\");</script>";}
                              }else{echo "<script type=\"text/javascript\"> alert(\"Salon is closed in this time please take anoth time\");</script>";}
                      }else{echo "<script type=\"text/javascript\"> alert(\"Please enter Appinment Time\");</script>";}
                    }else{echo "<script type=\"text/javascript\"> alert(\"Please enter Appinment Date\");</script>";}

                } ?>
          </div>
          <div class="col-md-5">
            <?php 
            $viewquery = " SELECT * FROM customer where customer_id = '".$_SESSION['customer_id']."'";
            $viewresult = mysqli_query($con,$viewquery);
            $row = mysqli_fetch_assoc($viewresult); ?>
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Name</p>
              <p class="mb-4"><?php echo $row['name']; ?></p>

              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4"><?php echo $row['address']; ?></p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+94 <?php echo $row['phone']; ?></a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-4"><a href="#"><?php echo $row['email']; ?></a></p>

              <p class="mb-0 font-weight-bold ">Change Details</p>
              <p class="mb-0"><a href="profile.php">Click Here..</a></p>

            </div>

          </div>
        </div>
      </div>
    </div>

  <?php } ?>

    <div class="site-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-4 text-black">We want your hair to look fabulous</h2>
            <p class="mb-0"><a href="services.php" class="btn btn-primary py-3 px-5 text-white">Visit Our Salon Now</a></p>
          </div>
        </div>
      </div>
    </div>

<?php require_once "footer.php"; ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>