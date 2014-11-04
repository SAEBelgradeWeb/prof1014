<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<h1>Testing get</h1>

<?php 
	if (isset($_POST['pol']) )
		echo 'Zdravo ukljuci si radio button';
	else
		echo 'Niste obelezili radio button';
	
 ?>	
<form action="" method="POST">
	
	<input type="text" name="ime"> 
	<label for="ime">Ime i prezime</label><br>

	<input type="text" name="email"> Vas email<br>

	<input type="radio" id="muski" name="pol" value="m"> 
	<label for="muski">Muski</label><br>

	<input type="radio" id="zenski" name="pol" value="z"> Zenski

	<br>
	<textarea name="komentar" id="" cols="30" rows="10"></textarea>
	<input type="submit" value="Uloguj se!">
</form>

</body>
</html>