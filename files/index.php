
<pre>
<?php 

$dir = getcwd();
$fajl = $dir . "/fajl.txt";
/*
$result = scandir( $dir . '/uploads');
$size = filesize($dir.'/uploads');
$fajl = fopen("fajl.txt", "r");
//fwrite($fajl, "La lalla lalla ");
$sadrzaj = fread($fajl, $size);
//var_dump($sadrzaj);
fclose($fajl);
*/

// copy($fajl, $dir . "/novi/vl.txt");
// //copy("/Applications/MAMP/htdocs/nesto/fajl1.txt", "/Applications/MAMP/htdocs/nesto/drugifolder/fajl1.txt");

// file_put_contents($fajl, " I Dodali smo jos nesto", FILE_APPEND);

// $sadr = file_get_contents($fajl);

//$res = rmdir($dir. '/novi');

$direktorijum = opendir($dir);

while ($item = readdir($direktorijum)) {

	if($item != "." AND $item !="..") {
		echo $item;
		echo "<br>";
	}

}

//var_dump($res);

 ?>