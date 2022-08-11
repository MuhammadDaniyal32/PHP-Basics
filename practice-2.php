<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1>Arrays In PHP<h1>
<form action="practice-2.php" method="post">
<label>Apple</label>
<input type="checkbox" name="fruits[]" value="Apples"><br>
<label>Banana</label>
<input type="checkbox" name="fruits[]" value="Banana"><br>
<label>Oranges</label>
<input type="checkbox" name="fruits[]" value="Oranges"><br>
<input type="submit">
<br><br>

<label>Please Enter Student Name:</label>
<input type="text" name="name">
<input type="submit">
</form>
<?php 
$arra = array("Apple","Banana","Oranges",1,223.34);
$arra[4]=12;
echo $arra[4]."<br>";
echo count($arra)."<br>";

$fruits =$_POST["fruits"];
echo $fruits[0]."<br><br>";

echo "<h1>Assocative Arrays<h1><br>";
$grades = array("daniyal"=>"C", "Ali"=>"B", "Talha"=>"A", "hassan"=>"F");
$grades["daniyal"]="A+";
echo $grades[$_POST["name"]];




?>
</body>
</html>