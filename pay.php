<?php require_once 'connection.php'; 
session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Salon Usha</title>
        <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png">
</head>
<body>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div style="margin-left: 35%; margin-top: 2%;"  class="container-fluid    justify-content-center">
    <div class="row mt-5">
        <div class="col-xs-12 col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Salon Usha Online Payment
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="POST">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right">Rs. <?php if (isset($_REQUEST['total'])) {
                    echo $_REQUEST['total'];
                } ?></span> Subtotal</a>
                </li>
            </ul>
            <br/>
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Pay</button>
        </div>
       </form>
       <?php if (isset($_POST['submit'])) {

            if (isset($_REQUEST['appoinment_id'])) { 

                  $id = $_REQUEST['appoinment_id'];
                  $query3="UPDATE appinment SET payment='Paid' WHERE appoinment_id='".$id."'";
                  $sql3=mysqli_query($con,$query3);
                  echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myapponment.php\";</script>";

             }
    } ?>
    </div>
</div>


</body>
</html>