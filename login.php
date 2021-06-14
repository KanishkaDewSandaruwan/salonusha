<?php 
require_once 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Salon Usha</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
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
                                <a class="text-center" href="index.html"> <h4>SALON USHA - LOGIN</h4></a>
        
                                <form class="mt-5 mb-5 login-input" method="POST">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" class="form-control" placeholder="Password">
                                    </div>
                                    <button type="submit" name="submit" class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                                <?php if(isset($_POST['submit'])) {

                                    $email = stripslashes($_REQUEST['email']);
                                    $password = stripslashes($_REQUEST['pass']);

                                    $signin = "SELECT * FROM customer WHERE email ='$email' AND password ='".md5($password)."'";
                                    $result3 = mysqli_query($con,$signin) or mysqli_errno();
                                    $rows4 = mysqli_num_rows($result3);
                                    
                                    if($rows4==1){
                                        if ($email == 'admin') {
                                            $row1 = mysqli_fetch_assoc($result3);

                                            $id = $row1['email'];
                                            $_SESSION['email']=$id;
                                            echo "<script type=\"text/javascript\">window.location.href='admin/index.php'; </script>";
                                        }else if ($row1 = mysqli_fetch_assoc($result3)) {

                                            $id = $row1['customer_id'];
                                            $_SESSION['customer_id']=$id;
                                            echo "<script type=\"text/javascript\">window.location.href='index.php'; </script>";
                                        }
                                    }
                                    else{

                                        echo "<script>alert(\"Username or Password is incorrect.\");window.location.href=\"login.php\";</script>";
                                    }
                                } ?>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="register.php" class="text-primary">Register</a> now</p>
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





