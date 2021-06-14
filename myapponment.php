<?php require_once "header.php"; 
require_once 'user.php';?>
  

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
              <h2 class="text-white font-weight-light mb-2 display-1">My Booking</h2>

              
            </div>
          </div>
        </div>
      </div>  

    </div>



    <div class="site-section bg-light">
      <div class="container-fluid">
            <div class="row">
         <div class="col-lg-12 mb-5 mb-lg-0">
                      <h1 class="text-danger text-uppercase">My Booking Details</h1><br><br>
                      <table class="table v-middle" style="text-align: center; font-size: 20px">
                                    <thead>
                                        <tr class="bg-danger" style="font-size: 15px;">
                                            <th class="border-top-0 text-white">Service</th>
                                            <th class="border-top-0 text-white">Appoinment Date </th>
                                            <th class="border-top-0 text-white">Check In Time</th>
                                            <th class="border-top-0 text-white">Check Out Out</th>
                                            <th class="border-top-0 text-white">Amount</th>

                                            <th class="border-top-0 text-white">Payment</th>
                                            <th class="border-top-0 text-whiten">Progress</th>
                                            <th class="border-top-0 text-white">Action</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                    <?php 
                                      $count=1;
                                      $id = $_SESSION['customer_id'];
                                        $viewquery = " SELECT * FROM appinment where customer_id = '$id' order by trn_date desc";
                                        $viewresult = mysqli_query($con,$viewquery);?>
                                          <?php while($row = mysqli_fetch_assoc($viewresult)) { 
                                                $service_id = $row['service_id'];

                                                $viewquery1 = " SELECT * FROM service where service_id='".$row['service_id']."'";
                                                $viewresult1 = mysqli_query($con,$viewquery1);
                                                $row1 = mysqli_fetch_assoc($viewresult1); 

                                                 $image = $row1['image'];
                                                $image_src = "upload/service/".$image;?>
                                                <tr>
                                                    <td><?php echo $row1['title']; ?><br><?php echo $row1['hour']; ?><br><img style="width: 150px" src='<?php echo $image_src; ?>'></td>
                                                    <td><?php echo $row['eppinment_date']; ?></td>
                                                    <td><?php echo $row['eppinment_time']; ?></td>
                                                    <td><?php echo $row['eppinment_end_time']; ?></td>
                                                    <td><?php echo $row['amount']; ?></td>
                                                    <td><?php echo $row['payment']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>
                                                    <td>
                                                        <?php if($row['status'] != 'Canceled'){ ?>
                                                         <div class="dropdown show" >
                                                            <a style="font-size: 20px" class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                              Action
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                              <a style="font-size: 20px" class="dropdown-item" href="manage.php?cancel=<?php echo $row['appoinment_id']; ?>"><i class="fas fa-trash-alt"> Cancel</i></a>
                                                              <?php if($row['payment'] != 'Paid'){ ?>
                                                              <a style="font-size: 20px" class="dropdown-item" href="pay.php?appoinment_id=<?php echo $row['appoinment_id']; ?>&total=<?php echo $row['amount']; ?>"><i class="fas fa-money-check-alt"> Pay</i></a>
                                                            <?php } ?>
                                                            </div>
                                                          </div>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php   $count++;   }?>
                                    </tbody>
                                </table>
                    </div>
          </div>
      </div>
    </div>


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