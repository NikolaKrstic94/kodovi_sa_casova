<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>TEST 5</title>
</head>
<body>
<?php

require_once "knjiga.php";
require_once "zbirka_zadataka.php";
require_once "udzbenik.php";


// funkcije

function stampaKnjige($nizKnjiga){
   foreach($nizKnjiga as $knjiga){
      $knjiga->stampa();
   }
}

function stampaSkupe($nizKnjiga){
   foreach($nizKnjiga as $knjiga){
      if($knjiga->skupa()){
         $knjiga->stampa();
      }
   }
}
function najviseAutora($nizKnjiga){
   $trenutniNajveciBrojAutora = 0;
   foreach($nizKnjiga as $knjiga){
      if(count($knjiga->getAutori()) > $trenutniNajveciBrojAutora){
         $trenutniNajveciBrojAutora = count($knjiga->getAutori());
      }
   }
   foreach($nizKnjiga as $knjiga){
      if(count($knjiga->getAutori()) == $trenutniNajveciBrojAutora){
         $knjiga->stampa();
         break;
      }
   }
}




//instanciranje klase i pozivanje funkcija

$zbirka1 = new ZbirkaZadataka("Zbirka1", ["Nikola","Milan"],300, 30000,100);
$zbirka2 = new ZbirkaZadataka("Zbirka2", ["Ninoslav","Stefan","Ranko"],150, 5000,300);

$udz1 = new Udzbenik("Udzbenik1", ["Janko", "Petko"], 100, 2000,5);
$udz2 = new Udzbenik("Udzbenik2", ["Jovan", "Milos"], 500, 10000,5000);

$nizKnjiga = array($zbirka1,$zbirka2, $udz1, $udz2);

echo "<p>Sve knjige:</p>";
stampaKnjige($nizKnjiga);

echo "<hr>";
echo "<p>Sve skupe knjige:</p>";
stampaSkupe($nizKnjiga);

echo "<hr>";
echo "<p>Jedna knjiga sa najvise autora:</p>";
najviseAutora($nizKnjiga);





// echo $udz1->skupa() ? 'skupa' : 'nije skupa';




 ?>
</body>
</html>


