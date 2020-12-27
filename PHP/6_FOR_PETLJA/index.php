<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
   img {
      width: 50px;
   }
      </style>
</head>
<body>
   <?php
   // $i = 1;
   // while($i <= 9){
   //    $p = 9 * $i;
   //    echo "<p>9 x $i = $p</p>";
   // $i++;
   // }
   // // tablica mnozenja brojem 9 preko for petlje
   // for($i = 1; $i < 9; $i++){
   //    $p = 9*$i;
   //    echo "<p>9 x $i = $p </p>";
   //    echo " <img>"
   // }

   //zad 2 pocevsi od 1, paralelno ispisivati svaki sledeci i svaki drugi broj, sve dok neki od njih ne bude veci od 10
  $i = 1;
  $j = 1;
  /* 
  i |1 | 2 | 3 |4 | 5 |
  ----------------------------- 
  j |1 | 3 | 5 |7|9|

*/
   // while ($i <= 10 && $j <= 10) {
   //    echo "<p>$i &nbsp; $j</p>";
   //    $i++;
   //    $j+=2;
   // }


   // // Preko FOR petlje
   // for($i = 1, $j = 1; $i <= 10, $j <= 10; $i++, $j += 2){
   //    echo "<p>$i &nbsp; $j</p>";
   // }



// zad 1 
for ($i=1; $i <=20; $i++) { 
   echo "$i ";
}
   echo "<br>";echo "<br>";

// zad 2
for($i = 20; $i >=1; $i--){
   echo "$i ";
}
   echo "<br>";echo "<br>";
// zad 3 
for($i = 1; $i <= 20; $i++) {
   if($i % 2 == 0){
      echo "$i ";
   }
}

   echo "<br>";echo "<br>";
// zad 4
for($i = 5; $i <= 15; $i++){
   $dvostruko = $i * 2;
   echo "$dvostruko ";
}

   echo "<br>";echo "<br>";
// zad 5
$suma = 0;
for($i = 1; $i <= 100; $i++){
   $suma += $i;
}
echo "$suma";

   echo "<br>";echo "<br>";
// zad 6
   $n = 10;
   $suma = 0;
   for($i = 1; $i <= $n; $i++){
      $suma += $i;
   }
   echo "Suma je $suma";

   echo "<br>";echo "<br>";
// zad 7
   $n = 3;
   $m = 5;
   $suma = 0;
   for ($i=$n; $i <= $m ; $i++) { 
      $suma += $i;
   }
   echo "Suma je $suma";
   echo "<br>";echo "<br>";
// zad 8
   $n = 3;
   $m = 5;
   $proizvod = 1;
   for ($i=$n; $i <= $m ; $i++) { 
      $proizvod *= $i;
   }
   echo "Proizvod je $proizvod";
   echo "<br>";echo "<br>";
// zad 9
   $sumaKvadrata = 0;
   for($i = $n; $i <= $m; $i++){
      $sumaKvadrata += ($i * $i);
   }
   echo "Suma kvadrata je $sumaKvadrata";

   echo "Proizvod je $proizvod";
   echo "<br>";echo "<br>";
// zad 10
$n = 8;
for($i = 0; $i < $n; $i++){
   $broj = $i % 3 +1;
 echo "<img src='$broj'>";
}
   echo "<br>";echo "<br>";
// zad 11
$suma = 0; // suma svih brojeva deljivih sa 9
for($i = 1; $i <= 30; $i++){
   if($i % 9 == 0) {
      $suma += $i;  // 9+18+27 = 54
   }
}
echo "Zad 11) Suma svih brojeva deljivih sa 9 je $suma";

   echo "<br>";echo "<br>";
// zad 12
$proizvod = 1;
for($i = 20; $i <= 100; $i++){
   if($i % 11 == 0) {
      $proizvod *= $i;
   }
}
echo "12) Proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100 je: $proizvod";

   echo "<br>";echo "<br>";
// zad 13
$brojDelioca = 0;
for($i = 5; $i <= 150; $i++){
   if($i % 13 == 0){
      $brojDelioca++;
   }
}
echo "zad 13: Broj delioca je $brojDelioca ";

echo "<br>";echo "<br>";
// zad 14
$n = 8;
$m = 10;
$sumaBrojeva = 0;
$ukupnoBrojeva = 0;
for($i =$n; $i <= $m; $i++){
   $sumaBrojeva += $i;
   $ukupnoBrojeva++;
}
echo "<br>";echo "<br>";

$arSredina = $sumaBrojeva / $ukupnoBrojeva;
echo "14) $arSredina je aritmeticka sredina brojeva od $n do $m";

echo "<br>";echo "<br>";
// zad 15
$n = -5;
$m = 3;
$pozitivniBrojevi = 0;
$negativniBrojevi = 0;
for($i = $n; $i <= $m; $i++){
   if($i < 0) {
      $negativniBrojevi++;
   }
   elseif($i > 0){
      $pozitivniBrojevi++;
   }
}
echo "<p>15) Pozitivnih ima $pozitivniBrojevi a negativnih: $negativniBrojevi</p>";

echo "<br>";echo "<br>";
// zad 16
$brDeliocaTriPet = 0;
for($i = 5; $i <= 50; $i++){
   if($i % 3 == 0){
      $brDeliocaTriPet++;
   }
   if(($i % 3 != 0) && ($i % 5 == 0)){
      $brDeliocaTriPet++;
   }
}
echo " 16) $brDeliocaTriPet hej";

echo "<br>";echo "<br>";
// zad 17

$n = 4;
$m = 24;
$suma = 0;
$brojacCetiri = 0;
for($i = $n; $i <=$m; $i++){
   if($i % 10 == 4){
      $suma += $i;
      $brojacCetiri++;
   }
}
echo "17) Ukupno broja sa poslednjom cifrom 4 je: $brojacCetiri a suma svih njih je $suma";

echo "<br>";echo "<br>";
// zad 18

$n = 10;
$m = 30;
$a = 3;
echo "18) Brojevi od $n do $m koji su deljivi sa $a su ";

for($i = $n; $i <= $m; $i++){
   if($i % $a == 0){
      echo " $i";
   }
}
echo "<br>";echo "<br>";
// zad 19
$n = 10;
$m = 30;
$a = 3;
echo "19) Brojevi od $n do $m koji nisu deljivi sa $a su: ";
for($i = $n; $i <= $m; $i++){
   if($i % $a != 0){
      echo "$i ";
   }
}
echo "<br>";echo "<br>";
// zad 20) Odrediti sumu brojeva od $n do $m koji
// nisu deljivi brojem $a.
$n = 10;
$m = 30;
$a = 3;
$suma = 0;
for($i = $n; $i <= $m; $i++){
   if($i % $a != 0){
      $suma += $i;
   }
}
echo "<p>Zad 20) Suma je $suma</p>";
// 21) Odrediti proizvod brojeva od $n do $m koji su deljivi
// brojem $a, a nisu brojem $b.
$n = 10;
$m = 30;
$a = 3;
$b = 5;
$proizvod = 1;
if($a * $b != 0){
   for($i = $n; $i <= $m; $i ++){
      if($i % $a == 0 && $i % $b != 0){
         
      }
   }
}








?>
</body>
</html>