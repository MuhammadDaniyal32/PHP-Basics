<?php
include_once 'connection.php';
if(isset($_POST['Upload'])){	
$name=$_POST['imgname'];
$Image=$_FILES['image']['name'];
$Image_temp=$_FILES['image']['tmp_name'];
$time=time();
$path ="upload/".$time;

if(move_uploaded_file($Image_temp,$path)){
	
	mysqli_query($con, "INSERT INTO `img_crud` VALUE ('','$name','$path','$Image')")or die(mysqli_error());
	echo "<script>alert('IMAGE SAVED!!!')</script>";
	header("location:index.php");
	}

}

?>