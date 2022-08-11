<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$con = mysqli_connect("localhost","root","","php_daniyal");

$name=$_POST['Name'];
$gender=$_POST['gender'];
$cnic=$_POST['cnic'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
if($name !="" && $cnic !="" && $email !="" && $password !="" && $address!=""){
$query ="INSERT INTO `crud`(`Name`, `Gender`, `Cnic_no`, `Email`, `Password`, `Address`) VALUES
('$name','$gender','$cnic','$email','$password','$address')";
$RUN=mysqli_query($con,$query);
if($RUN)
{
	echo"Your data insert successfully!";
}
else
{
	echo"Error!!!!!!!!!!!!!!!!!!!!!!!!!!";
}
}
else
{
	echo "Empty Textbox!!";
}
?>

</body>
</html>