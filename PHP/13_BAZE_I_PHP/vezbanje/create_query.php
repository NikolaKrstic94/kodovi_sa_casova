<?php
require_once "connection.php";


$q = "CREATE TABLE IF NOT EXISTS pacijenti(
   id INT UNSIGNED PRIMARY KEY,
   ime VARCHAR(50),
   prezime VARCHAR(150),
   visina SMALLINT UNSIGNED,
   tezina FLOAT UNSIGNED
)";
$resultOfQuery = $conn->query($q);

if($resultOfQuery) {
   echo "<p>Tabela pacijenti je uspesno dodata u bazu!</p>";
}
else {
   $err = $conn->error;
   echo "<p>Doslo je do greske prilikom kreairanja tabele pacijenti: $err </p>";
}








?>
