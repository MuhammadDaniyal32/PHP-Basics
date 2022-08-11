<table>
	<thead>
	<tr>
		<th>Id</th>
		<th>Firstname</th>
		<th>Laststname</th>
	</tr>
	</thead>
	<tbody>

<?php
require_once'config.php';
if (isset($_POST['Confirm'])) {
	
	if($_POST['table']=="Student")
	{

		$sql = "SELECT * FROM student_tbl";
		$query = mysqli_query($con,$sql);
		while($row =mysqli_fetch_array($query)){
			$id=$row['stud_id'];
			$fname=$row['stud_Firstname'];
			$lname=$row['stud_Lastname'];?>

			
		<tr>
			<td><?php echo$id; ?></td>
			<td><?php echo$fname; ?></td>
			<td><?php echo$lname; ?></td>
		</tr>
	
<?php
		}

	}
	elseif ($_POST['table']=="Teacher") {
		$sql = "SELECT * FROM teacher_tbl";
		$query = mysqli_query($con,$sql);
		while($row =mysqli_fetch_array($query)){
			$id=$row['teacher_id'];
			$fname=$row['teacher_Firstname'];
			$lname=$row['teacher_Lastname'];?>
	<tr>
			<td><?php echo$id; ?></td>
			<td><?php echo$fname; ?></td>
			<td><?php echo$lname; ?></td>
		</tr>
<?php


		}
	}
	elseif ($_POST['table']=="User") {
		$sql = "SELECT * FROM user_tbl";
		$query = mysqli_query($con,$sql);
		while($row =mysqli_fetch_array($query)){
			$id=$row['User_id'];
			$fname=$row['Username'];
			$lname=$row['Email'];
			?>
	<tr>
			<td><?php echo$id; ?></td>
			<td><?php echo$fname; ?></td>
			<td><?php echo$lname; ?></td>
		</tr>
<?php


		}
	}


	
}
?>

</tbody>


</table>
<?php
elseif (condition) {
	# code...
}
echo"<table></table>"
?>