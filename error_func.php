<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php 

$num=0;
if($num==0)
{
	echo "Dividing By Zero!";
	trigger_error("cannot divide by zero",E_USER_ERROR);
		
}
else
{
	$num2=100/$num;
	echo $num2;
}
?>
</body>
</html>