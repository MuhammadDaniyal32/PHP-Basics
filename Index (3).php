<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

/*echo "<h1>Hello world!!!!!!</h1>";
print "<h1>Hello world!!!!!!</h1>";

$a=12;
$b=23;
*/

/*echo "The Value Of a=".$a."<br> The Value Of b=".$b."<br><br>;";

echo "The sum of a+b =".($a+$b)."<br><br>";
echo "The sub of a-b =".($a-$b)."<br><br>";
echo "The multi of a+b =".($a*$b)."<br><br>";
echo "The divide of a/b =".($a/$b)."<br><br>";
echo "The mod of a%b =".($a%$b)."<br><br>";

echo "A is > than B =".($a>$b)."<br><br>";
echo "A is < than B =".($a<$b)."<br><br>";
echo "A is == to B =".($a==$b)."<br><br>";
echo "A is === to B =".($a===$b)."<br><br>";
echo "A is not!=  B =".($a!=$b)."<br><br>";
echo "A is >= than B =".($a>=$b)."<br><br>";
echo "A is <= than B =".($a<=$b)."<br><br>";

echo "A && B =".($a>1 && $b<1)."<br><br>";
echo "A and B =".($a>1 and $b<1)."<br><br>";

echo "A || B =".($a>1 || $b<1)."<br><br>";
echo "A OR B =".($a>1 or $b<1)."<br><br>";
echo "A xor B =".($a>1 xor $b<1)."<br><br>";

echo "A ! B =".!($a && $b)."<br><br>";*/


/*echo"Php Globals Variables";

$a=12;
$b=4;

function sum()
{
	$GLOBALS['z']=$GLOBALS['a']+$GLOBALS['b'];
	
}
sum();
echo $z;


echo $_SERVER['PHP_SELF'];
echo "<br>";

echo $_SERVER['SERVER_NAME'];
echo "<br>";

echo $_SERVER['HTTP_HOST'];
echo "<br>";

echo $_SERVER['HTTP_REFERER'];
echo "<br>";

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";

echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
*/

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
NAME:<input type="text" name="name">
<input type="submit" name="submit">
</form>	

<?php 

echo $_SERVER['PHP_SELF'];
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
	 $name=htmlspecialchars($_REQUEST['name']);
	if(empty($name)){
	echo "Name is Empty";
	}
	else{
		echo $name;
		}
  }

?>
</body>
</html>