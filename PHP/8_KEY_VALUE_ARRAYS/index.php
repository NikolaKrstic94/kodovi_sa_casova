<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
   opcache_reset();
   // Prvi nacin zadavanja asocijativnih nizova
   $age = array(
      "Pera" => 43,
      "Mika" => 26,
      "Laza" => 22
   );

   var_dump($age);
   echo $age["Pera"];      

   // Drugi nacin zadavanja asocijativnih nizova

   $godine["Rasa"] = 51;
   $godine["Zika"] = 18;
   $godine["Milica"] = 24;
   var_dump($godine);
   // For petlja se ne moze koristiti za prolazak kroz elemente asocijativnog niza
   // for($i = 0; $i < count($age); $i++){
   //    echo $age[$i] . "<br>";
   // }
   foreach($age as $key => $value){
      echo "$key" . " $value ";
   }
   foreach ($godine as $key => $value) {
      echo "<p>Element iz niza godine sa kljucem $key ima vrednogst $value </p>";
   }

   foreach($godine as $v){
      echo "<p>Element iz niza godine ima vrednogst $v </p>";
   }
   
   $brojevi = array(4, -9, 3.3, 9.04, -13);
   foreach($brojevi as $broj) {
      echo $broj . "&nbsp;"; 
   }
   echo "<br>";
   
   foreach ($brojevi as $i => $broj) {
      echo "<p>Broj sa indeksom $i je $broj</p>";
   }
   
   // zadatak 1
   $automobili = array(
      "Audi A3" => 2004,
      "Opel Astra" => 2018,
      "Fiat Punto" => 2000,
      "Opel Corsa" => 1999,
      "Ford Focus" => 2015,
      "Peugeot 508" => 2007
   );

   //Ispisati sve automobile, kao i njihova godista.

   foreach($automobili as $marka => $godiste) {
      echo "<p>Automobil marke $marka je proizveden $godiste. godine</p>";
   }
   $trenutnaGodina = date("Y");
   foreach($automobili as $marka => $godiste) {
      if($trenutnaGodina - $godiste > 10) {
         echo "<p>Automobil $marka stariji je od 10 god.</p>";
      }
   }
   foreach($automobili as $marka => $godiste) {
      if($marka == "Opel Astra" && $godiste >= 2000){
         echo "<p>Automobil $marka proizveden je posle 2000. god</p>";
      }

   }
echo "<hr>";
   // zadatak 2
   $osobe = array (
      "Marko" => 188,
      "Nikola" => 186,
      "Milan" => 190,
      "Nenad" => 193,
      "Veljko" => 168,
   );
   foreach($osobe as $ime => $visina){
      echo "<p>Osoba $ime je $visina cm visok.</p>";
   }
   // 4 deo
   $brOsoba = 0;
   $zbirVisina = 0;
   foreach($osobe as $ime => $visina) {
      $brOsoba++;
      $zbirVisina += $visina;
   }
   $prVisina = $zbirVisina / $brOsoba;
   echo "<p>Prosecna visina je $prVisina a osobe iznad prosecne visine su:</p>";
   foreach($osobe as $ime => $visina) {
      if($visina > $prVisina){
         echo "$ime ";
      }
   }
   // 5 deo
   $maxVisina = 150;
   foreach($osobe as $ime => $visina){
      if($visina >=$maxVisina){
         $maxVisina = $visina;
      }
   }
   echo "<br>"; echo "<br>";
   foreach($osobe as $ime => $visina) {
      if($visina == $maxVisina) {
         echo "<p>Osoba $ime sa visinom $visina cm ima maksimalnu visinu</p>";
      }
   }
   // 6. deo
   foreach($osobe as $ime => $visina) {
      if(strpos("$ime","V") === 0 && $visina < $prVisina){
         echo "<p>Osobi $ime ime pocinje na slovo 'V' a ima visinu ispod proseka </p>";
      }
   }

   // zad 3 Dat je niz elemenata u obliku NazivPredmeta/Ocena koju student ima.

   $studenti = array(
      "Nikola" => 6,
      "Janko" => 8,
      "Stanko" => 9,
      "Miljan" => 10,
      "Borivojko" => 7
   );
    ?>
</body>
</html>