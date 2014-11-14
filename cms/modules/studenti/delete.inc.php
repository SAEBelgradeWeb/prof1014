<?php 

$id = $_GET['id'];
$sql = "DELETE FROM studenti WHERE id = '$id'";
mysql_query($sql);


?>
	<script>
	window.location.replace('?action=read');
	</script>