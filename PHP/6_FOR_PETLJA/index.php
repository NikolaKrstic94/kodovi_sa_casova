<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
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
for($i = 1; $i <= 3; $i++){
   
   echo "<img src='$i.jpg'> <br>";
}
   echo "<br>";echo "<br>";
// zad 11
$suma = 0; // suma svih brojeva deljivih sa 9
for($i = 1; $i <= 30; $i++){
   if($i % 9 == 0) {
      $suma += $i;  // 9+18+27 = 54
   }
}
echo "Suma svih brojeva deljivih sa 9 je $suma";

   echo "<br>";echo "<br>";
// zad 12



?>
</body>
</html>