<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="job_application.php" method="get">
<label>First Name:</label>
<input type="text" name="fname"><br><br>
<label>Last Name:</label>
<input type="text" name="lname"><br><br>
<label>Address:</label>
<input type="text" name="address"><br><br>
<label>Phone Number:</label>
<input type="number" name="phone"><br><br>
<label>Qualification:</label>
<input type="text" name="quali"><br><br>
<label>Experience:</label>
<input type="text" name="exp"><br><br>
<label>Deparatment:</label>
<input type="text" name="dep"><br><br>
<input type="submit"><br><br>
</form>



<?php
$fname =$_GET["fname"];
$lname =$_GET["lname"];
$Address =$_GET["address"];
$Phone =$_GET["phone"];
$Qualification =$_GET["quali"];
$Experience =$_GET["exp"];
$Deparatment =$_GET["dep"];

switch($Deparatment)
{
	case'IT':
	echo"Available Posts in IT Deparatment are Software Developer, Graphic Designer, Web Designer, and Technical Support";
	case'Finance':
	echo"Available Posts in Finance Deparatment are Cost Analyst, Chartered Accountant, Company Secretary, Accountant, and Auditor";
	case'Sales':
	echo "Available Posts in Sales Deparatment are Sales Executive, Sales Manager, and Sales Analyst";
}

?>
</body>
</html>