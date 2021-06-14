<?php
require_once 'connection.php';

if(isset($_REQUEST['emp_id']))
{
          $id = $_REQUEST['emp_id'];

          $querygetcode="SELECT  * FROM employee where emp_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['emp_id'];

          $query1="DELETE FROM employee WHERE emp_id='$a '";
          mysqli_query($con,$query1);
          header('location:employee.php');

}
else if(isset($_REQUEST['appoinment_id']))
{
          $id = $_REQUEST['appoinment_id'];

          $querygetcode="SELECT  * FROM appinment where appoinment_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['appoinment_id'];

          $query1="DELETE FROM appinment WHERE appoinment_id='$a '";
          mysqli_query($con,$query1);
          header('location:appoinment.php');

}
else if(isset($_REQUEST['m_id']))
{
          $id = $_REQUEST['m_id'];

          $querygetcode="SELECT  * FROM message where m_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['m_id'];

          $query1="DELETE FROM message WHERE m_id='$a '";
          mysqli_query($con,$query1);
          header('location:messege.php');

}
else if(isset($_REQUEST['service_id']))
{
          $id = $_REQUEST['service_id'];

          $querygetcode="SELECT  * FROM service where service_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['service_id'];

          $query2="DELETE FROM appinment WHERE service_id='$a '";
          mysqli_query($con,$query2);

          $query1="DELETE FROM service WHERE service_id='$a '";
          mysqli_query($con,$query1);
          header('location:service.php');

}  else if(isset($_REQUEST['image_id'])){
          $id = $_REQUEST['image_id'];

          $querygetcode="SELECT  * FROM galary where image_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['image_id'];

          $query1="DELETE FROM galary WHERE image_id='$a '";
          mysqli_query($con,$query1);
          header('location:gallery.php');

}

else if(isset($_REQUEST['customer_id']))
{
          $id = $_REQUEST['customer_id'];

          $querygetcode="SELECT  * FROM customer where customer_id='".$id."'";
          $catresult=mysqli_query($con,$querygetcode);
          $result_row=mysqli_fetch_assoc($catresult);
          $a=$result_row['customer_id'];

          $query2="DELETE FROM appinment WHERE customer_id='$a '";
          mysqli_query($con,$query2);


          $query1="DELETE FROM customer WHERE customer_id='$a '";
                  mysqli_query($con,$query1);
          header('location:customer.php');
            
              
}
else{
  header('location:dashboard.php'); 
}
?>