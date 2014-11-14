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
	$id = $_GET['id'];

	$sql = "UPDATE studenti SET ime = '$ime', prezime = '$prezime', godina_rodjenja = '$godina', smer = '$smer', diplomirao = '$diplomirao' WHERE id = '$id'";

	mysql_query($sql);

	?>
	<script>
	window.location.replace('?action=read');
	</script>
	<?php

}
//$diplomirao = (!$diplomirao) ? 0 : 1;

$id = $_GET['id'];
$sql = "SELECT * FROM studenti WHERE id = '$id'";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

 ?>
 <form action="" method="post">

	Ime: <input type="text" name="ime" value="<?php echo $row['ime'] ?>"><br>
	Prezime: <input type="text" name="prezime" value="<?php echo $row['prezime'] ?>"><br>
	Godina rodjenja: <input type="text" name="godina" value="<?php echo $row['godina_rodjenja'] ?>"><br>
	Smer: <select name="smer" id="">
		<option value="film" <?php if($row['smer'] == "film") echo "selected" ?>>Film</option>
		<option value="animacija" <?php if($row['smer'] == "animacija") echo "selected" ?>>Animacija</option>
		<option value="web" <?php if($row['smer'] == "web") echo "selected" ?>>Web</option>
		<option value="audio" <?php if($row['smer'] == "audio") echo "selected" ?>>Audio</option>

	</select><br>
	Diplomirao: <input type="checkbox" name="diplomirao" <?php if ($row['diplomirao'] == 1) echo "checked" ?>><br>
	<input type="submit" value="Unesi">

</form>