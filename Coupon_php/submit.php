<?php
 require_once"connection.php";
 if(isset($_POST['submit'])){
	 $coupon=$_POST['coupon'];
	 
	 mysqli_query($con,"INSERT INTO `coupon_tbl` VALUES('','$coupon','')")
	 or die(mysqli_error());	
	 header("location: index.php");
	 }

?>