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
              <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home Page</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">About Page</a>
                      <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Home Work</a> -->
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                          <div class="col-md-12 mt-3">
                                <div class="col-md-5">
                                    <button style="font-size: 20px;" data-toggle="modal" data-target="#changeHeader" class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Change Home Page Header</button>
                                </div> 
                                <div class="col-md-12 mt-4" style="font-family: \"Times New Roman\",Times, serif; font-size: 25px;">
                                    <div class="row">
                                        
                                      <?php 
                                            $home_query = "SELECT * FROM details";
                                            $home_query_result = mysqli_query($con, $home_query);
                                            $row = mysqli_fetch_assoc($home_query_result);
                                            $bottom_banner_01 = $row['header_image'];
                                            $bottom_banner_02 = $row['subpage_image'];
                                            $header_image_02 = $row['header_image_02'];
                                            $image_src2 = "../upload/home/".$bottom_banner_01;
                                            $image_src4 = "../upload/home/".$header_image_02;
                                            $image_src3 = "../upload/home/".$bottom_banner_02; ?>

                                            <div class="col-md-6 mt-5">
                                                <h3>Title 01 : <?php echo $row['header_title']; ?></h3>
                                                <h3>Title 02 : <?php echo $row['header_title_02']; ?></h3>
                                                <h6>Description : <?php echo $row['header_desc']; ?></h6>
                                               <div class="row mt-5">
                                                <h3>Main Page Header 01</h3>
                                                   <img width="100px" src='<?php echo $image_src2; ?>'> 
                                               </div>
                                               <div class="row mt-5">
                                                <h3>Main Page Header 02</h3>
                                                   <img width="100px" src='<?php echo $image_src4; ?>'> 
                                               </div>
                                               <div class="row mt-5">
                                                <h3>Subpage Header</h3>
                                                   <img width="100%" src='<?php echo $image_src3; ?>'> 
                                               </div>
                                            </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      <div class="col-md-12 mt-3">
                                <div class="col-md-3">
                                    <button style="font-size: 20px;" data-toggle="modal" data-target="#changeDetails" class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Change About Details</button>
                                </div> 
                                <div class="col-md-12 mt-4" style="font-family: \"Times New Roman\",Times, serif; font-size: 25px;">
                                <div class="row">
                                    
                                  <?php $viewquery = "SELECT * FROM about";
                                        $viewresult = mysqli_query($con,$viewquery);
                                        $row5 = mysqli_fetch_assoc($viewresult); 

                                        $about_image = $row5['image'];
                                        $image_src1 = "../upload/home/".$about_image;
                                        ?>
                                        <div class="col-md-6 mt-5">
                                            <h3><?php echo $row5['title']; ?></h3>
                                            <h6><?php echo $row5['description']; ?></h6>
                                           <div class="row">
                                               <img width="100px" src='<?php echo $image_src1; ?>'> 
                                           </div>
                                        </div>
                                </div>
                            </div>

                                <div class="col-md-3 mt-5">
                                    <button style="font-size: 20px;" data-toggle="modal" data-target="#changeContact" class="btn col-md-12 btn-lg btn-dark mt-3 ml-3">Change Contact Details</button>
                                </div> 
                                <div class="col-md-12 mt-4" style="font-family: \"Times New Roman\",Times, serif; font-size: 25px;">
                                  <?php $viewquery = "SELECT * FROM about";
                                        $viewresult = mysqli_query($con,$viewquery);
                                        $row5 = mysqli_fetch_assoc($viewresult); 

                                        $about_image = $row5['image'];
                                        $image_src1 = "../upload/home/".$about_image;
                                        ?>
                                <div class="row">
                                        <div class="col-md-3 mt-5"><h3>Email</h3></div>
                                        <div class="col-md-6 mt-5"><h3><?php echo $row5['email']; ?></h3></div>
                                </div>
                                <div class="row">
                                        <div class="col-md-3 mt-5"><h3>Phone Number</h3></div>
                                        <div class="col-md-6 mt-5"><h3><?php echo $row5['phone']; ?></h3></div>
                                </div>
                                <div class="row">
                                        <div class="col-md-3 mt-5"><h3>Address</h3></div>
                                        <div class="col-md-6 mt-5"><h3><?php echo $row5['address']; ?></h3></div>
                                </div>
                                <div class="row">
                                        <div class="col-md-3 mt-5"><h3>Facebook</h3></div>
                                        <div class="col-md-6 mt-5"><a href="<?php echo $row5['facebook']; ?>"><?php echo $row5['facebook']; ?></a></div>
                                </div>
                                <div class="row">
                                        <div class="col-md-3 mt-5"><h3>Twitter</h3></div>
                                        <div class="col-md-6 mt-5"><a href="<?php echo $row5['twiter']; ?>"><?php echo $row5['twiter']; ?></a></div>
                                </div>
                                <div class="row">
                                        <div class="col-md-3 mt-5"><h3>Instragram</h3></div>
                                        <div class="col-md-6 mt-5"><a href="<?php echo $row5['instragram']; ?>"><?php echo $row5['instragram']; ?></a></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"> -->
                      <!-- <div class="col-md-12 mt-3"> -->

                    </div>
                  </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
            <!-- Modal -->
      <div class="modal fade" id="changeContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Change Contact Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                        <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Email Address</b></label>
                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Phone Number</b></label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Address</b></label>
                        <input type="text" class="form-control" name="address" placeholder="Address">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Facebook</b></label>
                        <input type="text" class="form-control" name="fb" placeholder="Facebook">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Twitter</b></label>
                        <input type="text" class="form-control" name="twit" placeholder="Twitter">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <label for="name" class="a"><b>Instragram</b></label>
                        <input type="text" class="form-control" name="insta" placeholder="Instragram">
                      </div>
                    </div>


                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="about" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                   if(isset($_POST['about'])){
 

                      $email = $_REQUEST['email'];
                      $phone = $_REQUEST['phone'];
                      $address = $_REQUEST['address'];

                      $fb = $_REQUEST['fb'];
                      $twit = $_REQUEST['twit'];
                      $insta = $_REQUEST['insta'];


                      if(!empty($email))
                      {
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                          $query1="SELECT * FROM employee WHERE email='$email'";
                          $sql1=mysqli_query($con,$query1);


                            if(mysqli_num_rows($sql1)>0)
                            {
                              echo "<script type=\"text/javascript\"> alert(\"Email is already Exsisted\");</script>";
                            }
                            else
                              {
                                $query3="UPDATE about SET email='$email'";
                                $sql3=mysqli_query($con,$query3);
                                echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location.href='settings.php';</script>";
                              }
                        }
                      }
                      if(!empty($address))
                      {
                        $query3="UPDATE about SET address='$address'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }
                      if(!empty($phone))
                      {
                        if(preg_match("/^([0]([7189])([071628])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)){
                            $query3="UPDATE about SET phone='$phone'";
                            $sql3=mysqli_query($con,$query3);
                            echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";

                          }else{echo "Enter Valid Phone Number";}
                      }

                      if(!empty($fb))
                      {
                        $query3="UPDATE about SET facebook='$fb'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }

                      if(!empty($twit))
                      {
                        $query3="UPDATE about SET twiter='$twit'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }

                      if(!empty($insta))
                      {
                        $query3="UPDATE about SET instragram='$insta'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }
                    }
                    
                  ?>
                    
            </div>
          </div>
        </div>

                 <!-- Modal -->
      <div class="modal fade" id="changeHeader" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Change Home Page Images</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                         Select Header image 01 to upload:<br>
                        <input type="file" name="file" /><br><br>

                        Select Header image 02 to upload:<br>
                        <input type="file" name="file2" /><br><br>

                        <div class="form-row">
                      <div class="form-group col-md-6">

                        <label for="name" class="a"><b>Title 01</b></label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">

                        <label for="name" class="a"><b>Title 02</b></label>
                        <input type="text" class="form-control" name="title2" placeholder="Title">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">

                        <label for="name" class="a"><b>Description</b></label>
                        <input type="text" class="form-control" name="desc" placeholder="Description">
                      </div>
                    </div>

                    Select Subpage Header image to upload:<br>
                        <input type="file" name="file1" /><br><br>

                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="image_set_home" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                   if(isset($_POST['image_set_home'])){
 
                      $name = $_FILES['file']['name'];
                      $name1 = $_FILES['file1']['name'];
                      $name2 = $_FILES['file2']['name'];

                      $title = $_REQUEST['title'];
                      $title2 = $_REQUEST['title2'];
                        $desc = $_REQUEST['desc'];


                      // $target_dir = "upload/";
                      $target_dir = "../upload/home/";
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);
                      $target_file1 = $target_dir . basename($_FILES["file1"]["name"]);
                      $target_file2 = $target_dir . basename($_FILES["file2"]["name"]);


                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                      $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
                      $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

                      // Valid file extensions
                      $extensions_arr = array("jpg","jpeg","png","gif");

                      // Check extension
                      if( in_array($imageFileType,$extensions_arr) ){
                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                          $query="UPDATE details SET header_image='$name'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }

                      if( in_array($imageFileType1,$extensions_arr) ){
                          move_uploaded_file($_FILES['file1']['tmp_name'],$target_dir.$name1);
                          $query="UPDATE details SET subpage_image='$name1'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }
                      if( in_array($imageFileType2,$extensions_arr) ){
                          move_uploaded_file($_FILES['file2']['tmp_name'],$target_dir.$name2);
                          $query="UPDATE details SET header_image_02='$name2'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }

                      if(!empty($title))
                      {

                        $query3="UPDATE details SET header_title='$title'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }
                      if(!empty($title2))
                      {

                        $query3="UPDATE details SET header_title_02='$title2'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }
                      if(!empty($desc))
                      {

                        $query3="UPDATE details SET header_desc='$desc'";
                        $sql3=mysqli_query($con,$query3);
                          echo '<script>alert("Header Details Change Success"); window.location.href="settings.php";</script>';
                      }
                    }
                    
                  ?>
                    
            </div>
          </div>
        </div>

            
        <!-- Modal -->
      <div class="modal fade" id="changeDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Change Salon About Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <form class="col-md-12 mt-3" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">

                         Select Header image to upload:<br>
                        <input type="file" name="file" /><br><br>

                        <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="title" class="a"><b>About Title</b></label><br>
                        <input type="text" class="form-control" name="title" placeholder="About Title">
                      </div>
                    </div>

                     <label for="title" class="a"><b>About Description</b></label><br><br>
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

                        <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="title" class="a"><b>Salon Opening</b></label><br>
                        <input type="text" class="form-control" name="open" placeholder="Salon Opening">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="title" class="a"><b>Salon Opening Time</b></label><br>
                        <input type="time" class="form-control" name="ot" placeholder="Salon Opening">
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="title" class="a"><b>Salon Close Time</b></label><br>
                        <input type="time" class="form-control" name="ct" placeholder="Salon Opening">
                      </div>
                    </div>

                                
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="image_set" class="btn btn-primary">Save changes</button>
              </div>
                </form>
                <?php
                   if(isset($_POST['image_set'])){
 
                      $name = $_FILES['file']['name'];

                      $title = $_REQUEST['title'];
                      $desc = $_REQUEST['editordata'];
                      $open = $_REQUEST['open'];
                      $ot = $_REQUEST['ot'];
                      $ct = $_REQUEST['ct'];


                      // $target_dir = "upload/";
                      $target_dir = "../upload/home/";
                      $target_file = $target_dir . basename($_FILES["file"]["name"]);


                      // Select file type
                      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                      // Valid file extensions
                      $extensions_arr = array("jpg","jpeg","png","gif");

                      // Check extension
                      if( in_array($imageFileType,$extensions_arr) ){
                          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                          $query="UPDATE about SET image='$name'";
                          mysqli_query($con,$query);
                          echo '<script>alert("Updated Succussfully"); window.location.href="settings.php";</script>';
                      }

                      if(!empty($title))
                      {

                        $query3="UPDATE about SET title='$title'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }
                      if(!empty($desc))
                      {

                        $query3="UPDATE about SET description='$desc'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }

                      if(!empty($open))
                      {

                        $query3="UPDATE about SET open='$open'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }


                      if(!empty($ot))
                      {

                        $query3="UPDATE about SET open_time='$ot'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }

                       if(!empty($ct))
                      {

                        $query3="UPDATE about SET close_time='$ct'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"settings.php\";</script>";
                      }
                    }
                    
                  ?>
                    
            </div>
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