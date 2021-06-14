<?php 
require_once 'connection.php';
  require_once 'admin.php';

if (isset($_REQUEST['cancel'])) {

	$id = $_REQUEST['cancel'];

			$query3="UPDATE appinment SET status='Canceled' WHERE appoinment_id='".$id."'";
			$sql3=mysqli_query($con,$query3);
		  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"appoinment.php\";</script>";

}else if (isset($_REQUEST['accept'])) {

	$id = $_REQUEST['accept'];

			$query3="UPDATE appinment SET status='Accepted' WHERE appoinment_id='".$id."'";
			$sql3=mysqli_query($con,$query3);
		  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"appoinment.php\";</script>";

}
?>