<?php
	$conn = new mysqli("localhost", "root", "", "db_pagination");
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>