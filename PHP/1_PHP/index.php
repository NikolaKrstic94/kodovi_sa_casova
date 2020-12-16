<?php
// $h = 17;
// $m = 2;
// $suma = $h * 60 + $m;
// echo $suma;
// echo "<br>";
// echo $minuti;
// echo "<br>";
// $sumaDrugiZad = $sati * 60 + $minuti;
// echo $sumaDrugiZad;
// echo "<br>";
// echo date("G");
// echo $sati;
// echo "<br>";
// $sati = date("G");
// $minuti = date("i");
// echo "Trenutno vreme je " . $sati . ":" . $minuti;

//***ZAD 3 ****/
$cena = 20;
$nov = 50;
echo $kusur = $nov-$cena;
echo "<br>";
// *** ZAD 4 ***
$eur = 30;
$kursEura = 117.78;
$sumaProdajeEura = $eur * $kursEura;
echo $sumaProdajeEura . " dinara";
echo "<br>";
//  *** Zad 5 ***
$din = 2000;
echo $kupuje = $din / $kursEura . "eura";
echo "<br>";
// **ZAD 6 ****
$kursDolara =96.4;
echo "6. zad iznos eura u dolarima"; 
echo  $sumaProdajeEura / $kursDolara;
echo "<br>";
// **zad 7 ****
$dol = 50;
$sumaProdajeDolara = $dol * $kursDolara;
echo "7. zad Iznos dolara u evrima je";
echo $sumaProdajeDolara / $kursEura;
echo "<br>";
// ***zad 8 ****
$cel = 30;
$far = $cel * 1.8 + 32;
$farSpecific = 86;
$celConvertedFar = ($farSpecific - 32) / 1.8;
echo "Temperature u fahrenhajtima je: " . $far;
echo "<br>";
echo "Temperatura u celzijusima je" . $celConvertedFar;
echo "<br>";
// ***zad 9 ****
$k = $cel + 273.15;
echo "Temperatura u kelvinima(od date vrednosti u C) je: " . $k;
echo "<br>";
$celConvertedKel = $k - 273.15;
echo "Temperatura u celzijusima od Kelvina je:" . $celConvertedKel;
echo "<br>";
// ***zad 10 ***
$cena = 1500;
$popust = 10;
$popustCena = $cena - ($cena / $popust);
echo "Cena sa popustom je " . $popustCena;
?>