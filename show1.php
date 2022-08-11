<?php
$con = mysqli_connect("localhost","root","","fahadaptech");
$query = "select * from fahadtbl2";
$run = mysqli_query($con, $query);
?>
<table border="1">
<tr>
<td>InterestedPlaces</td>
<td>Gender</td>
<td>City</td>
</tr>
<?php
if($run)
{
while($data = mysqli_fetch_assoc($run))
{
?>
<tr>
<td><?php echo $data['interestedplaces']; ?></td>
<td><?php echo $data['gender']; ?></td>
<td><?php echo $data['city']; ?></td>


<?php	
	}
	?>
    </tr>
    </table>
    <?php
}

?>
