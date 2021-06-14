<?php 
require_once 'connection.php';
require_once 'admin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Salon Usha</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../img/logo.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

     <!--     Editor Plugins     -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <?php $viewquery2 = " SELECT * FROM message where msg_read = 'No'  ";
                                        $viewresult2 = mysqli_query($con,$viewquery2); 
                                        $messege = mysqli_num_rows($viewresult2);

                                        if ($row = mysqli_fetch_assoc($viewresult2)) {?>
                                <span class="badge badge-pill gradient-1"><?php echo $messege; ?></span>
                                <?php } ?>
                            </a>
                            <?php $viewquery2 = " SELECT * FROM message where msg_read = 'No'  ";
                                $viewresult2 = mysqli_query($con,$viewquery2); 
                                if ($row = mysqli_fetch_assoc($viewresult2)) {?>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">

                                    <span class=""><?php echo $messege; ?> New Messages</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1"><?php echo $messege; ?></span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <?php $viewquery3 = " SELECT * FROM message where msg_read = 'No'  ";
                                        $viewresult3 = mysqli_query($con,$viewquery3); 

                                        while ($row = mysqli_fetch_assoc($viewresult3)) { ?>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading"><?php echo $row['name']; ?><br></div>
                                                    <div class="notification-text"><?php echo $row['subject']; ?></div>
                                                    <div class="notification-timestamp"><?php echo $row['trn_date']; ?></div>
                                                </div>
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    
                                </div>
                            </div>
                        <?php } ?>
                        </li>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <?php $viewquery = " SELECT * FROM appinment where status = 'Pending'  ";
                                        $viewresult = mysqli_query($con,$viewquery); 
                                        $appinment = mysqli_num_rows($viewresult);

                                        if ($row = mysqli_fetch_assoc($viewresult)) {?>
                                <span class="badge badge-pill gradient-2"><?php echo $appinment; ?></span>
                                <?php } ?>
                            </a>
                            <?php $viewquery = " SELECT * FROM appinment where status = 'Pending'  ";
                                        $viewresult = mysqli_query($con,$viewquery); 
                                        if ($row = mysqli_fetch_assoc($viewresult)) {?>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class=""><?php echo $appinment; ?> New Appoinment</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2"><?php echo $appinment; ?></span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <?php $viewquery = " SELECT * FROM appinment where status = 'Pending'  ";
                                            $viewresult = mysqli_query($con,$viewquery); 

                                            while ($row = mysqli_fetch_assoc($viewresult)) {
                                                $customer_id = $row['customer_id'];

                                                $viewquery1 = " SELECT * FROM customer where customer_id = '$customer_id'  ";
                                                $viewresult1 = mysqli_query($con,$viewquery1);
                                               $row1 = mysqli_fetch_assoc($viewresult1); ?>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading"><?php echo $row1['name']; ?><br><?php echo $row['eppinment_date']; ?></h6>
                                                    <span class="notification-text"><?php echo $row['trn_date']; ?></span> 
                                                </div>
                                            </a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                    
                                </div>
                            </div>
                        <?php } ?>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="" data-toggle="modal" data-target="#exampleModalPassChange"><i class="icon-user"></i> <span>Change Password</span></a>
                                        </li>
                                        <li>
                                            <a href="messege.php">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> 
                                                <?php $viewquery2 = " SELECT * FROM message where msg_read = 'No'  ";
                                                    $viewresult2 = mysqli_query($con,$viewquery2); 
                                                    $messege = mysqli_num_rows($viewresult2);

                                                    if ($row = mysqli_fetch_assoc($viewresult2)) {?>
                                                <div class="badge gradient-3 badge-pill gradient-1"><?php echo $messege; ?></div>
                                            <?php } ?>
                                            </a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li><a href="logout.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
         <!-- Modal -->
            <div class="modal fade" id="exampleModalPassChange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="text-align: center;">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                    <form action="" method="POST"> 
                  <div class="modal-body">

                      <div class="form-row">
                          <div class="form-group col-md-12">
                            <input type="password" name="cpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Current Password"/>
                          </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <input type="password" name="npass" id="userPassword" class="form-control input-sm chat-input" placeholder="New Password"/>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <input type="password" name="conpass" id="userPassword" class="form-control input-sm chat-input" placeholder="Confirm Password"/>
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="pass_change"  class="btn btn-primary">Save changes</button>
                  </div>
                   <?php
                    if(isset($_POST['pass_change']))
                    {


                    $currentpass=stripslashes($_REQUEST['cpass']);
                    $newpass=stripslashes($_REQUEST['npass']);
                    $confpass=stripslashes($_REQUEST['conpass']);
                    $g = $_SESSION['email'];

                    if(!empty($currentpass)){
                      if(!empty($newpass)){
                        if(!empty($confpass)){

                          $loginsql="SELECT * FROM customer WHERE password='".md5($currentpass)."'";
                          $result=mysqli_query($con,$loginsql) or mysqli_errno();
                          $rows=mysqli_fetch_assoc($result);

                          $query5="SELECT password FROM customer WHERE email='".$g."'";
                          $sql5=mysqli_query($con,$query5);
                          $row=mysqli_fetch_assoc($sql5);

                          if(isset($rows['password'])==isset($row['password']))
                          {
                            if($newpass==$confpass){
                              $query3="SELECT * FROM customer WHERE password='$newpass'";
                              $sql3=mysqli_query($con,$query3);

                              if(mysqli_num_rows($sql3)>0)
                              {
                                echo "password already Exsisted";
                              }
                              else
                              {
                                  $query2="UPDATE customer SET password='".md5($newpass)."' WHERE email='".$g."'";
                                  $sql2=mysqli_query($con,$query2);
                                  echo "<script type=\"text/javascript\"> alert(\"Password Update Successfull\"); window.location.href='logout.php'; </script>"; 
                              }

                            }else{ echo "<script>alert(\"Password is Not Match\");</script>";} 
                          }else{ echo "<script>alert(\"Current Password is Wrong\");</script>";} 
                        }else{ echo "<script>alert(\"Enter Confirm Password\");</script>";} 
                      }else{ echo "<script>alert(\"Enter New Password\");</script>";} 
                    }else{ echo "<script>alert(\"Enter Current Password\");</script>";} 

                    }
                ?>
                </form>
                </div>
              </div>
            </div>
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="index.php" aria-expanded="false">
                            <i class="fas fa-tachometer-alt menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="customer.php" aria-expanded="false">
                            <i class="fas fa-user menu-icon"></i><span class="nav-text">Customer</span>
                        </a>
                    </li>
                    <li>
                        <a href="service.php" aria-expanded="false">
                            <i class="fas fa-store menu-icon"></i><span class="nav-text">Service</span>
                        </a>
                    </li>
                    <li>
                        <a href="appoinment.php" aria-expanded="false">
                            <i class="fas fa-calendar menu-icon"></i><span class="nav-text">Appointment</span>
                        </a>
                    </li>
                    <li>
                        <a href="gallery.php" aria-expanded="false">
                            <i class="fas fa-images menu-icon"></i><span class="nav-text">Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="messege.php" aria-expanded="false">
                            <i class="fas fa-envelope menu-icon"></i><span class="nav-text">Message</span>
                        </a>
                    </li>
                    <li>
                        <a href="settings.php" aria-expanded="false">
                            <i class="fas fa-cog menu-icon"></i><span class="nav-text">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->