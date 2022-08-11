<?php 
include('conn.php');
 $id=$_GET['id'];
 mysqli_query($conn,"DELETE FROM `image` WHERE id=$id");
 header("location: index.php");


?>