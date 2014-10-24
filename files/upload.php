<pre>
<?php
$dir = getcwd();
var_dump($_FILES);

$ime_fajla = time() . "_" .$_FILES['slike']['name'];
$ime_fajla = str_replace(" ", "_", $ime_fajla);

move_uploaded_file($_FILES['slike']['tmp_name'], $dir . '/slike/' . $ime_fajla );


?></pre><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload slika</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		Upload slike: 
		<input type="file" name="slike">
		<br>
		<input type="submit" value="Posalji">
	</form>
</body>
</html>