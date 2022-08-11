<!doctype html>
<?php
if(isset($_POST['Submit'])){
	$con = mysqli_connect("localhost","root","","php_daniyal");
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	$query="INSERT INTO `Login_php`(`Username`, `Password`) VALUES ('$user','$pass')";
	$RUN=mysqli_query($con,$query);
	if($RUN){
		echo"saved!!";
		header("location: index.php");
		}
		else{
			echo"error!!";
			}
	
	}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="Register.php">
<label>Username</label>
<input type="text" name="username"/><br>

<label>Password</label>
<input type="password" name="password"/>

<input type="submit" name="Submit"/>
</form>
</body>
</html>