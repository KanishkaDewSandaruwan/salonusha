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
                        <h1 class="h3 mb-0 text-gray-800">Edit Service</h1>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-12">
                            <!-- DataTales Example -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-dark">Edit Service</h6>
                                        </div>
                                            <div class="col-md-6 mt-4" style="font-family: \"Times New Roman\",Times, serif;">
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
                                                    <button type="button" class="btn btn-dark" onclick="window.location.href='service.php'" data-bs-dismiss="modal">Back</button>
                                                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>

                                                        <?php
                                                        if(isset($_POST['submit'])){
                                                            $title = $_REQUEST['title'];
                                                            $headline = $_REQUEST['headline'];
                                                            $price = $_REQUEST['price'];
                                                            $editordata = $_REQUEST['editordata'];
                                                            $hour = $_REQUEST['hour'];

                                                            $id = $_REQUEST['service_id'];

                                                            $file = $_REQUEST['file'];
                                                            $name = $_FILES['file']['name'];
                                                            $target_dir = "../upload/service/";
                                                            $target_file = $target_dir . basename($_FILES["file"]["name"]);
                                                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                                            $extensions_arr = array("jpg","jpeg","png","gif");

                                                             if(isset($_FILES['file']) && !empty($_FILES['file']['name'])) { 
                                                            if( in_array($imageFileType,$extensions_arr) ){
                                                                move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                                                                $query="UPDATE service SET image='$name' where service_id='".$id."'";
                                                                mysqli_query($con,$query);
                                                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"service.php\";</script>";
                                                            }
                                                          }

                                                          if(!empty($title))
                                                          {
                                                            $query3="UPDATE service SET title='$title' WHERE service_id='".$id."'";
                                                            $sql3=mysqli_query($con,$query3);
                                                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"service.php\";</script>";
                                                          }

                                                          if(!empty($editordata))
                                                          {
                                                            $query3="UPDATE service SET description='$editordata' WHERE service_id='".$id."'";
                                                            $sql3=mysqli_query($con,$query3);
                                                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"service.php\";</script>";
                                                          }

                                                          if(!empty($price))
                                                          {
                                                            $query3="UPDATE service SET price='$price' WHERE service_id='".$id."'";
                                                            $sql3=mysqli_query($con,$query3);
                                                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"service.php\";</script>";
                                                          }

                                                          if(!empty($headline))
                                                          {
                                                            $query3="UPDATE service SET headline='$headline' WHERE service_id='".$id."'";
                                                            $sql3=mysqli_query($con,$query3);
                                                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"service.php\";</script>";
                                                          }

                                                          if(!empty($hour))
                                                          {
                                                            $query3="UPDATE service SET hour='$hour' WHERE service_id='".$id."'";
                                                            $sql3=mysqli_query($con,$query3);
                                                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"service.php\";</script>";
                                                          }
                                                        } ?>
                                      </div>
                                    </form>
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