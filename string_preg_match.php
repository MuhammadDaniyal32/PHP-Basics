<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="string_preg_match.php" method="get">
<label>Please Enter string:</label>
<input type="text" name="textbox"><br>
<input type="submit">
</form>

<?php
$textbox = $_GET["textbox"];
if($textbox!=NULL)
{
	if(preg_match('/the/',$textbox))
	{
		echo "Match Found";
	}
	else
	{
		echo "No Match Found";
	}
}

else
{
	echo "Please enter string";
}


?>
</body>
</html><br>
