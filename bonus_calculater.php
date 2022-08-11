<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body style="text-align:center">

<form action="bonus_calculater.php" method="get">
<label>Please Enter Your Salary:</label>
<input type="text" name="salary"><br><br>

<input type="submit">
</form><br>
<br>

<?php
$salary =$_GET["salary"];
$bonus_percent= 12;
$result = ($salary*$bonus_percent)/100;
echo "Salary Before Bonus:".$salary."<br>";
echo "Bonus:$result"."<br>";
echo "Percent of Bonus:".$bonus_percent."<br>";
$result += $salary;
echo "Salary With Bonus:".$result."<br>";

?>
</body>
</html>