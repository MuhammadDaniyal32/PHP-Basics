<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$prin_amount = $_GET["principal"];
$rate = $_GET["rate"];
$years =$_GET["years"];

echo "your interest is:".($prin_amount*$rate*$years)/100;

?>
</body>
</html>