<?php require_once "head.php"; ?> 

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                 <?php 
                                    $viewquery1 = " SELECT * FROM service";
                                    $viewresult1 = mysqli_query($con,$viewquery1); 
                                    $service = mysqli_num_rows($viewresult1);
                                    ?>
                                <h3 class="card-title text-white">Services</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $service; ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fas fa-store"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <?php 


                                  $year = 0;
                                  $viewquery12 = " SELECT * FROM appinment where payment = 'Paid' AND YEAR(trn_date) = YEAR(CURRENT_DATE()) ";
                                  $viewresult12 = mysqli_query($con,$viewquery12);

                                  while ($row=mysqli_fetch_assoc($viewresult12)) {
                                    $year = $year + $row['amount'];
                                  } 



                                  ?>
                                <h3 class="card-title text-white">Year Income</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">Rs <?php echo $year; ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <?php 
                                    $viewquery = " SELECT * FROM customer";
                                    $viewresult = mysqli_query($con,$viewquery); 
                                    $customers = mysqli_num_rows($viewresult);
                                    ?>
                                <h3 class="card-title text-white">Customers</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $customers; ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <?php 

                                  $today = 0;
                                  $viewquery1 = " SELECT * FROM appinment where payment = 'Paid' AND MONTH(trn_date) = MONTH(CURRENT_DATE()) AND YEAR(trn_date) = YEAR(CURRENT_DATE()) ";
                                  $viewresult1 = mysqli_query($con,$viewquery1);

                                  while ($row=mysqli_fetch_assoc($viewresult1)) {
                                    $today = $today + $row['amount'];
                                  } ?>
                                <h3 class="card-title text-white">Today Income</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">Rs. <?php echo $today; ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; 2021. Salon Usha,Pundaluoya Designed & Developed by : S.G.Shiranthi Nirmala | SEU/IS/16/MIT/067</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>