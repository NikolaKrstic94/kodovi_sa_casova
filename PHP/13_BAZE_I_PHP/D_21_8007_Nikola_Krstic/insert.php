<?php
require_once "connection.php";

$upit = "INSERT INTO zanrovi(id, naziv) VALUES
(1, 'Crime'),
(2, 'Drama'),
(3, 'Adventure'),
(4, 'Mystery');";

$upit .= "INSERT INTO reziseri(id, ime, prezime, pol)VALUES
(1,'Sidney','Lumet', 'Z'),
(2,'Frank','Durabont', 'M'),
(3,'Peter', 'Jackson', 'M'),
(4, 'Christopher', 'Nolan', 'M');";

$upit .= "INSERT INTO filmovi(id, naslov, godina, ocena, reziser_id) VALUES
(1, '12 Angry Men', 1957, 9.0, 1),
(2, 'The Green Mile', 1999, 8.6, 2),
(3, 'The Lord of THE Rings', 2003, 8.9,3),
(4, 'The Shawshank Redemption', 1994, 9.3, 2),
(5, 'Memento', 2000, 8.4, 4);";

$upit .= "INSERT INTO film_zanr(film_id, zanr_id) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 2),
(5, 4);";

if($conn->multi_query($upit)){
   echo "Uspesno uneseni podaci";
}
else {
   echo "Doslo je do greske" . $conn->error;
}
 ?>
