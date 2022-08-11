<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<FORM METHOD = "GET" action="break.php">
Enter number:
<INPUT TYPE = "TEXT" NAME = "num">
<BR><BR>
<INPUT TYPE = "SUBMIT" NAME = "submit" VALUE = "INVERSE">
</FORM>

<?php
$number = $_GET['num'];
if($number==0)
{
 exit;
}
$ans = 1/$number;
echo "<BR>Inverse of the entered number is 1/$number";
echo "<BR><BR>Its decimal equivalent is $ans";
echo "<BR><BR><a href=break.html>Go Back</a>";
?>
</body>
</html>
