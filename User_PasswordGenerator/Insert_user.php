<?php
require_once 'config.php';

if (isset($_POST['insert'])) {
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$uname=$_POST['username'];


	mysqli_query($conn, "INSERT INTO `user_pass_tbl` VALUES('', '$uname', '$fname', '$lname', '' )") or die(mysqli_error());

	header("location:index.php");
}


?>