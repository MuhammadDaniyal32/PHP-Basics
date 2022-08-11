<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
//Echo Example

$name="HTML</br>";
$name1="CSS</br>";
$name2="JAVASCRIPT</br>";

echo $name,$name1,$name2;

//Print Example
print $name;
//or
print ($name);

//referencing variable

$ref = &$name1;
echo $ref."</br></br></br>";

// in PHP

$var1=2;
$var2=6;

$sum=$var1+$var2;

$sub=$var1-$var2;

$multi=$var1*$var2;

$divide=$var1/$var2;

$remainder=$var1%$var2;


echo"Sum of 2 and 6 is:".$sum."</br>";

echo"Sub of 2 and 6 is:".$sub."</br>";

echo"Multi of 2 and 6 is:".$multi."</br>";

echo"Remainder of 2 and 6 is:".$remainder."</br>";
?>

</body>
</html>