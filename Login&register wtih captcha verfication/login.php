<?php
$con = mysqli_connect("localhost","root","","php_daniyal");

if(isset($_POST['login'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$cap=$_POST['captcha'];
	
	
	$sql="Select * From Login_php Where Username='".$user."' && Password='".$pass."' limit 1";
	$result=mysqli_query($con,$sql);
	
	if($_SESSION['captcha']==$cap){
		
		echo"<br>Captcha Solved!!<br>";
		
	if(mysqli_num_rows($result)==1){
		
		echo"<br>LOGIN SUCCESSFULLY!!!!!!!!!!!!!!!!!!!!!!!!!!!!!<br>";
		session_destroy();
		}
		
		else
		{
			
			if(!isset($_SESSION['attempt']))
			{
				$_SESSION['attempt']=0;
			}
			$_SESSION['attempt']+=1;
			if($_SESSION['attempt']===3)
			{
				$_SESSION['msg']="disabled";
			}
			
			echo"<br>Wrong Password/username<br>";
			}
	
	}
	
	else{
		if(!isset($_SESSION['attempt']))
			{
				$_SESSION['attempt']=0;
			}
			$_SESSION['attempt']+=1;
			if($_SESSION['attempt']===3)
			{
				$_SESSION['msg']="disabled";
			}
		
		echo "<br>Please solve captch!!<br>";
		
		}	
}

?>