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
require_once "ObicanKredit.php";
require_once "AmortizovanKredit.php";

Kredit::setPodGodKamata(25);
Kredit::setDefaultBrGod(5);


$k1 = new Kredit(-5,2000,3,"kes");


$k1->stampa();
$bk = Kredit::getBrojKredita();
echo "<p>Broj kredita nakon pravljenja k1 je $bk</p>";

$k2 = new Kredit(10,3000,4,"stambeni");
$k2->stampa();
$bk = Kredit::getBrojKredita();
echo "<p>Broj kredita nakon pravljenja k2 je ".$bk."</p>";

$k3 = new Kredit(15,2500,5,"kes");
$k3->stampa();
$bk = Kredit::getBrojKredita();
echo "<p>Broj kredita nakon pravljenja k3 je ".$bk."</p>";

$k = Kredit::DEFAULT_OSNOVICA + 3;
echo "<p>$k</p>";

// $k1->stampa();

echo "<hr>";

// unset($k2);
// echo  "Broj kredita nakon oslobadjanja memorije: ".Kredit::getBrojKredita();
// unset($k1);
// echo "Broj kredita nakon oslobadjanja memorije: ".Kredit::getBrojKredita();
// unset($k3);
// echo "Broj kredita nakon oslobadjanja memorije: ".Kredit::getBrojKredita();

/////// OBICAN KREDIT /////////////
echo "<hr>";
// $ok = new ObicanKredit(10,2000,2);
// echo "mesecna rata je:". $ok->mesecnaRataObicanKredit() ." dinara";

// ////// AMORTIZOVAN KREDIT
// echo "<hr>";
// $ak = new AmortizovaniKredit(15, 30000,5);
// $ak->stampa();
// echo "Broj kredita nakon oslobadjanja memorije: ".Kredit::getBrojKredita();

echo "<hr>";

$k6 = new ObicanKredit(20, 1000, 2);
// $mr1 = $k6->mesecnaRataObicanKredit();
// echo "<p>Mesecna rata za obican kredit je $mr1</p>";

$k7 = new AmortizovaniKredit(20,1000,2);
// $mr2 = $k7->mesecnaRataAmortizovanKredit();
// echo "<p>Mesecna rata za amortizovan kredit je $mr2</p>";

// Formiramo niz od svih kredita u programu
$niz = array($k1, $k2, $k3, $k6, $k7);
echo "<hr>";
foreach ($niz as $kredit) {
   /* if($kredit objekat klase ObicanKredit){
      $kredit->mesecnaRataObicanKredit();
      }
      elseif($kredit objekat klase AmortizovanKredit){
         $kredit->mesecnaRataAmortizovanKredit();
      }
      elseif($kredit objekat klase Kredit){
         // radi nesto sa ovim objektom ili ga preskoci
      }
*/
   // $mr = $kredit->mesecnaRata();
   // echo "<div>Mesecna rata za kredit:";
   // $kredit->stampa();
   // echo "iznosi $mr.</div>";

   $kredit->stampa();
}







?>
</body>
</html>
