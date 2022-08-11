<?php 
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=excel.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
require_once 'conn.php';

$output="";

if (isset($_POST['export'])) {
	$output .="
	<table>
	<thead>
	<tr>
	<th>Member ID</th>
	<th>Member Name</th>
	<th>Member Email</th>
	<th>Member Address</th>
	</tr>
	<tbody>
	";

	$query = mysqli_query($con, "SELECT * FROM `members_tbl`") or die(mysqli_errno());
	while ($fetch=mysqli_fetch_array($query)) {
		$output .= "
		<tr>
		<td>".$fetch['Mem_Id']."</td>
		<td>".$fetch['Mem_name']."</td>
		<td>".$fetch['Mem_email']."</td>
		<td>".$fetch['Mem_address']."</td>
		</tr>
		";
	}

	$output .="
	</tbody>
	</table>
	";
echo $output;

}

 ?>
