<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Osoba</title>
</head>
<body>
<?php
require_once "osoba.php";
require_once "zaposleni.php";

function prosekPlate($sviZaposleni){
   $sumaPlata = 0;
   foreach ($sviZaposleni as $zaposlen => $value) {
      # code...
   }
}

$osoba1 = new Osoba("Nikola", "Krstic", 1994);
$osoba1->ispisiOsobu();

echo "<hr>";

$zaposlen1 = new Zaposleni("Buduci Nikola", "Krstic", 1994, 45000, "ekonomista");
$zaposlen2 = new Zaposleni("Mika", "Mikic", 1993, 48000, "programer");
$zaposlen3 = new Zaposleni("Zika", "Zikic", 1992, 50000, "rudar");

$sviZaposleni = array($zaposlen1, $zaposlen2, $zaposlen3);
$zaposlen1->ispisiZaposlenog();


   ?>
</body>
</html>