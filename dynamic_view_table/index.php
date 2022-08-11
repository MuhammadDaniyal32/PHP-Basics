<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST">
	<label>Select Table:</label><br>
	<label>Student</label>
	<input type="radio" name="table" value="Student"><br>
	<label>Teacher</label>
	<input type="radio" name="table" value="Teacher"><br>
	<label>User</label>
	<input type="radio" name="table" value="User"><br>
	<label>All Table</label>
	<input type="radio" name="table" value="all"><br>
	<button  name="Confirm" id="Confirm">Confirm</button>

</form>

<?php include 'switch.php'?>
</body>
</html>