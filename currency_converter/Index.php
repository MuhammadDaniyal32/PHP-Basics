<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Currency Converter App Using PHP Source Code</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-6 alert alert-danger">
			<form method="POST" action="">
				<div class="form-inline">
					<select name="val" class="form-control">
						<option value="PHP">PK</option>
						<option value="USD">USD</option>
					</select>
					<input class="form-control" type="number" name="digit"/>
				</div>	
				<br />
				<div class="form-inline">
					<label>Select Currency: </label>
					<select name="currency" required="required" class="form-control">
						<option value="">Select an option</option>
						<option value="USD">USD</option>
						<option value="Euro">Euro</option>
						<option value="PHP">PHP</option>
						<option value="Japanese Yen">Japanese Yen</option>
						<option value="Pound">Pound</option>
					</select>
					<br /><br />
					<center><button type="submit" name="convert" class="btn btn-primary form-control" style="width:30%;">Convert</button></center>
					<br />
				</div>	
					<?php require 'converter.php'?>
			</form>
		</div>
	</div>
</body>
</html>