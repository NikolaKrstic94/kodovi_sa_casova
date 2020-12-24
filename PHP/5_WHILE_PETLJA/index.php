<?php
//    $i = 1;
//    while($i<=20){
//       echo "$i ";
//       $i+=1;
//    }
//    $i = 1;
//    while($i<=20){
//       echo "$i <br>";
//       $i+=1;
//    }
// // zad 2
//    $i = 20;
//    while ($i>=1){
//       echo "$i ";
//       $i--;
//    }

//    echo "<br>";
//    echo "<br>";
// // zad 3
// $i = 1;
// while($i <= 20){
//    if($i % 2 ==0){
//       echo "$i ";
//    }
   
//    $i++;
   
// }
//    echo "<br>";
//    echo "<br>";
// //zad 4
   
   // $boja = ["red", "green", "blue"];
   // $i = 0;
   // while($i<=6){
   //    $randomBoja = array_rand($boja);
   //    echo "<p style='color:$boja[$randomBoja]'>Ovo je paragraf</p>";
   //    $i++;
   // }

   $boja = ["red", "green", "blue", "purple"];
   $brojacBoja = 0;
   $ukupnoBoja = sizeof($boja);
   $i = 0;
   $n = 5;
         while($i < $n){
      $k = $i % $ukupnoBoja;
      echo "<p style='color:$boja[$k]'>Ovo je paragraf</p>";
      $i++;
   }
   
   


//    echo "<br>";
//    echo "<br>";
// //zad 5
//    $borders = ["2px solid red", "3px dashed green"];
//    $i = 0;
//    while($i <= 5){
//       $randomBorder = array_rand($borders);
//       echo "<img src='https://i.postimg.cc/G2Ptn9ch/image.png' style='border: $borders[$randomBorder]'>";
//       $i++;
//    }
//    echo "<br>";
//    echo "<br>";
//zad 6
$sum = 0;
$i = 1;
while($i <= 100){
   $sum += $i;
   $i++;
}
   echo "suma je $sum <br>";

   echo "<br>";
   echo "<br>";
// zad 7
$sum = 0;
$i = 1;
$n = 25;
while($i <= 25){
   $sum += $i;
   $i++;
}
   echo "suma je $sum <br>";

   echo "<br>";
   echo "<br>";
// zad 8
$sum = 0;
$n = 5;
$m = 10;
while($n <= $m){
   $sum+=$n;
   $n++;
}
   echo "suma je $sum <br>";

   echo "<br>";
   echo "<br>";
// zad 9

   $n = 2;
   $m = 6;
   $proizvod = 1; 

   while($n <= $m){
      $proizvod = $proizvod * $n;
      $n++;
   }
echo "Proizvod brojeva od 2 do 6 je $proizvod";
   
   
   echo "<br>";
   echo "<br>";
   //zad 10
   $n = 10;
   $m = 15;
   $sumEven = 0;
   $sumOdd = 0;
   while($n <= $m) {
      if($n % 2 == 0) {
         $sumEven += pow($n,2);
      }
      elseif($n % 2 == 1) {
         $sumOdd += pow($n,3);
      }
      $n++;
   }
   echo "Suma kvadrata parnih je $sumEven i suma kuba neparnih je
   $sumOdd";
   echo "<br>";
   echo "<br>";
   // zad 11
   $k = 30;
   $i = 1;
   $brDeljivih = 0;
   while ($i <= $k){
      if($k % $i == 0) {
         $brDeljivih++;
      }
   $i++;
   }
   echo "Broj deljivih broja sa brojem $k je $brDeljivih";
   echo "<br>";
   echo "<br>";


   // 2. nacin
   $n = 83;
   $br = 2;
   $prost = true;
   while($br  <= $n/2){
      if($n % $br == 0) {
         $prost = false;
         break;
      }
      $br++;
   } 
   if($prost) {
      echo "Broj $n je prost <hr>";
   }
   else {
      echo "Broj $n nije prost <hr>";
   }

?>