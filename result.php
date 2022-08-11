<?php
/*
$name = $_GET['city'];
$gender = $_GET['gender'];
$cities = $_GET['cities'];
$values = " ";

if (isset($_GET['city'])) {
    echo "You chose the following city(s): <br>";

    foreach ($name as $color){
         $values .= $color."<br />";
		 //echo $color."<br/>";	
    }
	echo $values."<br />";
	//echo $gender."<br />";
	//echo $cities."<br />";

} else {
    echo "You did not choose a city.";
}

*/


//----------------------------------------------
$con = mysqli_connect("localhost","root","","fahadaptech");

$name = $_GET['city'];
$gender = $_GET['gender'];
$cities = $_GET['cities'];
$values = " ";

 foreach ($name as $color){
         $values .= $color." ";
		 //echo $color."<br/>";	
    }

$query = "INSERT INTO `fahadtbl2`(`interestedplaces`, `gender`, `city`) VALUES ('$values','$gender','$cities')";

$run = mysqli_query($con, $query);

if($run)
{
	echo "Record inserted Successfully :)" ;
}
else
{
	echo "Error :(" ;
}


?>