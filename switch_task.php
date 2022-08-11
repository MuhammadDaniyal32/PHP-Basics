<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Details</title>
</head>
<style>
h5
{
	font-style:italic;
	color:#F00;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 9px;
}

tr:nth-child(even) {
  background-color: #dddddd;
  
}
</style>
<body style="text-align:center">
<?php
$name =$_GET["studname"];
$class=$_GET["studclass"];
$enroll=$_GET["enroll"];
$atten="";
$marks="";
$grade="";
$stdname="";
$stdclass="";
$stdenroll="";
$error="";
if($name!=""&&$class!=""&&$enroll!="")
{
	if($class=="One")
    {
     	switch($enroll&&$name)
	 	{
		 	case($enroll=="1"&&$name=="Daniyal"):
				$stdname=$name;
				$stdclass=$class;
				$stdenroll=$enroll;
				$atten="25/30";
				$marks="250 out of 300";
				$grade="A";
			break;
			case($enroll=="2"&&$name=="Ali"):
				$stdname=$name;
				$stdclass=$class;
				$stdenroll=$enroll;
				$atten="20/30";
				$marks="150 out of 300";
				$grade="B";
			break;
			case($enroll=="3"&&$name=="Abdul"):
				$stdname=$name;
				$stdclass=$class;
				$stdenroll=$enroll;
				$atten="15/30";
				$marks="100 out of 300";
				$grade="C";
			break;
			default:
				$error="Please Enter Correct Name and enroll for class one";
	 	}
		
    }
	elseif($class=="Two")
	{
		switch($enroll&&$name)
		{
			case($enroll=="1"&&$name=="Subhan"):
				$stdname=$name;
				$stdclass=$class;
				$stdenroll=$enroll;
				$atten="26/30";
				$marks="350 out of 400";
				$grade="A+";
			break;
			case($enroll=="2"&&$name=="Talha"):
				$stdname=$name;
				$stdclass=$class;
				$stdenroll=$enroll;
				$atten="23/30";
				$marks="233 out of 400";
				$grade="B";
			break;
			case($enroll=="3"&&$name=="Zahid"):
				$stdname=$name;
				$stdclass=$class;
				$stdenroll=$enroll;
				$atten="15/30";
				$marks="80 out of 400";
				$grade="F";
			break;
			default:
				$error="Please Enter Correct Name and enroll for class two";
		}
	}
	else
	{
		$error="Please Enter Correct class";
	}
}
else
{
$error="Please Enter Required Information";
}

?>
<h1>Please Enter Your Valid Information.</h1>
<form action="switch_task.php" method="get">
<label>Student Name:</label>
<input type="text" name="studname"><br><br>
<label>Class:</label>
<input type="text" name="studclass"><br><br>
 <label>Enrollment No:</label>
<input type="number" name="enroll"><br><br>
<input type="submit" value="submit">
</form><br><br>
<h5><?php echo $error ?></h5>
<table>
  <tr>
    <th>Name</th>
    <th>Class</th>
    <th>Enrollment No</th>
    <th>Attendence</th>
    <th>Marks</th>
    <th>Grade</th>
  </tr>
  <tr>
    <td><?php echo $stdname ?></td>
   <td><?php echo $stdclass ?></td>
  <td><?php echo $stdenroll ?></td>
<td><?php echo $atten ?></td>
<td><?php echo $marks ?></td>
<td><?php echo $grade ?></td>
  </tr>
</table>

</body>
</html>
