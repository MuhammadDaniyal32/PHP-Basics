<?php
require_once 'config.php';

function random_Pass($len, $set="")
{

	$gen="";
	for ($i=0; $i < $len; $i++) { 
		
		$set = str_shuffle($set);
		$gen .= $set[0];
	}
	return $gen;
}

$query=mysqli_query($conn, "SELECT * FROM `user_pass_tbl`") or die(mysqli_error());

while ($fetch = mysqli_fetch_array($query)) {
	

	$id = $fetch['Id'];
	$pass = random_Pass(12,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');

	mysqli_query($conn, "UPDATE `user_pass_tbl` SET `Password` = '$pass' WHERE `Id`= '$id'") or die(mysqli_error());
}

header("location:index.php");
?>