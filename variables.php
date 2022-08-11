<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
echo "<h1>Local Variables</h1><br>";
$num2 = 0;
echo "The multiplication value of 14 * 15 is <br>";
function multiply()
{
$num1=14;
$num2=15;
$num2=$num1 * $num2;
echo $num2;
}
multiply();
echo " <br> The value of the local variable on exiting the function is
<br>";
echo $num2;

echo "<h1>Global Variables</h1><br>";
$var1 =12;
$var2 =22;

function mult()
{
	global $var1,$var2;
	$var2 *=$var1;
	echo $var2;
}
echo "The Product of 4 and 5=";mult()."<br>";

echo "<h1>Static Variables</h1><br>";
$var4;
function sum()
{
	static $var4=9;
	$var5 =$var4+12;
	
echo "The value of the variable is : $var4<br>";
echo "The addition value of 9 + 12 = ";
echo "$var5<br>";
}

sum();


function decrement()
{
static $static_int1 =99;
$static_int1--;
echo "The decrement value is $static_int1";
}
decrement();
?>

</body>
</html>