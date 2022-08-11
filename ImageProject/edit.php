<?php 
include('conn.php');
$id=$_GET['id'];
$query=mysqli_query($conn,"SELECT * FROM `image` WHERE  id='$id'");
$fetch=mysqli_fetch_assoc($query);

	?>
	
    
    
    
    <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data">
<input type="text" name="name" value="<?php echo $fetch['name'];?>"/>
<img src="<?php echo $fetch['path'];?>" width="100" height="100" />
<input type="file" name="file"/>
<input type="submit" name="update" value="Edit"/>
</form>
<?php 
if(isset($_POST['update'])){
	$name=$_POST['name'];

		$file_name=$_FILES['file']['name'];
		$file_temp=$_FILES['file']['tmp_name'];
		$path="upload/".$file_name;
		
		if(move_uploaded_file($file_temp,$path)){
			mysqli_query($conn,"UPDATE `image` SET `path`='$path',`imagename`='$name' WHERE id=$id");
				echo "<script>alert('image updated')</script>";
				header("location: index.php");
			
			}
		
	
		else{
			$old_image=$fetch['location'];
				mysqli_query($conn,"UPDATE `image` SET `path`='$old_image',`imagename`='$name' WHERE id=$id");
				echo "<script>alert('image updated')</script>";
				header("location: index.php");
				
			}
		
	
	}



?>


</body>
</html>
	
	






