<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nasledjivanje</title>
</head>
<body>
   <?php
   require_once "vozilo.php";
   
   $v = new Vozilo("Crvena", "dron");
   $v->voziVozilo();
   // $v->voziAutomobil(); // iz natklase ne mozemo pristupiti osobinama potklase tj. roditelj ne nasledjuje osobine svog deteta

   $a = new Automobil("Zelena","Astra");
   $a->voziVozilo();
   echo "<hr>";
   $a->setBoja("Teget");
   $a->voziAutomobil();
   echo "<hr>";

    ?>
</body>
</html>
