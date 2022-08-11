
<h2>MySql using PHP</h2>
<?php
//loosly type programming language
/*
$a = 1;
$b = 2;
echo "The value of a is: ".$a." the value of b is: ".$b."<br/>";
echo "The value of a is: ".$a." the value of b is: ".$b."<br/>";
?>
<h1>Arithematic Operator</h1>
<?php
//Operators
 // Arithematic Operator (+,-,*,/,%)
 echo "The + of two numbers: ".($a + $b)."<br/>";
  echo "The - of two numbers: ".($a - $b)."<br/>";
   echo "The * of two numbers: ".($a * $b)."<br/>";
    echo "The / of two numbers: ".($a / $b)."<br/>";
	 echo "The % of two numbers: ".($a % $b)."<br/>";
	 ?>
     <h1>Comparsion Operator</h1>
     <?php
	 
//Operators
 // Comparsion Operator (>, <, >=, <=, !=, ==, ===)
 echo "The > of two numbers: ".($a > $b)."<br/>";
  echo "The < of two numbers: ".($a < $b)."<br/>";
   echo "The >= of two numbers: ".($a >= $b)."<br/>";
    echo "The <= of two numbers: ".($a <= $b)."<br/>";
	 echo "The != of two numbers: ".($a != $b)."<br/>";	
	   echo "The == of two numbers: ".($a == $b)."<br/>";
		 echo "The === of two numbers: ".($a === $b)."<br/>";	 
?>

<h1>Logical Operator</h1>
     <?php
	 
//Operators
 // Logical Operator (&&, ||, !, and, or, xor)
 echo "The && of two numbers: ".($a>1 && $b>5)."<br/>";
 echo "The and of two numbers: ".($a>1 && $b>5)."<br/>";
  echo "The || of two numbers: ".($a>=1 || $b>5)."<br/>";
  echo "The or of two numbers: ".($a>=1 || $b>5)."<br/>";
   echo "The ! of two numbers: ".!($a>1 || $b>5)."<br/>";
   echo "The xor of two numbers: ".($a>=1 xor $b>=1.0)."<br/>";
	 ;	 
?>

<h1>Bitwise Operator</h1>
     <?php
	 
//Operators
 // Bitwise Operator (&, |, ^, ~, >> ,<<)
 echo "The & of two numbers: ".($a & $b)."<br/>";
 echo "The | of two numbers: ".($a | $b)."<br/>";
  echo "The ^ of two numbers: ".($a ^ $b)."<br/>";
  echo "The ~ of two numbers: ".~($a)."<br/>";
   echo "The >> of two numbers: ".($a >> $b)."<br/>";
   echo "The << of two numbers: ".($a << $b)."<br/>";
	 ;	 
	 
?>
<h1>Loops For, While, Do While, Foreach</h1>
<?php

//Loops
// For Loop
for($i=0;$i<=10;$i++)
{
	//echo $i."<br/>";
	echo $i."<br/>";;
	for($ii=11;$ii<=10;$ii++)
	{
		echo $ii."<br/>";
	}
}
//While Loop
$j = 10;
while($j<=20)
{
	echo $j."<br/>";
	$j++;
}

//Do While
$k = 31;
do
{
	echo $k."<br/>";
	$k++;
}while($k<=40);

//Foreach Loop
$arr = array("Fahad","Hussain","CS");
foreach($arr as $value)
{
	echo $value."<br/>";
}



// Array (one dim. (indexed)array, Assoicative (keyValue) array, mutidim. array

$arr1 = array(2,3,4,6,7);
//echo $arr1[0];

foreach($arr1 as $number)
{
	echo $number."<br/>";
}
$arr2 = array(1 => "Php", 2 => "C#", 3 => "Java");

foreach($arr2 as $key => $value)
{
	echo "Key: ".$key.", Values ".$value."<br/>";
}

$arr3 = array(
array(1,2,3),
array(11,12,13),
array(21,22,23)
);

echo $arr3[0][0];
for($i=0;$i<=2; $i++)
{
	for($ii=0;$ii<=2; $ii++)
	{
		echo $arr3[$i][$ii]." ";
	}
}


//Builtin Functions of Array

$arr1 = array(12,3,24,6,37);
//sort($arr1);
rsort($arr1);

foreach($arr1 as $value)
{
	echo $value."<br/>";
}

$arr2 = array(11 => "Php", 72 => "C#", 3 => "Java");
//asort($arr2);
//ksort($arr2);
//arsort($arr2);
krsort($arr2);
foreach($arr2 as $key => $value)
{
	echo "Key: ".$key.", Values ".$value."<br/>";
}


//PHP Global Variables - Superglobals-- $GLOBALS
$a = 12;
$b = 4;
function sumtwonumbers()
{
	$GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['b'];
}
sumtwonumbers();
echo $z;

//$_SERVER
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




//PHP Global Variables - Superglobals

$a =12;
$b =3;

function sum()
{
	$GLOBALS['z'] = $GLOBALS['a'] + $GLOBALS['b'];
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

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
<form method="post" action="names.php">
<input type="text" name="fname"/>
<br/>
<input type="email" name="email"/>
<br/>
<input type="date" name="date"/>
<br/>
<input type="submit" name="Submit"/>

</form>
*/



?>





