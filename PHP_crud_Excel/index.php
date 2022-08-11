 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="save.php" method="post">
<label>Member Name</label>
<input type="text" name="name" required />
<br><br>
<label>Member Email</label>
<input type="Email" name="email" required />
<br><br>
<label>Member Address</label>
<input type="text" name="address" required />
<br><br>
<button name="save" >Save</button>
</form>
<br /><br />
<form method="POST" action="create_execl.php">
	<button name="export">Export Excel</button>
</form>
<br /><br />
<table>
	<thead>
		<tr>
			<th>Member Name</th>
			<th>Member Email</th>
			<th>Member Address</th>
		</tr>
	</thead>
	<tbody>
		<?php
			require 'conn.php';
			
			$query = mysqli_query($con, "SELECT * FROM `members_tbl`");
			while($fetch = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $fetch['Mem_name']?></td>
			<td><?php echo $fetch['Mem_email']?></td>
			<td><?php echo $fetch['Mem_address']?></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
</body>
</html>