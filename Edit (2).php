<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
$mysqli = mysqli_connect("localhost","root","","test1");

if(isset($_POST['update']))
{
$id =$_POST['Id'];
$city =$_POST['City'];	
$gender =$_POST['Gender'];	
$interestedplaces =$_POST['Interestedplaces'];

$result = mysqli_query($mysqli, "UPDATE class_1 SET City='$city', Gender='$gender', Interestedplaces='$interestedplaces' WHERE Id=$id");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM class_1 WHERE Id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $city = $res['City'];
    $gender = $res['Gender'];
    $interestedplaces = $res['Interestedplaces'];
}
?>

<form method="post" action="Edit.php">
<input type="text" value="<?php echo $city;?>">
<input type="text" value="<?php echo $gender;?>">
<input type="text" value="<?php echo $interestedplaces;?>">
<label>City:</label>
<select name="City">
 <option value="<?php echo $city;?>"></option>
<!-- <option value="lahore">lahore</option>
 <option value="karachi">karachi</option>
 <option value="islamabad">islamabad</option>-->
</select>
<br><br>
<label>Gender:</label>
<label>MALE</label>
<input type="radio" value="<?php echo $gender;?>" name="gender" checked>
<label>FEMALE</label>
<input type="radio" value=""<?php echo $gender;?>"" name="gender">
<br><br>
<label>karachi:</label>
  <input type="checkbox" value=""<?php echo $interestedplaces;?>"" name="interestedplaces[]"/>
  <label>lahore:</label>
 <input type="checkbox" value=""<?php echo $interestedplaces;?>"" name="interestedplaces[]"/>
<br><br>
<input type="submit" name="Update" value="update">
</form>

</body>
</html>