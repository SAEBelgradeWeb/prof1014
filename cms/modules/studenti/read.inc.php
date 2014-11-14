 
<a href="?action=create">Dodaj novog studenta</a>
 <table>
 	<tr>
 		<th>NO</th>
 		<th>Ime</th>
 		<th>Prezime</th>
 		<th>Godiste</th>
 		<th>Smer</th>
 		<th>Diplomirao</th>
 		<th>Akcije</th>
 	</tr>


<?php 

	$sql = "SELECT * FROM studenti";
	$result = mysql_query($sql);

	$i = 0;
	while($row = mysql_fetch_assoc($result)) {
		$i++;
		?>
 	<tr>
 		<td><?php echo $i ?></td>
 		<td><?php echo $row['ime'] ?></td>
 		<td><?php echo $row['prezime'] ?></td>
 		<td><?php echo $row['godina_rodjenja'] ?></td>
 		<td><?php echo $row['smer'] ?></td>
 		<td><?php 
 		if ($row['diplomirao'] == 1) {
 			echo "da";
 		} else {
 			echo "ne";
 		}
 		 ?></td>
 		 <td><a href="?action=update&id=<?php echo $row['id'] ?>">Edit</a> | <a href="?action=delete&id=<?php echo $row['id'] ?>">Delete</a></td>
 	</tr>


	<?php
	}

 ?>

 </table>