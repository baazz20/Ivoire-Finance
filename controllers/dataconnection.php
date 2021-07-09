<?php

$sname= "localhost";
$unmae= "root";
$password = "BaazZ.Yao.2021";

$db_name = "dbivoire_banque";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Echec de connexion!";
}