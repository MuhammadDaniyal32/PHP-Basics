<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="Nested_if.php" method="get">
<label>Enter Units Consumed:</label>
<input type="text" name="units"><br>
<input type="submit">
</form>

<?php 
$units =$_GET["units"];
if($units >= 1000)
{
	$rate = $units * 3;
	$service = $rate * .1;
	$total= $rate+$service;
	echo "Service Charges for Units $units:$service<br>";
	echo "Your Total Bill is :$$total";
}
else
{
	if($units > 500 || $units < 1000)
	{
		$rate=$units*2;
		echo "Your Total Bill is :$$rate";
		
	}
	else
	{
		$rate=$units*2;
		echo "Your Total Bill is :$$rate";
	}
}


?>

</body>
</html>
