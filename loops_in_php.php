<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
echo"for loop<br>";
echo"terminator stops loop after first execution<br>";
for($count=1;$count<10;$count++);
{
	echo "$count <br>";
}
echo"with out terminator<br>";
for($count=1;$count<10;$count++)
{
	echo "$count <br>";
}
echo"Reverse loop<br>";
for($count=10;$count>1;$count--)
{
	echo "$count <br>";
}
echo"do while loop<br>";
$count=1;
do
{
	echo "$count <br>";
	$count++;
}
while($count<=10);
echo"while loop<br>";
$count=1;
while($count<=10)
{
	echo "$count <br>";
	$count++;
}
echo"Break statment in loop<br>";
//break the loop when applied
for($count=1;$count<10;$count++)
{
	if($count==5)
	{
		break;
	}
	echo "$count <br>";
}

echo"Continue statment in loop<br>";
//escape the vaule of loop when applied
for($count=1;$count<10;$count++)
{
	if($count==6)
	{
		continue;
	}
	echo "$count <br>";
}
?>

</body>
</html>