<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
require'connection.php';
$query = mysqli_query($con,"SELECT * FROM `img_crud`") or die(mysqli_error());
while($data=mysqli_fetch_array($query)){
?>
<table>
<tr>
<td><label><?php echo $data['name']?></label></td>
<td><img src="<?php echo $data['path']?>" style="margin:10px; float:left; height:100; width:100;"></td>
<td>
<a href="edit.php?id=<?php echo $data['Id']?>">
         <button class="btn btn-danger">Edit</button></a>
         </td>
          <td>
          <a href="delete.php?id=<?php echo $data['Id']?>"
           onClick="return confirm('Are you confirm!')"><button class="btn btn-danger">Delete
           </button>
           </a>
           </td>

</tr>
</table>
<?php
}
?>
</body>
</html>
