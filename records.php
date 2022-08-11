<?php
include('config.php');
if(isset($_POST["btnUpdate"]))
{
	$varGetID = $_POST["txtID"];
	$varGetFirstName = $_POST["txtFN"];
	$varGetLastName = $_POST["txtLN"];
	$varGetCity = $_POST["txtCity"];
	$varGetCountry = $_POST["txtCountry"];
	
	$qUpdate = "update tbl_users SET first_name = '$varGetFirstName', last_name = '$varGetLastName', city = '$varGetCity', country = '$varGetCountry' where id = '$varGetID'";
	$RslUpdate = mysqli_query($con,$qUpdate);
	if($RslUpdate)
	{
		$varMsg = "<p style='margin-top=100px;' class='alert alert-success'>Record successfully Updated </p>";
	}
	else
	{
		$varMsg = "<p style='margin-top=100px;' class='alert alert-danger'>Error: Please try again </p>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>my web site</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<form action="" method="post">
		<div class="form-group" style="width: 400px;">
			<label>Search by city</label>
			<input type="text" class="form-control" name="txtSearch">
			
		</div>
		<div class="form-group" style="width: 400px;">
			
			<input type="submit" class="btn btn-success pull-right" name="btnSearch" value="Search">
		</div>
	</form>

	<?php
		if(isset($varMsg))
		{
			echo $varMsg;
		}
	?>

	<?php
		if(isset($_GET["id"]) && !empty($_GET["id"]))
		{
		$varID = $_GET["id"];
		$qrySearch = "select * from tbl_users where id = '".$varID."'";
		$SearchResult = mysqli_query($con,$qrySearch);
		$RecordCount = mysqli_num_rows($SearchResult);
		$RecordSET = mysqli_fetch_assoc($SearchResult);
		if($RecordCount > 0)
		{


	?>
		<form action="" method="post" style="margin-top: 50px; width: 500px; margin-left: 20px;">
			<div class="form-group">
				<label>First Name</label>
				<input type="hidden" class="form-control" value="<?php echo $RecordSET['id']; ?>" name="txtID">
				<input type="text" class="form-control" value="<?php echo $RecordSET['first_name']; ?>" name="txtFN">
			</div>

			<div class="form-group">
				<label>Last Name</label>
				<input type="text" class="form-control" value="<?php echo $RecordSET['last_name']; ?>" name="txtLN">
			</div>

			<div class="form-group">
				<label>City</label>
				<input type="text" class="form-control" value="<?php echo $RecordSET['city']; ?>" name="txtCity">
			</div>

			<div class="form-group">
				<label>Country</label>
				<input type="text" class="form-control" value="<?php echo $RecordSET['country']; ?>" name="txtCountry">
			</div>

			<div class="form-group">
				
				<input type="submit" value="Update" class="btn btn-success pull-right" name="btnUpdate">
			</div>
		</form>
	<?php		
		}
	  }
	?>



	<table class="table table-border table-responsive table-hover table-striped
">
		<tr style="background-color: gray; font-weight: bold; color:#fff;">
			<td>Sno</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>City</td>
			<td>Country</td>
			<td>User Name</td>
			<td>Action</td>
		</tr>

		<?php

			if(isset($_POST["btnSearch"]))
			{
				$vargetSearch = $_POST["txtSearch"];

				$qry = "select * from tbl_users where city = '".$vargetSearch."'";
				$rslt = mysqli_query($con,$qry);
				$counter = 1;
				while($rsRecord = mysqli_fetch_assoc($rslt))
				{
					echo "<tr>";
						echo "<td>".$counter."</td>";
						echo "<td>".$rsRecord['first_name']."</td>";
						echo "<td>".$rsRecord['last_name']."</td>";
						echo "<td>".$rsRecord['city']."</td>";
						echo "<td>".$rsRecord['country']."</td>";
						echo "<td>".$rsRecord['user_name']."</td>";
						echo "<td><a href='records.php?id=".$rsRecord['id']."' role='button' class='btn btn-primary'>Edit</a></td>";
					echo "</tr>";

					$counter++;
				}
			}
			else
			{
				$qry = "select * from tbl_users";
				$rslt = mysqli_query($con,$qry);
				$counter = 1;
				while($rsRecord = mysqli_fetch_assoc($rslt))
				{
					echo "<tr>";
						echo "<td>".$counter."</td>";
						echo "<td>".$rsRecord['first_name']."</td>";
						echo "<td>".$rsRecord['last_name']."</td>";
						echo "<td>".$rsRecord['city']."</td>";
						echo "<td>".$rsRecord['country']."</td>";
						echo "<td>".$rsRecord['user_name']."</td>";
						echo "<td><a href='records.php?id=".$rsRecord['id']."' role='button' class='btn btn-primary'>Edit</a></td>";
					echo "</tr>";

					$counter++;
				}
			}



			
		?>

	</table>
</body>
</html>