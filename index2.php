<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>php</title>
</head>

<body>
<h1>my first php file</h1>
<?php 

echo "<h1> IN PHP Block </h1>"."<br>";

echo "Hello World"."</br>";
echo "date in php</br>";
echo "Today is ".date("M d Y")."</br>";
echo "Today is ".date("Y/m/d")."</br>";
echo "Today is ".date("Y.m.d")."</br>";
echo "Today is ".date("Y-m-d")."</br>";
echo "Today is ".date("1")."</br></br>";

ECHO "Hello World"."</br>";
echo "Hello World"."</br>";
EcHO "Hello World"."</br></br>";

//this is single line comment
#this is also a single line comment
/*this is a multiple lines comment*/

$a=5+2;
$b=5*2;
$c=5/2;
$d=5-2;
echo "Sum in PHP ".$a."</br></br>";
echo "Multiply in PHP ".$b."</br></br>";
echo "Division in PHP ".$c."</br></br>";
echo "Subtraction in PHP ".$d."</br></br>";

$str="php variable";
echo $str;
//string concatination in php
$f="Hello";
$w=$f . "World";

$q="Hello";
$q .="world"; 
?>
<input type="text" value="<?php echo $q;?>"/>	
</body>
</html>