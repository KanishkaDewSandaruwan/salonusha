<?php 
require_once 'connection.php';
  require_once 'user.php';

if (isset($_REQUEST['cancel'])) {

	$id = $_REQUEST['cancel'];

			$query3="UPDATE appinment SET status='Canceled' WHERE appoinment_id='".$id."'";
			$sql3=mysqli_query($con,$query3);
		  	echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"myapponment.php\";</script>";

}
?>