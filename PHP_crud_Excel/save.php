<?php
require_once'conn.php';
if (ISSET($_POST['save'])) {
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];

	mysqli_query($con, "INSERT INTO `members_tbl` VALUE('','$name','$email','$address') ") or die(mysqli_errno());

	header('location:index.php');
}
?>