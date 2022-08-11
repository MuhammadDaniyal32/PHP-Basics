<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
<label>Name:<input type="text" name="imgname"></label>
<br>
<label>Image:<input type="file" name="image"></label>
<button name="Upload">Upload</button>
</form>	
<?php include 'image_display.php'?>
</body>
</html>
