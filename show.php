<?php
$con = mysqli_connect("localhost","root","","fahadaptech");
$query = "select * from fahadtbl";
$run = mysqli_query($con, $query);
?>

<table border="1">
<tr>
<td>Name</td>
<td>Age</td>
<td>Salary</td>
<td>Edit</td>
<td>Delete</td>
</tr>
<?php
if($run)
{
	while($data = mysqli_fetch_assoc($run))
	{
?>
<tr>
<td><?php echo $data['Name']; ?></td>
<td><?php echo $data['Age']; ?></td>
<td><?php echo $data['Salary']; ?></td>
 <?php
      echo "<td><a href=\"Edit.php?id=$data[id]\">Edit</a></td>"; 
	  echo "<td><a href=\"delete.php?id=$data[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; ?> 
<?php	
	}
	?>
    </tr>
    </table>
    <?php

}
?>
