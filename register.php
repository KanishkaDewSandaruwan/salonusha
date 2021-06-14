<?php 
require_once 'connection.php';
?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Salon Usha</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="admin/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
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

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="index.html"> <h4>SALON USHA - REGISTRATION</h4></a>
        
                                <form class="mt-5 mb-5 login-input" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"  placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address"  placeholder="Your Adddress" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone"  placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nic"  placeholder="NIC Number" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"  placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pass" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confpass" placeholder="Password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn login-form__btn submit w-100">Sign in</button>
                                </form>
                                <?php 

                                            if (isset($_POST['submit'])) {

                                                $name = $_REQUEST['name'];
                                                $email = $_REQUEST['email'];
                                                $address = $_REQUEST['address'];
                                                $phone = $_REQUEST['phone'];
                                                $nic = $_REQUEST['nic'];
                                                $psaaword = $_REQUEST['pass'];
                                                $conpw = $_REQUEST['confpass'];

                                                $query2="SELECT * FROM customer WHERE email='$email'";
                                                $sql2=mysqli_query($con,$query2);

                                                $query3="SELECT * FROM customer WHERE phone='$phone'";
                                                $sql3=mysqli_query($con,$query3);

                                                $query4="SELECT * FROM customer WHERE nic='$nic'";
                                                $sql4=mysqli_query($con,$query4);

                                                if (empty($name)) {

                                                    echo "<script>alert(\"Plese Enter Your Name.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($email)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter Your Email.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($address)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter Your address.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($phone)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter Your Phone Number.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($nic)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter Your NIC Number.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($psaaword)) {
                                                    
                                                    echo "<script>alert(\"Plese Enter New Password.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (empty($conpw)) {
                                                    
                                                    echo "<script>alert(\"Plese confirm Your Password.\");window.location.href=\"register.php\";</script>";
                                                
                                                }
                                                elseif (!preg_match("/^([0]([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9])([0-9]))$/", $phone)) {

                                                    echo "<script>alert(\"Plese Enter Valid Phone Number.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif ($psaaword!=$conpw) {
                                                    
                                                    echo "<script>alert(\"Password is Not Match.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (mysqli_num_rows($sql2)>0) {
                                                
                                                    echo "<script>alert(\"Email already Exsisted.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                elseif (mysqli_num_rows($sql3)>0) {
                                                    
                                                    echo "<script>alert(\"Phone Number already Exsisted.\");window.location.href=\"register.php\";</script>";
                                                }
                                                elseif (mysqli_num_rows($sql4)>0) {
                                                
                                                    echo "<script>alert(\"NIC Number already Exsisted.\");window.location.href=\"register.php\";</script>";
                                                    
                                                }
                                                else {

                                                    $q1="INSERT INTO customer(name,phone,email,address,password,nic) values('$name','$phone','$email','$address','".md5($psaaword)."','$nic')";
                                                    $res1=mysqli_query($con,$q1);

                                                    if ($res1){
                                                        echo "<script>alert(\"congratulations! your registration was successful.\");window.location.href=\"login.php\";</script>";
                                                    }
                                                    else{
                                                        echo "<script>alert(\"Ohh Snap! your registration Fail. Plese Try Again!.\");window.location.href=\"register.php\";</script>";
                                                    }
                                                }
                                            }

                                             ?>
                                    <p class="mt-5 login-form__footer">Have account <a href="login.php" class="text-primary">Login</a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="admin/plugins/common/common.min.js"></script>
    <script src="admin/js/custom.min.js"></script>
    <script src="admin/js/settings.js"></script>
    <script src="admin/js/gleek.js"></script>
    <script src="admin/js/styleSwitcher.js"></script>
</body>
</html>





