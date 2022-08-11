<?php
$con = mysqli_connect("localhost","root","","test1");
$city=$_POST['City'];
$gender=$_POST['gender'];
$places=$_POST['interestedplaces'];

if(isset($_POST['interestedplaces']))

{
	$a="";
	foreach ($places as $ab)
	{
		$a .=$ab.",";
		
		}
	}
	else
	{
		echo"empty";
		}

$query ="INSERT INTO `class_1`(`city`,`gender`, `interestedplaces`) VALUES ('$city','$gender','$a')";
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
$con = mysqli_connect("localhost","root","","test1");
$query="Select * from class_1";
$run = mysqli_query($con,$query);
?>
<table border="2">
<tr>
<td>city</td>
<td>gender</td>
<td>interestedplaces</td>
<td>Edit|Delete</td>
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
        <td><?php echo $data['Interestedplaces']; ?></td>
        <?php echo "<td><a href=\"Edit.php?id=$data[Id]\">Edit</a></td>"; ?>
        
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
