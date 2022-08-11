<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Simple Calculater</title>
</head>

<body style="text-align:center">
<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$operator =$_POST["operator"];
$result;
if($num1!=NULL&&$num2!=NULL)
{
switch($operator){
case"+":
	$result=$num1+$num2;
	break;
case"-":
	$result=$num1-$num2;
	break;	
case"/":
	$result=$num1/$num2;
	break;
case"*":
	$result=$num1*$num2;
	break;
default:
	echo"";
		
}
}
else
{
$result="Please enter value in textbox";	
}

?>
<h1>Simple Calculater In PHP</h1><br>
<form action="practice-2.php" method="post">
<input type="number" name="num1">
<br>
<br>
<input type="number" name="num2">
<br>
<br>
<button name="operator" value="+">+</button>
<button name="operator" value="-">-</button>
<button name="operator" value="/">/</button>
<button name="operator" value="*">*</button>


<h1><?php echo $result ?></h1>
</form>



</body>
</html>