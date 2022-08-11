<?php
$mysqli  = mysqli_connect("localhost","root","","fahadaptech");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM fahadtbl WHERE id=$id");

?>