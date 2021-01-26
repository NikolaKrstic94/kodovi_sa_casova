<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>D_16_Nikola_Krstic</title>
</head>
<body>
<?php

require_once "kosarkas.php";
require_once "sportista.php";

// Napisati funkciju najviseUtakmica koja vraća košarkaša koji je odigrao najveći broj utakmica.
function najviseUtakmica($kosarkasi){
   $nizNajviseUtakmica = [];
   $i = 0;
   $kosarkasMax = $kosarkasi[0];
   $max = count($kosarkasMax->getPoeni());

   foreach($kosarkasi as $kosarkas){
      if(count($kosarkas->getPoeni()) > $max){
         $max = count($kosarkas->getPoeni());
      }
   }
   foreach($kosarkasi as $kosarkas){
      if(count($kosarkas->getPoeni()) == $max){
         $nizNajviseUtakmica[$i] = $kosarkas;
         $i++;
      }
   }
   return $nizNajviseUtakmica;
}


//Napisati funkciju najvisePoena koja vraća košarkaša koji je postigao najveći broj poena na jednoj utakmici.
function najvisePoena($kosarkasi){
   $kosarkasMax = $kosarkasi[0];
   $poeni = $kosarkasi[0]->getPoeni();
   $max = $poeni[0];
   foreach ($kosarkasi as $kosarkas) {
      $poeni = $kosarkas->getPoeni();
      foreach ($poeni as $p) {
         if($p > $max){
            $max = $p;
            $kosarkasMax = $kosarkas;
         }
      }
   }
   return $kosarkasMax;
}

function najviseProsecnoPoena($kosarkasi){
   $kosarkasAvgMax = $kosarkasi[0]; // objekat
   $avgMax = $kosarkasAvgMax->prosekPoena(); // prosek poena

   foreach($kosarkasi as $kosarkas){
      if($kosarkas->prosekPoena() > $avgMax){
         $avgMax = $kosarkas->prosekPoena();
         $kosarkasAvgMax = $kosarkas;
      }
   }
   return $kosarkasAvgMax;
}


$k1 = new Kosarkas("Nikola", "Krstic", 1994, "Bela Palanka", array(12,30,25,20,10));

$k2 = new Kosarkas("Vlade", "Divac", 1968, "Prijepolje", array(32,12,38,15,20,12,10));

$k3 = new Kosarkas("Pedja", "Stojakovic", 1977, "Pozega", array(25,4,35,40,14));

$k4 = new Kosarkas("Aleksandar", "Djordjevic", 1967, "Beograd", array(40,20,14,16,5,17,14));

$kosarkasi = array($k1, $k2, $k3, $k4);

// Ispis svih podataka o kosarkasima
// foreach ($kosarkasi as $kosarkas){
//    $kosarkas->ispisiKosarkasa();
// }
echo "<hr>";

foreach(najviseUtakmica($kosarkasi) as $kosarkas){
   $kosarkas->ispisiKosarkasa();
}

najvisePoena($kosarkasi)->ispisiKosarkasa();

najviseProsecnoPoena($kosarkasi)->ispisiKosarkasa();
 ?>
</body>
</html>

