<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="table_view.php">
<label>City:</label>
<select name="City">
  <option value="karachi">karachi</option>
  <option value="lahore">lahore</option>
  <option value="multan">multan</option>
  <option value="islamabad">islamabad</option>
</select>
<br><br>
<label>Gender:</label>
<label>MALE</label>
<input type="radio" value="Male" name="gender">
<label>FEMALE</label>
<input type="radio" value="Female" name="gender">
<br><br>
<lable>Karachi</label>
<input type="checkbox" name="check[]" value="karachi">
<lable>Lahore</label>
<input type="checkbox" name="check[]" value="lahore">
<lable>islamabad</label>
<input type="checkbox" name="check[]" value="islamabad">
<input type="submit" name="submit">
</form>


<?php



?>
</body>
</html>