
<?php

$username="root";
$password="holeybe82319";
$sunucu="localhost";
$database="tamirci";
$baglan=mysqli_connect($sunucu,$username,$password,$database);
if (!$baglan) {
	die("Bağlantı hatası : ".mysqli_connect_error());
}


?>
