    
<?php $viewquery = "SELECT * FROM about";
$viewresult = mysqli_query($con,$viewquery);
$row1 = mysqli_fetch_assoc($viewresult);?>

    <footer class="site-footer">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <div class="mb-5">
              <a href="<?php echo $row1['facebook'] ?>" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="<?php echo $row1['twiter'] ?>" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="<?php echo $row1['instragram'] ?>" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            </div>

            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved, Salon Usha,Pundaluoya <br> Designed & Developed by : S.G.Shiranthi Nirmala | SEU/IS/16/MIT/067
            </p>
          </div>
          
        </div>
      </div>
    </footer>