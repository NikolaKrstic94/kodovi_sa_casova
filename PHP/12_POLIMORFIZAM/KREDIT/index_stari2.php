<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Polimorfizam</title>
</head>
<body>
<?php


require_once "kredit.php";
require_once  "ObicanKredit.php";
require_once  "AmortizovanKredit.php";


$krediti = array ();
$n = 6;

for($i=0; $i<$n; $i++){
   $randBr = round(rand(0,2));
   if($randBr == 0){
      $krediti[$i] = new Kredit(15,1000,2,"stambeni");
      $krediti[$i]->stampa();

   }
   elseif($randBr == 1){
      $krediti[$i] = new ObicanKredit(15,1000,2);
      $krediti[$i]->stampa();
   }
   else {
      $krediti[$i] = new AmortizovaniKredit(15,1000,2);
      $krediti[$i]->stampa();
   }
}









 ?>
</body>
</html>

