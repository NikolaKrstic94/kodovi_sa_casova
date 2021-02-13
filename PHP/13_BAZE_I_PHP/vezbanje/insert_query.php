<?php
require_once "connection.php";

$q = "INSERT INTO pacijenti(id, ime, prezime, visina, tezina) VALUES
(1,'Petar', 'Petkovic', 185, 89),
(2, 'Tijana', 'Savic', 162, 59),
(3, 'Veljko', 'Petrovic', 175, 66),
(4, 'Danijela', 'Savic', 168, 61),
(5, 'Petar', 'Nikolic', 179, 77)";

if($conn->query($q)){
   echo "<p>Uspesno dodati pacijenti</p>";
}
else{
   echo "<p>Greska prilikom dodavanja redova u tabelu pacijenti: ".$conn->error."</p>";
}





 ?>
