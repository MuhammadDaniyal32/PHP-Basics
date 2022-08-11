<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$con = mysqli_connect("localhost","root","","php_daniyal");
$query="Select * from crud";
$run = mysqli_query($con,$query);
?>
<table border="2">
<tr>
<td>Name</td>
<td>Gender</td>
<td>CNIC</td>
<td>Email</td>
<td>Password</td>
<td>Address</td>
</tr>

<?php
if($run)
{
	while($data = mysqli_fetch_assoc($run))
	{
		?>
        <tr>
        <td><?php echo $data['Name']; ?></td>
        <td><?php echo $data['Gender']; ?></td>
        <td><?php echo $data['Cnic_no']; ?></td>
        <td><?php echo $data['Email']; ?></td>
        <td><?php echo $data['Password']; ?></td>
        <td><?php echo $data['Address']; ?></td>
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