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

unset($k2);
echo  "Broj kredita nakon oslobadjanja memorije: ".Kredit::getBrojKredita();
unset($k1);
echo "Broj kredita nakon oslobadjanja memorije: ".Kredit::getBrojKredita();
unset($k3);
echo "Broj kredita nakon oslobadjanja memorije: ".Kredit::getBrojKredita();

/////// OBICAN KREDIT /////////////
echo "<hr>";
$ok = new ObicanKredit(10,2000,2);
echo "mesecna rata je:". $ok->racunanjeObicnog() ." dinara";

////// AMORTIZOVAN KREDIT
echo "<hr>";
$ak = new AmortizovaniKredit(15, 30000,5);
$ak->stampa();
echo "Broj kredita nakon oslobadjanja memorije: ".Kredit::getBrojKredita();

?>
</body>
</html>
