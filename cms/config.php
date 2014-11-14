<?php 
$host = "localhost";
$user = "root";
$pass = "root";
$db = "cms2";


$conn = mysql_connect($host, $user, $pass);
if (!$conn) die("Can't connect to database");

$db = mysql_select_db($db);
if(!$db) die("Nema te baze");


 ?>