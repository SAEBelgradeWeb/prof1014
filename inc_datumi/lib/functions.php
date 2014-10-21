<?php 

include_once 'templates/header.php';


function vrati_ng($godina){
	$ts = mktime(1,0,0, 1, 1, $godina);
	$dan = date('l', $ts);
	return $dan; 
}


function dan_noc(){
	$sati = (int)date("H");
	if($sati > 6 && $sati < 18 ) {
		echo "yellow";
	} else {
		//echo "black";
	}
}

function usa(){
	$usa = date('H:i:s', strtotime("-3 hours"));
	return $usa; 
}

function srede(){

	for ($i=0; $i < 6; $i++) {
		$ts = strtotime("1st September 2014 Wednesday +".$i." week");

		if((int)date("m", $ts) == 9) {
			echo date("d. m. Y l", $ts) . "<br>";
		}
	}

}

function ng(){

	$g = (int)date("Y");
	$sg = $g - 10;

	for ($i=1; $i <=10; $i++) { 
		$ts = strtotime("1st January ". $sg . " +" . $i . " year");

		echo date('Y - l', $ts) . "<br>";
	}

}

ng();
//echo usa();
//echo vrati_ng(2015);
//zadatak 1. 
//napisi funkciju koja ce da vrati koji dan u nedelji je nova godina a da mozemo da posaljemo godinu

//zadatak 2.
//napisi funkciju koja menja boju pozadine sajta u zavisnosti da li je noc ili dan

//zadatak 3.
//napisi funkciju koja ce da nam vrati koliko sati je u americi


//zadatak 4.
//Napisi funkciju koja ce da izracuna na koji datum padaju srede u ovom mesecu

//zadatak 5. 
//odstampaj na koji dan u nedelji su pale nove godine u poslednjih deset godina

 ?>