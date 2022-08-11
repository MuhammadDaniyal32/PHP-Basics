<?php
$con = mysqli_connect("localhost", "root", "", "php_db");
	
	if(!$con){
		die("Error: Failed to connect to database!");
	}
?>