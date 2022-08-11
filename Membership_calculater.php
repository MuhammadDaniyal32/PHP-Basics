<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="Membership_calculater.php" method="get">
<label>Name:</label>
<input type="text" name="name"><br><br>
<label>Membership Number:</label>
<input type="number" name="mem_no"><br><br>
<label>Membership Type:</label>
<input type="text" name="mem_type"><br><br>
<label>Points In Hand:</label>
<input type="number" name="points"><br><br>
<input type="submit"><br><br>
</form>
<?php
$name =$_GET["name"];
$member_no = $_GET["mem_no"];
$member_type = $_GET["mem_type"];
$points = $_GET["points"];
$additional="";
$result="";
if($name!=NULL&&$member_type!=NULL&&$member_no!=NULL&&$points!=NULL)
{
	if($member_type=="Basic")
	{
		if($points<=250)
		{
			$additional=($points*5)/100;
			$result=$points+$additional;
		}
		else if($points<=500)
		{
			
			$additional=($points*7.5)/100;
			$result=$points+$additional;
		}
		else if($points<=750)
		{
			
			$additional=($points*10)/100;
			$result=$points+$additional;
		}
		else if($points<=1000)
		{
			
			$additional=($points*12.5)/100;
			$result=$points+$additional;
		}
		else
		{
			echo"basic else";
		}
	}
	else if($member_type=="Privileged")
	{
		if($points<=250)
		{
			$additional=($points*10)/100;
			$result=$points+$additional;
		}
		else if($points<=500)
		{
			
			$additional=($points*12.5)/100;
			$result=$points+$additional;
		}
		else if($points<=750)
		{
			
			$additional=($points*15)/100;
			$result=$points+$additional;
		}
		else if($points<=1000)
		{
			
			$additional=($points*17.5)/100;
			$result=$points+$additional;
		}
		else
		{
			echo "Privileged else";
		}
	}
	
	else
	{
		echo"membership else";
	}
echo "Your Name is:$name<br><br>";
echo "Your Membership Number:$member_no<br><br>";
echo "Your Type Of Membership is:$member_type<br><br>";
echo "Your Point in hand:$points<br><br>";
echo "Your Additional Points:$additional<br><br>";
echo "Your Total Points:$result";	
}
else
{
	echo"Please enter requird data!!<br><br>";
}


?>

</body>
</html>