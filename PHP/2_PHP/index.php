<?php
// $cena = 15000;
// $popust = 20;

// $x = 100 * $cena /(100 - $popust);
// echo "<br>";
// echo $x;
// echo "<br>";
// echo "<br>";

// // zad
// $tablete = 20;
// $doza = 3;
// $dana = (floor($tablete / $doza));
// $neisk = $tablete % $doza;
// echo "Terapija traje " . $dana . " i neiskoriscene tablete ima: " . $neisk;
// $a = 5;
// $b = "5";

// // IF - ELSE grananje
// $x = 8;
// $y = 9;
// if($x >= $y){
//    echo "<p>broj $x je veci</p> ";
// } 
// else {
//    echo "<p> broj $x je manji</p>";
// }

// zadatak 1
$br1 = 10;
$br2 = 5;
if ($br1 >= $br2) {
   echo "<p> \$br1 je veci ili jednak sa br 2 </p>";
   }
   else {
      echo "<p> \$br2 je veci od br1 </p>";
   }
   echo "<br>";
   echo "<br>";

// zadatak 2
$temp = -5;
if ($temp >= 0){
   echo "<p>Temperatura je u plusu </p>";
}
else {
   echo "<p> Temperatura je u minusu </p>";
}
   echo "<br>";
   echo "<br>";

// zadatak 5
$curYear = date("Y");
$birthYear = 2003;
if(($curYear - $birthYear) >= 18) {
   echo "Osoba je punoletna";
}
else {
   echo "Osoba je maloletna";
}
   echo "<br>";
   echo "<br>";
   /*  ZADATAK 6
      Objasnjenje: 
      a = 7, b =5, c= 6
   */
  $a = 7;
  $b = 5;
  $c = 6;
  if ($a > $b) {
     $pom = $a;
     $a = $b;
     $b = $pom;
  };
   //   posle ovog ifa u $a je sigurno manji nego u $b
if($b > $c) {
   $pom = $b;
   $b = $c;
   $c = $pom;
}
echo "$a $b $c";
// zadatak 3

$pol = "z";
if($pol == "z"){
   echo "<p>🚺</p>";
   }
   else {
      echo "<p>🚹</p>";   
         }
         echo "<p>";
   echo "<br>";
   echo "<br>";

         // zadatak 4
   echo "<p> ";
    $time = date("A");
    if ($time == "AM") {
       echo "sada je AM ";
    } 
    else {
       echo "sada je PM";
    };   
   echo "<br>";
   echo "<br>";


   // if elseif else

   $br = 5;
   if($br <10) {
      echo "Broj je u prvoj desetici";
   } 
   elseif ($br < 20) {
      echo "Broj je u drugoj desetici";
   }
   else {
      echo "Broj nije u prvoj ili drugoj desetici";
   }


//  zadatak 7 


$poeni = 85;
// if($poeni <50) {
//    echo "Ucenik je pao ispit"
// }
// elseif ($poeni>50 && $poeni < 60){
//    echo "Ucenik je dobio ocenu 6";
// 
if($poeni > 90 ) {
   echo "<p> Ocena 10 </p>";
}
elseif ($poeni > 80) {
   echo "<p> Ocena 9 </p>";
}
elseif ($poeni > 70) {
   echo "<p> Ocena 8 </p>";
}
elseif ($poeni > 60) {
   echo "<p> Ocena 7 </p>";
}
elseif ($poeni > 50) {
   echo "<p> Ocena 6 </p>";
}
else {
   echo "student nije polozio";
}

