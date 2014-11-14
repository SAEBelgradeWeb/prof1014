<?php 
if (isset($_POST['ime'])) {

	$ime = $_POST['ime'];
	$prezime = $_POST['prezime'];
	$godina = $_POST['godina'];
	$smer = $_POST['smer'];
	$diplomirao = $_POST['diplomirao'];
	if (!$diplomirao) {
		$diplomirao = 0;
	} else {
		$diplomirao = 1;
	}

	$sql = "INSERT INTO studenti SET ime = '$ime', prezime = '$prezime', godina_rodjenja = '$godina', smer = '$smer', diplomirao = '$diplomirao'";

	mysql_query($sql);

	?>
	<script>
	window.location.replace('?action=read');
	</script>
	<?php

}
//$diplomirao = (!$diplomirao) ? 0 : 1;


 ?>
 <form action="" method="post">

	Ime: <input type="text" name="ime"><br>
	Prezime: <input type="text" name="prezime"><br>
	Godina rodjenja: <input type="text" name="godina"><br>
	Smer: <select name="smer" id="">
		<option value="film">Film</option>
		<option value="animacija">Animacija</option>
		<option value="web">Web</option>
		<option value="audio">Audio</option>

	</select><br>
	Diplomirao: <input type="checkbox" name="diplomirao"><br>
	<input type="submit" value="Unesi">

</form>