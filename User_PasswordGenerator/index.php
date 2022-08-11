<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="Insert_user.php">
	<label>Firstname</label>
	<input type="text"  name="firstname" required="required"/>
	<br />
	<label>Lastname</label>
	<input type="text" name="lastname" required="required"/>
	<br />
	<label>Username</label>
	<input type="text" name="username" required="required"/>
	<br />
	<button name="insert" >Insert</button>
	</form>
	<br />
	<a href="Generator_password.php">Generate Password</a>
	
	<br /><br />

	<table>
	<thead>
						<tr >
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Username</th>
							<th>Password</th>
						</tr>
					</thead>
					<tbody>
	<?php
	require'config.php';
	$query=mysqli_query($conn, "SELECT * FROM `user_pass_tbl`") or die(mysqli_error());
	while($fetch=mysqli_fetch_array($query))
	{
	echo"<tr><td>".$fetch['Firstname']."</td><td>".$fetch['Lastname']."</td><td>".$fetch['Username']."</td><td style='background-color:#f00; color:#fff;'>".$fetch['Password']."</td></tr>";
							}
						?>
					</tbody>
				</table>

</body>
</html>