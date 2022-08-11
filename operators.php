<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

if(1==1)
{
	echo"True";
}
else
{
	echo"false";
}
echo "<br>";

$txt = "daniyal";
if ($txt=="daniyal")
{
	echo"correct";
}
else
{
	echo"incorrect";
}
echo"<br>";
if(1)
{
	echo"true";
}
else
{
	echo"false";
}
echo"<br>";
$num1 = 10;
if($num1 % 2==0)
{
	echo"even number";
}
else 
{
	echo"add";
}
echo"<br>";
$num1=39;
if($num1 >=10 || $num1 <=30)
{
	echo"Equal to 10<br>";
}
else if ($num1==11)
{
	echo"Equal to 11<br>";
}
else if ($num1==10)
{
	echo"Equal to 10 again<br>";
}
else
{
	echo"not equal<br>";
}

switch($num1)
{
case 10:
	echo "Ten";
	break;
case 20:
	echo"Twenty";
case 30<=40:
	echo "Thirty or fourty<br>";
	break;
default:
	echo"number not found";	
}

//Assignment operator
$value1=12;
$value2=2;

echo "The product of value1 and value2 is:";

$value2 *=$value1;

echo $value2;
echo"<br>";
//Float Assignment operator

$value1=12.23;
$value2=2.12;

echo "The Difference between value1 and value2 is:";

$value1 -=$value2;

echo $value1."<br>";


function sum()
{
//Declaring and assigning values to variables
$value11 = 33.1;
$value22 = 23;
$value3 = $value11 + $value22;
//Displaying text
echo "The sum of $value11 and $value22 = $value3 <br>";
}
//calling the function
sum();

echo "increment operator<br>";

//post increment

echo $num1++."<br>";
echo $num1."<br>";
//pre increment

echo ++$num1."<br>";

//condition operator
$x=100;
$y=50;
echo ($x>$y) ? "$x is greater than $y":"$y is greater than $x"."<br>";
//comparison operator <,>,<=,>=,==
$num1=9;
$num2=10;
if ($num1>$num2)
{
	echo "true";	
}
echo"<br>";
if(1!=2)//or <>
{
	echo"true";	
}
echo"<br>";
$password =123;
if($password==234)
{
	echo "correct";	
}
else
{
	echo"incorrect";
}
echo"<br>";
?>
</body>
</html>