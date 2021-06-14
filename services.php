<?php require_once "header.php"; ?>
  

       <?php 
$home_query = "SELECT * FROM details";
$home_query_result = mysqli_query($con, $home_query);
$row = mysqli_fetch_assoc($home_query_result);
$subpage_image = $row['subpage_image'];
$image_src1 = "upload/home/".$subpage_image; ?>

<?php $viewquery = "SELECT * FROM about";
$viewresult = mysqli_query($con,$viewquery);
$row1 = mysqli_fetch_assoc($viewresult);
$about_image = $row1['image'];
$image_src2 = "upload/home/".$about_image; ?> 

    <div class="slide-one-item home-slider owl-carousel">
   
      <div class="site-blocks-cover inner-page-cover" style="background-image: url(<?php echo $image_src1; ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h2 class="text-white font-weight-light mb-2 display-1">See Our Services!</h2>

              <p><a href="booking.php" class="btn btn-black py-3 px-5">Book Now!</a></p>
            </div>
          </div>
        </div>
      </div>  

    </div>



    <div class="site-section">
      <div class="container-fluid">
        
        <div class="row">
          <?php 
            $services="SELECT * FROM service";
            $query1 = mysqli_query($con,$services); 
            $count = 0;
            while ($row3 = mysqli_fetch_assoc($query1)) { 
            $productimage = $row3['image'];
            $productimage_src = "upload/service/".$productimage; ?>

          <div class="col-md-6 col-lg-4 text-center mb-5 mb-lg-5">
            <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
              <img style="height: 200px" src="<?php echo $productimage_src; ?>" class="img-responsive" alt=""> 
              <a href=""><h3 class="text-black h4 mt-2"><?php echo $row3['title']; ?></h3></a>
              <p><?php echo $row3['description']; ?></p>
              <p><strong class="font-weight-bold text-danger">Rs <?php echo $row3['price']; ?> | <?php echo $row3['hour']; ?> Hour</strong></p>
              <a href="booking.php?service_id=<?php echo $row3['service_id']; ?>" class="btn btn-dark col-md-10">Make Booking</a>
            </div>
          </div>

           <?php   $count++; } ?>
          

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