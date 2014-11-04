<?php 
if(isset($_GET['boja'])) {
	$boja = $_GET['boja'];
} else {
	$boja = "beige";
}



// if ("plava" = $boja) {
// }
// if ($boja = "plava") {
// }
//$boja = ( isset($_GET['boja']) ) ? $_GET['boja'] : "beige";

ob_start();
if ($boja == "beige") {
	include('lib/content1.php');
} else if ($boja == "red") {
	include('lib/content2.php');
} 

$content = ob_get_clean();


 ?>