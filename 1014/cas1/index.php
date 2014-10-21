<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<pre>
	<?php

	// $tropsko_voce = array('banana', 'kivi');

	// $voce = array('jabuka', 'kruska', $tropsko_voce);


	$voce = array(
		'jabuka',
		'kruska',
		array(
			'banana',
			'kivi'
			),
		'sljiva'
		);


	$korisnik1 = array(
		'ime' => 'Vladimir',
		'prezime' => 'Lelicanin',
		'godina' => 40

		);


	unset($korisnik1['ime']);

	// array_push($voce, 'sljiva');
	// array_pop($voce);
	// array_unshift($voce, 'nektarina');
	// array_shift($voce);


	array_splice($voce, 2, 1, 'nektarina');
	var_dump($voce);

	echo count($voce);

	var_dump($korisnik1);

	echo $korisnik1['godina'];

		 ?>
</pre>

</body>
</html>