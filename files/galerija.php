<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Galerija slika</title>
</head>
<body>

	<?php 
	$dir = getcwd();
	$images = opendir($dir . "/slike");
	while ($slika = readdir($images)) {
	
		if($slika != "." AND $slika != "..") {
			//$sl_ar[] = $slika;

			?>
				<a href="slike/<?php echo $slika ?>"><img width="100" src="slike/<?php echo $slika ?>" alt=""></a>
			<?php
		}
	}


	//var_dump($sl_ar);


	 ?>
</body>
</html>