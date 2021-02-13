<?php
require_once "connection.php";

/* $q = "INSERT INTO pacijenti VALUES
(6, 'Sava', 'Petkovic', 178, 88);
      INSERT INTO pacijenti VALUES
(7, 'Milena', 'Mitic', 190, 88);

"; */

$q = "INSERT INTO pacijenti VALUES(6,'Sava', 'Petkovic', 178,88);";

$q .= "INSERT INTO pacijenti VALUES
(7, 'Milena', 'Mitic', 190, 88)";

$q .= "UPDATE pacijenti SET prezime = 'Petronijevic' WHERE id=3;";


if($conn->multi_query($q)){
   echo "<p>Uspesno izvrsen niz upita</p>";
}
else {
   echo "<p>Neuspesno izvrsen niz upita".$conn->error."</p>";
}



 ?>
