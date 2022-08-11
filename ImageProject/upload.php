<?php
	require_once 'conn.php';
	if(ISSET($_POST['upload'])){
		$imagename=$_POST['imagename'];
		$image_name = $_FILES['image']['name'];
		$image_temp = $_FILES['image']['tmp_name'];
		$name = time();
		$path = "upload/".$name;
		
		if(move_uploaded_file($image_temp, $path)){
			mysqli_query($conn, "INSERT INTO `image` VALUE('', '$name', '$path','$image_name')") or die(mysqli_error());	
			echo "<script>alert('Image saved!')</script>";
			header("location: index.php");
			}
		
	}
?>

