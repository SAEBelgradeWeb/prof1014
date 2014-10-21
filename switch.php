<?php
$comments = array('Komentar 1','Kako bezveze tekst!','Svaka cast Vucicu, sto za ovako kratko vreme ...','Kakav si bot','Samo napred Obilic');

$post = array(
	'post' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum tenetur praesentium, ducimus enim laboriosam delectus officiis consequuntur facilis quod, dignissimos libero distinctio esse aut alias necessitatibus dicta. Labore, impedit in',
	'author' => 'Brana',
	'post_date'=>'October 14th 2014',
	'comments' => $comments
	);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h5><?php echo $post['post_date']; ?></h5>
	<h2><?php echo $post['author']; ?></h2>
	<p><?php echo $post['post']; ?></p>
	<h3>Komentari</h3>
	<?php 
		foreach ($post['comments'] as $komentar) {
			echo $komentar;
			echo '<br>';
		}

	 ?>
</body>
</html>
