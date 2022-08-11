<!doctype html>
<?php session_start();?>
<html>
<head>
<meta charset="utf-8">
<title>Login With Captcha</title>
</head>

<body>
<a href="Register.php">Register</a>

<form method="post">
<label>Username</label>
<input type="text" name="username" required/>
<label>Password</label>
<input type="text" name="password" required/>

<h3>Solve Captcha</h3>
<center><img src="captcha.php"/></center>
<br>
<br>
<input type="text" name="captcha"/>

<?php include'login.php'?>
<?php 

$attemp="";
if(isset($_POST['login']))
{
	echo"Your Attemps=".$_SESSION['attempt'];
	}

?>
<center><button name="login" <?php if(ISSET($_SESSION['msg'])){ echo $_SESSION['msg'];}?>>LOGIN</button> <a href="reset.php"><span></span> Reset</a></center>

</form>	


</body>
</html>