<?php
$cook_name ="user";
$cook_value= "Daniyal";

setcookie($cook_name, $cook_value,time() + (1 * 10), '/');


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
if(!isset($_COOKIE[$cook_name]))
{
	print_r($_COOKIE);
	echo "COOKIE named'".$cook_name."'is not set!";
}
else
{
	print_r($_COOKIE);
	echo "COOKIE named'".$cook_name."'is not set!<br>";
	echo "value is:".$_COOKIE[$cook_name];
	
	}
	
	
?>

</body>
</html>
