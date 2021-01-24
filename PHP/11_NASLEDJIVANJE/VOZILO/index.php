<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Vozilo i Automobil</title>
</head>
<body>
<?php

 require_once "automobil.php";
 require_once "vozilo.php";  
 require_once "kamion.php";
 require_once "motocikl.php";
   
   $v = new Vozilo("Dron", "Bela");

   $v->ispisiVozilo();
   
   $a = new Automobil("Karavan","Bela", 5);
   $a->ispisiVozilo();
   $a->ispisiAutomobil();

   echo "<hr>";
   
   $k1 = new Kamion("Kamion sa dve prikolice", "zelena", 3500, "C");

   $m1 = new Motocikl("Harley", "plava", 6, 15);
   
   $k1->ispisiKamion();

   $m1->ispisiMotocikl();
   echo "<hr>";

   
   $k2 = new Kamion("Bez prikolice", "ljubicasta", 1000, "C");

   $m2 = new Motocikl("Kawasaki", "crna", 5, 13);
   
   $k2->ispisiKamion();

   $m2->ispisiMotocikl();
   
   
   
   
   
?>
</body>
</html>