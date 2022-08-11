<?php
// including the database connection file
$mysqli  = mysqli_connect("localhost","root","","fahadaptech");
 
if(isset($_POST['update']))
{    
$id = $_POST['id']; 
$Name=$_POST['Name'];
$Age=$_POST['Age'];
$Salary=$_POST['Salary'];    
    
$result = mysqli_query($mysqli, "UPDATE fahadtbl SET Name='$Name',Age='$Age',Salary='$Salary' WHERE id=$id");
    
	if($result)
	{
		echo "Your record updated now..";
	}
	else
	{
		echo "There is something wrong... try again...";
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM fahadtbl WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $Name = $res['Name'];
    $Age = $res['Age'];
    $Salary = $res['Salary'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    
    
    <form name="form1" method="post" action="Edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="Name" value="<?php echo $Name;?>"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="Age" value="<?php echo $Age;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="Salary" value="<?php echo $Salary;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>