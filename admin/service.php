<?php require_once "head.php"; ?> 

<!--     Editor Plugins     -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Service</h1>
                        <button class="d-none d-sm-inline-block btn btn-lg btn-dark shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="fas fa-plus fa-sm text-white-50"></i> New</button>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12">
                            <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Service List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Headline</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Hours</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $viewquery = " SELECT * FROM service";
                                        $viewresult = mysqli_query($con,$viewquery);
                                        while($row = mysqli_fetch_assoc($viewresult)) { 

                                            $image = $row['image'];
                                            $image_src = "../upload/service/".$image;?>
                                        <tr>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['headline']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td><img width="100px" src='<?php echo $image_src; ?>'></td>
                                            <td><?php echo $row['price']; ?></td>
                                            <td><?php echo $row['hour']; ?></td>
                                            <td>
                                                <div class="dropdown show">
                                                  <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                  </a>

                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                     <a class="dropdown-item" href="edit_service.php?service_id=<?php echo $row['service_id']; ?>"><i class="fas fa-edit"></i> Edit</a>
                                                    <a class="dropdown-item" href="delete.php?service_id=<?php echo $row['service_id']; ?>"><i class="fas fa-trash-alt"></i> Delete</a>
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
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class="reg_form bg-light p-4 border rounded" action="" method="POST" enctype="multipart/form-data">

                                      <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <label for="code" class="a"><b>Service Title</b></label>
                                        <input type="text" class="form-control" name="title" placeholder="Service Title">
                                      </div>
                                    </div>


                                    <div class="form-row">
                                      <div class="form-group col-md-12">
                                        <label for="title" class="a"><b>Headline</b></label>
                                        <input type="text" class="form-control" name="headline" placeholder="Headline">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label for="desc"><b>Service Price </b></label>
                                      <input type="text" class="form-control" name="price" placeholder="Service Price ">
                                    </div>
                                    </div>

                                     <div class="form-row">
                                    <div class="form-group col-md-12">
                                      <label for="desc"><b>Service Hours </b></label>
                                      <input type="number" class="form-control" name="hour" placeholder="Service Hours ">
                                    </div>
                                    </div>

                                    Select image to upload:<br>
                                      <input type="file" name="file" /><br><br>

                                      <label for="title" class="a"><b>Description</b></label><br><br>
                                    <textarea id="summernote" name="editordata"></textarea>
                                        <script>
                                          $('#summernote').summernote({
                                            placeholder: 'Details About this Package',
                                            tabsize: 2,
                                            height: 120,
                                            toolbar: [
                                              ['style', ['style']],
                                              ['font', ['bold', 'underline', 'clear']],
                                              ['color', ['color']],
                                              ['para', ['ul', 'ol', 'paragraph']],
                                            ]
                                          });
                                        </script><br><br>
   

                              <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Save changes</button>

                                     <?php
                                    if(isset($_POST['submit'])){

                                      $title = $_REQUEST['title'];
                                      $headline = $_REQUEST['headline'];
                                      $price = $_REQUEST['price'];
                                      $editordata = $_REQUEST['editordata'];
                                      $hour = $_REQUEST['hour'];
                                      $cdate = date("Y/m/d m:H:s");

                                      $name = $_FILES['file']['name'];
                                      $target_dir = "../upload/service/";
                                      $target_file = $target_dir . basename($_FILES["file"]["name"]);
                                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                      $extensions_arr = array("jpg","jpeg","png","gif");


                                      if(!empty($title)){
                                        if(!empty($headline)){
                                            if(!empty($editordata)){
                                              if(!empty($price)){
                                                if(!empty($hour)){
                                                if(isset($_FILES['file']) && !empty($_FILES['file']['name'])) { 

                                                  $query2="SELECT * FROM service WHERE title='$title'";
                                                      $sql2=mysqli_query($con,$query2);

                                                      if(mysqli_num_rows($sql2)>0){
                                                          echo "<script>alert(\"This Service already Exsisted\");</script>";
                                                      }else{

                                                        if (in_array($imageFileType,$extensions_arr)) {
                                                            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                    
                                                          $q1="INSERT INTO service(title,description,image,price,headline,hour) values('$title','$editordata','$name','$price','$headline','$hour')";
                                                                $res1=mysqli_query($con,$q1);
                                                                if ( $res1) {

                                                                     echo '<script>alert("Service Saving is Scussessfully."); window.location.href="service.php";
                                                                                  </script>';
                                                                    
                                                                }else{
                                                                  echo "<script>alert(\"Service Saving is Not Scussess\");</script>";
                                                                }
                                                        }
                                                                      
                                                                
                                                    }
      
                                             }else{ echo "<script>alert(\"Please Select Image to Upload\");</script>";}
                                            }else{ echo "<script>alert(\"Enter Service Hours\");</script>";}
                                            }else{ echo "<script>alert(\"Enter Price\");</script>";}
                                          }else {echo "<script>alert(\"Enter Description\");</script>";}
                                        }else{ echo "<script>alert(\"Enter Headline\");</script>";}
                                      }else{ echo "<script>alert(\"Enter Service Title\");</script>";} 
                                  
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