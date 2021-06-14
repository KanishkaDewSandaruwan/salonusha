<?php require_once "head.php"; ?> 

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
                        <button class="d-none d-sm-inline-block btn btn-lg btn-dark shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="fas fa-plus fa-sm text-white-50"></i> New</button>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12">
                            <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Gallery List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $viewquery = " SELECT * FROM galary";
                                        $viewresult = mysqli_query($con,$viewquery);
                                        while($row = mysqli_fetch_assoc($viewresult)) { 

                                            $image = $row['galary_image'];
                                            $image_src = "../upload/gallery/".$image;?>
                                        <tr>
                                            <td><img width="100%" src='<?php echo $image_src; ?>'></td>
                                            <td>
                                                <div class="dropdown show">
                                                  <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                  </a>

                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="delete.php?image_id=<?php echo $row['image_id']; ?>"><i class="fas fa-trash-alt"></i> Delete</a>
                                                  </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
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
         <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                <h1 style="font-family: \"Times New Roman\",Times, serif; text-align:center" class ="text-danger text-center" >Add New Image</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">

                                   <br>
                      Select Galary image to upload:<br>
                        <input type="file" name="file" /><br><br>
   

                              <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Save changes</button>

                                     <?php
                        if(isset($_POST['submit'])){

                          if(isset($_FILES['file']) && !empty($_FILES['file']['name'])) { 
                                $file = $_REQUEST['file'];

                                $name = $_FILES['file']['name'];
                                $target_dir = "../upload/gallery/";
                                $target_file = $target_dir . basename($_FILES["file"]["name"]);
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                $extensions_arr = array("jpg","jpeg","png","gif");

                                        if (in_array($imageFileType,$extensions_arr)) {

                                                move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

                                                $q1="INSERT INTO galary(galary_image) values('$name')";
                                                      $res1=mysqli_query($con,$q1);
                                                      if ( $res1)
                                                      {

                                                           echo '<script>alert("Image adding to Gallery is Scussessfully.");window.location.href="gallery.php"; </script>';
                                                      }else{
                                                        echo "<script>alert(\"Image adding to Gallery is Not Scussess\");</script>";
                                                      }

                                        }
                                      
                          }else{
                            echo "<script>alert(\"Please Select image to upload\");</script>";
                          }
                      } ?>
                  </div>
                </form>
              </div>
            </div>
        
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