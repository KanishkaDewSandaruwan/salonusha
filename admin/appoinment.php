<?php require_once "head.php"; ?> 

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                        <div class="col-md-12">
                            <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Appontments</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                               <table class="table v-middle" style="text-align: center;">
                                    <thead>
                                        <tr class="bg-dark">
                                            <th class="border-top-0 text-white">Action</th>
                                            <th class="border-top-0 text-white">Service</th>
                                            <th class="border-top-0 text-white">Customer</th>
                                            <th class="border-top-0 text-white">Appoinment Date </th>
                                            <th class="border-top-0 text-white">Check In Date</th>
                                            <th class="border-top-0 text-white">Check Out Date</th>
                                            <th class="border-top-0 text-white">Amount</th>

                                            <th class="border-top-0 text-white">Payment</th>
                                            <th class="border-top-0 text-white">Progress</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                      $count=1;
                                        $viewquery = " SELECT * FROM appinment order by trn_date desc";
                                        $viewresult = mysqli_query($con,$viewquery);
                                    
                                         ?>
                                        <tbody>
                                          <?php while($row = mysqli_fetch_assoc($viewresult)) { 

                                                $viewquery1 = " SELECT * FROM service where service_id='".$row['service_id']."'";
                                                $viewresult1 = mysqli_query($con,$viewquery1);
                                                $row1 = mysqli_fetch_assoc($viewresult1);

                                                $viewquery2 = " SELECT * FROM customer where customer_id='".$row['customer_id']."'";
                                                $viewresult2 = mysqli_query($con,$viewquery2);
                                                $row2 = mysqli_fetch_assoc($viewresult2);

                                                 $image = $row1['image'];
                                                $image_src = "../upload/service/".$image;

                                                $content = "You Have Apponment on ".$row['eppinment_date']."  at ".$row['eppinment_time']."";
                                                $subject = "to remind Your Appoinment";
      
                                                ?>
                                                <tr>
                                                    <td>
                                                      <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <?php if($row['payment'] == 'Paid'){ ?>
                                                          <a class="dropdown-item" href="manage.php?accept=<?php echo $row['appoinment_id']; ?>"><i class="fas fa-check-circle"> Accept</i></a>
                                                      <?php } ?>
                                                          <a class="dropdown-item" href="manage.php?cancel=<?php echo $row['appoinment_id']; ?>"><i class="fas fa-times-circle"> Cancel</i></a>
                                                          <a class="dropdown-item" href="delete.php?appoinment_id=<?php echo $row['appoinment_id']; ?>"><i class="fas fa-trash-alt"> Delete</i></a>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td><?php echo $row1['title']; ?><br><?php echo $row1['hour']; ?><br><img style="width: 150px" src='<?php echo $image_src; ?>'></td>
                                                    <td><?php echo $row2['name']; ?> <br><?php echo $row2['address']; ?><br><?php echo $row2['phone']; ?></td>
                                                    <td><?php echo $row['eppinment_date']; ?></td>
                                                    <td><?php echo $row['eppinment_time']; ?></td>
                                                    <td><?php echo $row['eppinment_end_time']; ?></td>
                                                    <td><?php echo $row['amount']; ?></td>
                                                    <td><?php echo $row['payment']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>
                                                </tr>
                                            <?php   $count++;   }?>
                                    </tbody>
                                </table>
                            </div>
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