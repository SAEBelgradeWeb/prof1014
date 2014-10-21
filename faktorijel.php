<?php 

$a = array('Teodosic','Bjelica','Braduljica','Bogdanovic','Jovic');
$rezerve = array('Krstic','Nikolic','Divac','Rakocevic','Paspaljh');
// $i=1;
// foreach ($a as $igrac) {
// 	echo $i.'. '.$igrac.'<br>';
// 	$i++;
// }

// echo "<ol>";
// foreach ($a as $igrac) {
	
// 	echo '<li>'.$igrac.'</li>';
// }
// echo "</ol>";

// for ($i=1;$i<=count($a);$i++){
// 	echo $i.'. '.$a[$i-1].'<br>';
// }

foreach ($rezerve as $igrac){
	array_unshift($a, $igrac);
}

print_r($a);
 ?>