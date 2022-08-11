<?php
$con = mysqli_connect("localhost","root","","fahadaptech");

$name = $_POST['Name'];
$age = $_POST['Age'];
$salary = $_POST['Salary'];

if($name != "" &&  $age != "" && $salary != "")
{
$query = "INSERT INTO `fahadtbl`(`Name`, `Age`, `Salary`) VALUES
('$name','$age','$salary')";

$run = mysqli_query($con, $query);

if($run)
{
	echo "Record inserted Successfully :)" ;
}
else
{
	echo "Error :(" ;
}

}

else
{
	echo "You need to fill all textboxes...";
}




















?>