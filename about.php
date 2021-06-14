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
              <h2 class="text-white font-weight-light mb-2 display-1">About Us</h2>

              
            </div>
          </div>
        </div>
      </div>  

    </div>



    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7">
            <h2 class="site-section-heading font-weight-light text-black text-center">Our Barbers</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 text-center mb-5" data-aos="fade-up">
            <img src="images/person_1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">Jean Smith</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
            <p>
              <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
            </p>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5" data-aos="fade-up">
            <img src="images/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">Claire Smith</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
            <p>
              <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
            </p>
          </div>
          <div class="col-md-6 col-lg-4 text-center mb-5" data-aos="fade-up">
            <img src="images/person_4.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
            <h2 class="text-black font-weight-light mb-4">John Smith</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
            <p>
              <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <img src="<?php echo $image_src2; ?>" width="100%" alt="Image" class="img-md-fluid">
          </div>
          <div class="col-lg-6 bg-white p-md-5 align-self-center">
            <h2 class="display-1 text-black line-height-1 site-section-heading mb-4 pb-3">Welcome! Salon Usha</h2>
            <p class="text-black lead"><em>&ldquo;<?php echo $row1['description']; ?>&rdquo;</em></p>
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