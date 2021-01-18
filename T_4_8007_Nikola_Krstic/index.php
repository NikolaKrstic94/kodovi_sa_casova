<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TEST 3</title>
</head>
<body>

   <?php
   
   $sportisti = array(
      "Nikola" => 2.04,
      "Milan" => 1.91,
      "Marko" => 1.99,
      "Aleksa" => 1.988,
      "Kosta" => 1.94,
      "Aleks" =>1.99,
      "Petar" => 2.05
      // "Luka" => 2.10
      // "Stefan" => 2.20,
      // "Miro" =>1.99
   );

// PRAVLJENJE POSEBNOG NIZA SA VISINAMA IGRACA

   $nizVisinaIgraca = [];
   $i = 0;
   foreach ($sportisti as $ime => $visina) {
      $nizVisinaIgraca[$i] = $visina;
      $i++;
   }


// FUNKCIJE

   function prosecnaVisina($niz){
      $sumaVisina = 0;
      $brojIgraca = 0;
      foreach ($niz as $ime => $visina) {
         $sumaVisina += $visina;
         $brojIgraca++;
      }
      return $sumaVisina / $brojIgraca;
   }

    function natprosecnoVisoki($niz,$color1,$color2){
       $prosecnaVisina = prosecnaVisina($niz);
       foreach ($niz as $ime => $visina) {
          if($visina > $prosecnaVisina){
             echo "<p style='color:$color1'>$ime - $visina m</p>";
          }
          else {
             echo "<p style='color:$color2'>$ime - $visina m</p>";
          }
       }
   }
   
   function maxDuzina($niz){
      $maxDuzinaImena = 0;
      foreach ($niz as $ime => $visina) {
         if(strlen($ime) > $maxDuzinaImena){
            $maxDuzinaImena = strlen($ime);
         }
      }
      foreach ($niz as $ime => $visina) {
         if(strlen($ime) == $maxDuzinaImena){
            echo "<p>$ime je najduze ime</p>";
         }
      }
   }
   
   function visiTimPodela($niz){
      $brIgracaNaSpisku = count($niz);
      $prviTim = [];
      $drugiTim = [];
      $i=0;

      if($brIgracaNaSpisku %2 == 0){
         foreach ($niz as $ime => $visina) {
            if($i<$brIgracaNaSpisku/2){
               $prviTim[$i] = $visina;
               $i++;
            }
            else {
               $drugiTim[$i] = $visina;
               $i++;
            }
         }
      }
      else {
         foreach ($niz as $ime => $visina) {
            if($i<ceil($brIgracaNaSpisku/2)){
               $prviTim[$i] = $visina;
               $i++;
            }
            else {
               $drugiTim[$i] = $visina;
               $i++;
            }
         }
      }
      if(prosecnaVisina($prviTim) > prosecnaVisina($drugiTim)){
         echo "Visi je PRVI TIM i ima prosecnu visinu od ".prosecnaVisina($prviTim)." m";
      }
      elseif(prosecnaVisina($drugiTim) > prosecnaVisina($prviTim)) {
         echo "Visi je DRUGI TIM i ima prosecnu visinu od ".prosecnaVisina($drugiTim)." m";
      }
      else {
         echo "Oba tima imaju istu prosecnu visinu od ".prosecnaVisina($prviTim)." m";
      }
   }
   
   function trenerVidi($nizVisina){
      $trenutnaNajvecaVisina = $nizVisina[0];
      $brojVidljivihIgraca = 1;
      for($i=1; $i<count($nizVisina); $i++){
         if($nizVisina[$i] > $trenutnaNajvecaVisina){
            $trenutnaNajvecaVisina = $nizVisina[$i];
            $brojVidljivihIgraca++;
         }
      }
      return $brojVidljivihIgraca;
   }
   
   
   
   //POZIVANJE FUNKCIJA
   echo "Prosecna visina svih igraca je: " .prosecnaVisina($sportisti)." m";
   echo "<hr>";

   natprosecnoVisoki($sportisti,"green","red");
   echo "<hr>";

   maxDuzina($sportisti);
   echo "<hr>";

   visiTimPodela($sportisti);
   echo "<hr>";
  
   echo "Trener vidi ".trenerVidi($nizVisinaIgraca)." igraca";
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    ?>


</body>
</html>