<?php  
include('swither.php');

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body style="background-color: <?php echo $boja; ?>;">
	<a href="?boja=beige">Plavo</a>
	<a href="?boja=red">Crveno</a>
	<a href="?boja=yellow">Zuto</a>
	<?php echo $content; ?>
</body>
</html>