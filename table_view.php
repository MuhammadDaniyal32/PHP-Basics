<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

$con = mysqli_connect("localhost","root","","daniyalphp");

$city=$_POST['City'];
$gender=$_POST['gender'];
$place =$_POST['check'];
if(isset($_POST['check'])){
	$chk=""; 
	foreach($place as $chk1)  
   {  
      $chk .= $chk1.",";  
   }
	
	}
	else
	{
		echo"EMpty!!";
		}


$query ="INSERT INTO `php_crud`(`City`, `Gender`, `Places`) VALUES ('$city','$gender','$chk')";
$RUN=mysqli_query($con,$query);
if($RUN)
{
	echo"Your data insert successfully!";
}
else
{
	echo"Error!!!!!!!!!!!!!!!!!!!!!!!!!!";
}
?>

<?php
$con = mysqli_connect("localhost","root","","daniyalphp");
$query="Select * from php_crud";
$run = mysqli_query($con,$query);
?>

<table border="2">
<tr>
<td>City</td>
<td>Gender</td>
<td>Places</td>
</tr>

<?php
if($run)
{
	while($data = mysqli_fetch_assoc($run))
	{
		?>
        <tr>
        <td><?php echo $data['City']; ?></td>
        <td><?php echo $data['Gender']; ?></td>
        <td><?php echo $data['Places']; ?></td>

        <?php        
	}
	?>
    </tr>
    </table>
    <?php
}
else
{
	echo "Error!!!!!!!!!!!!";
}

?>

</body>
</html>