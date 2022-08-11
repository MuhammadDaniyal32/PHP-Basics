<?php include"connection.php"?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Coupon Code In PHP</title>
</head>

<body>
<form method="post" action="submit.php">
<label>Get Coupon Here</label>
<input type="text" name="coupon" id="coupon" required readonly/>
<button type="button" id="generate">Generate Coupon</button>
<button type="button" name="submit" id="submit" style="display:none">submit</button>
</form><br>

<form method="post" action="">
<label>Use coupon here</label>
<input type="text" name="coupon" required/>
<button name="use">Use Coupon</button>
</form>
<br>
<?php include"use.php"?>

<script src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#generate').on('click', function(){
			$.get("generate.php", function(data){
				$('#coupon').val(data);
			});
			$(this).attr("disabled", "disabled");
			$('#submit').show();
		});
	});
</script>

</body>
</html>