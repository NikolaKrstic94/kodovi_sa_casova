<?php 
// Zadatak 8
$dan = date ("w"); // 0 je nedelja, 1 je pon
// 2 je utorak. ...

if($dan == 0){
   echo "<p>Vikend</p>";
}
elseif ($dan == 6) {
   echo "<p>Vikend</p>";
}
else {
   echo "<p>Radni dan</p>";
}

echo "<br>";
echo "<br>";

// zadatak 9

$vreme = date ("G");
if($vreme < 12) {
   echo "<p>Dobro jutro</p>";
}
elseif($vreme < 18) {
   echo "<p>Dobar dan</p>";
}
else {
   echo "<p>Dobro vece</p>";
}
echo "<br>";echo "<br>";

// zadatak 10

$d1 = 6;
$m1 = 4;
$g1 = 1999;
$d2 = 6;
$m2 = 6;
$g2 = 1998;
if($g1 < $g2) {
   echo "$d1.$m1.$g1 je raniji";
}
elseif($g2 < $g1) {
   echo "$d2.$m2.$g2 je raniji";
}
elseif($m1 < $m2) {
   echo "$d1.$m1.$g1 je raniji";
}
elseif($m2 < $m1) {
   echo "$d2.$m2.$g2 je raniji";
}
elseif($d1 < $d2) {
   echo "$d1.$m1.$g1 je raniji";
}
elseif($d2 < $d1) {
   echo "<p>$d2.$m2.$g2 je raniji</p>";
}
else {
   echo "<p>Datumi su isti</p>";
}


      // zadatak 11
echo "<br>";echo "<br>";


$pocRadnoVreme = 9;
$krajRadnoVreme = 17;
$trenutnoVreme  = 15;
if($trenutnoVreme < $pocRadnoVreme) {
   echo "Firma ne radi";
}
elseif($trenutnoVreme > 17) {
      echo "<p>Firma ne radi</p>";
   }
else {
   echo "<p>Firma radi</p>";
}
   // zadatak 12
echo "<br>"; echo "<br>";

// Prvi radnik
$p1 =20;
$k1 = 22;
// Drugi radnik
$p2 = 12;
$k2 = 18;

if($k1 < $p2) {
   echo "<p>Ne preklapaju se</p>";
}
elseif($k2 < $p1) {
   echo "<p>Ne preklapaju se</>";
}
else {
   echo "<p>Preklapaju se</>";
}
echo "<br>"; echo "<br>";
// zadatak 13

$broj = 10;
if($broj % 3 == 0) {
   echo "<p>broj je deljiv sa tri</p>";
}
else {
   echo "<p>Broj nije deljiv sa tri</p>";
}


echo "<br>"; echo "<br>";
// Zadatak 16

$br = 2;
$prethodnik = $br -1;
$sledbenik = $br +1;
if($br <= 0) {
   echo "<p>Broj je manji od nule
   i njegov prethodnik je: $prethodnik </p>";
}
else {
   echo " <p>Broj je veci od nule i njegov sledbenik je $sledbenik</p>";
}
echo "<br>"; echo "<br>";

// zadatak 18
$broj = 12.1;
if(fmod($broj,1) == 0){  //
   echo "<p>broj je ceo</p>";
}
else {
   echo "<p>broj nije ceo</p>";
}
echo "<br>"; echo "<br>";
// zadatak 17
$b1 = 10;
$b2 = 22;
$b3 = 3;
if($b1 < $b2) {
   $pom = $b1;
   $b1 = $b2;
   $b2 = $pom;  // proverim broj 1 da li je manji od broj 2,
   //ako jeste onda menjam ta dva broja
}
if($b1 < $b3) {
   $pom2 = $b1;
   $b1 = $b3;
   $b3 = $pom2; 
}
if($b2 < $b3) {
   $pom3 = $b2;
   $b2 = $b3;
   $b3 = $pom3; 
}


echo "<p>$b1 $b2 $b3</p>";

?>

