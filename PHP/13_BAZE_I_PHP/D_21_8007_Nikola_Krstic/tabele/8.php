<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Svi filmovi</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="../style.css">

</head>
<body>
<?php
require_once "../connection.php";

echo "<h3><a href='../index.php'>Nazad na pocetnu</a></h3>";
echo "<h3>Filmovi po reziserima</h3>";


$upit = "SELECT DISTINCT reziseri.ime AS 'Ime Autora', reziseri.prezime AS 'Prezime Autora', reziseri.id AS 'id' FROM reziseri
INNER JOIN filmovi
ON reziseri.id = filmovi.reziser_id
INNER JOIN film_zanr
ON filmovi.id = film_zanr.film_id
INNER JOIN zanrovi
ON zanrovi.id = film_zanr.zanr_id
ORDER BY filmovi.naslov;";


$result = $conn->query($upit);

if($result->num_rows){
   foreach($result as $reziser){
      $reziserPunoIme = $reziser['Ime Autora'];
      $reziserPunoIme .= " ";
      $reziserPunoIme .= $reziser['Prezime Autora'];

      $trenutniReziser = $reziser['id'];
      echo "<h3>$reziserPunoIme</h3>";

      $upitNovi = "SELECT filmovi.naslov, filmovi.godina, filmovi.ocena, reziseri.ime AS 'Ime Autora', reziseri.prezime AS 'Prezime Autora', zanrovi.naziv AS 'Zanr' FROM reziseri
      INNER JOIN filmovi
      ON reziseri.id = filmovi.reziser_id
      INNER JOIN film_zanr
      ON filmovi.id = film_zanr.film_id
      INNER JOIN zanrovi
      ON zanrovi.id = film_zanr.zanr_id
      WHERE reziseri.id LIKE ".$trenutniReziser."
      ORDER BY reziseri.id;";

      $resultNovi = $conn->query($upitNovi);
      ispisTabele($resultNovi);
   }
}



 ?>

</body>
</html>

