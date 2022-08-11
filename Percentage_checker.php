<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$num = $_GET["num1"];
if($num!=NULL)
{
	switch(true)
	{
		case($num >=100):
			echo "You Have Got A+ Grade!";
			break;
			
		case($num >=90):
			echo "You Have Got A+ Grade!";
			break;
			
		case($num >=80):
			echo "You Have Got A Grade!";
			break;
		
		case($num >=70):
			echo "You Have Got B Grade!";
			break;
		
		case($num >=60):
			echo "You Have Got C Grade!";
			break;
		
		case($num >=50):
			echo "You Have Got D Grade!";
			break;
			
		case($num >=40):
			echo "Sorry You Did Not Qualify The Test!";
			break;
			
		default:
			echo"";
	}
}
else
{
	echo "Please Enter Your Percentage!";
}

?>

</body>
</html>