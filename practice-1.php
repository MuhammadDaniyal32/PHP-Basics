<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
echo "<h1>String Functions In PHP</h1>";

$name = "daniyal";

echo $name[0]."<br>";
$name[0]="A";
echo $name."<br>";

$name = "daniyal";

echo "string into UPPERCASE"."<br>";
echo strtoupper($name)."<br><br>";

echo "string into lowercase"."<br>";
echo strtolower($name)."<br><br>";

echo "length of a String"."<br>";
echo strlen($name)."<br><br>";

echo "Replacing text within a string"."<br>";
echo str_replace("yal","noor",$name)."<br><br>";

echo "Displaying part of String"."<br>";
echo substr($name,0,4)."<br><br>";

echo "Counting of the number of words in a String"."<br>";
echo str_word_count("Hello world! its me!!")."<br><br>";

echo "Reversing a String"."<br>";
echo strrev("$name")."<br><br>";

echo "Finding Text Within a String"."<br>"; 
echo strpos("Hello world! its me", "its")."<br><br>";

echo "Remove white spaces and predefined characters in a string"."<br>";
$trimit = "junk awesome stuff junk"; 
$trimmed = trim ( $trimit,"junk" );
echo $trimit."<br>";
echo $trimmed."<br><br>";

echo "Checks if String or not"."<br>"; 
if (is_string (7 )) {
	echo "Yes";
} else {
	echo "No"."<br>";
}
 
if (is_string ( "Lucky Number 7" )) {
	echo "Yes"."<br><br>";
} else {
	echo "No";
}
echo "used to find a string or character match within a longer string"."<br>";
echo strtr("Hilla Warld","ia","eo")."<br><br>";

echo "<h1>Math Functions In PHP</h1>";

echo "Returns Absolute number"."<br>";
echo abs(-100)."<br><br>";

echo "Returns power"."<br>";
echo pow(2,4)."<br><br>";

echo "Returns square root"."<br>";
echo sqrt(144)."<br><br>";

echo "Returns max number"."<br>";
echo max(144,2)."<br><br>";

echo "Returns min number"."<br>";
echo min(144,2)."<br><br>";

echo "Returns rounded value"."<br>";
echo round(3.7)."<br><br>";

echo "Returns always round up value"."<br>";
echo ceil(3.3)."<br><br>";

echo "Returns always round down value"."<br>";
echo floor(3.9)."<br><br>";


?>


</body>
</html>