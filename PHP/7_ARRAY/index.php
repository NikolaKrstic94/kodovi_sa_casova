<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ARRAYS</title>
</head>
<body>
   <?php
   // zad 1
   $polaznici = array();
   $polaznici[] = "Marko";
   $polaznici[] = "Marija";
   $polaznici[] = "Ivana";
   $polaznici[] = "Goran";
   $polaznici[] = "Vladan";

   $duzina = count($polaznici);
   echo "1.) Svi clanovi niza su: ";
   for($i = 0; $i < $duzina; $i++){
     echo " $polaznici[$i]";
   }

   echo "<br>";echo "<br>"; 
   // zad 2) Odrediti zbir elemenata celobrojnog niza.
   $nizbrojeva = array(1,2,3,4,5);
   $zbir = 0;
   $duzinaNiza = count($nizbrojeva); 
   for($i = 0; $i < $duzinaNiza; $i ++){
      $zbir += $nizbrojeva[$i];
   }
   echo " 2.) Zbir brojeva niza je $zbir";

   echo "<br>";echo "<br>"; 
   // zad 3) Odrediti srednju vrednost elemenata celobrojnog niza.
   






    ?>
</body>
</html>