<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
$A = $_GET['NAME'];
if ($A>60)
{
 echo "Congrats!";
 echo "you have got A+ Grade.";
  }
  else if ($A <=60 && $A>=40)
  {
   echo "Congrats! ";
   echo "you have got B Grade.";
   }
    else
    {
     echo "sorry. you have faild.";
?>
</body>
</html>
