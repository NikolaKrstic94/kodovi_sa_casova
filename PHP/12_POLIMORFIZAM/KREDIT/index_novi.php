<?php

require_once "ObicanKredit.php";
require_once "AmortizovanKredit.php";


$krediti  = array();
$n = 6;

for($i = 0; $i<$n; $i++){
   $k = rand(0,1);
   if($k == 0){
      $krediti[] = new ObicanKredit(25, 4000, 2);
   }
   else{
      $krediti[] = new AmortizovaniKredit(25, 4000, 2);
   }
}

foreach($krediti as $kredit){
   $kredit->stampa();
   echo $kredit->proba();
}




 ?>
