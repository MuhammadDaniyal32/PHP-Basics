<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<div class="col-md-12">
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `image`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
    	<table class="table table-striped">
        <tr>
        <td><label><?php echo $fetch['imagename']?></label></td>
         <td><img src="<?php echo $fetch['path']?>" style="margin:10px; float:left;" height="100" width="100"/></td>
         <td><a href="edit.php?id=<?php echo $fetch['id']?>"><button class="btn btn-danger">Edit</button></a></td>
          <td><a href="delete.php?id=<?php echo $fetch['id']?>" onClick="return confirm('Are you confirm!')"><button class="btn btn-danger">Delete</button></a></td>
       </tr>
       
     
       
        </table>
     
		
	<?php
		}
	?>
</div>