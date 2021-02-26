
<?php

require_once "connection.php";
$upit = "CREATE TABLE reziseri (
   id INT UNSIGNED PRIMARY KEY,
   ime VARCHAR(50),
   prezime VARCHAR(50),
   pol CHAR(1)
)ENGINE=InnoDB CHARACTER SET utf8;";

$upit .= "CREATE TABLE filmovi(
   id INT UNSIGNED PRIMARY KEY,
   naslov VARCHAR(255),
   godina SMALLINT UNSIGNED,
   ocena DECIMAL(6,2),
   reziser_id INT UNSIGNED,
   FOREIGN KEY (reziser_id)
   REFERENCES reziseri(id)
)ENGINE=InnoDB CHARACTER SET utf8;";

$upit .= "CREATE TABLE zanrovi(
   id INT UNSIGNED PRIMARY KEY,
   naziv VARCHAR(255)
) ENGINE = InnoDB CHARACTER SET utf8;";

$upit .= "CREATE TABLE film_zanr(
   film_id INT UNSIGNED,
   FOREIGN KEY(film_id)
   REFERENCES filmovi(id),
   zanr_id INT UNSIGNED,
   FOREIGN KEY(zanr_id)
   REFERENCES zanrovi(id),
   PRIMARY KEY(film_id, zanr_id)
) ENGINE = InnoDB CHARACTER SET utf8;";

if($conn->multi_query($upit)){
   echo "Uspesno dodate tabele sa multi query";
}
else {
   echo "Something went wrong".$conn->error;
}



 ?>


