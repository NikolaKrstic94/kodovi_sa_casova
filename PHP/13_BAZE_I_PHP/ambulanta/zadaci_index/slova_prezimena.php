<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="../ambulanta.css">
</head>
<body>
   <h1 class="naslov"><a href="../index.php">Nazad na pocetnu</a></h1>

   <?php
   require_once "../connection.php";
   // Dohvatamo sva pocetna slova prezimena i kreiramo linkove

   echo "<h3>Sva slova na kojima pocinju prezimena:</h3>";

   $p = "SELECT DISTINCT SUBSTRING(prezime,1,1) AS prvoSlovo FROM pacijenti
   ORDER BY prezime";
   $prezimena = $conn->query($p);
   foreach($prezimena as $prezime){
      $prvoSlovo = $prezime["prvoSlovo"];
      echo "<a href='#$prvoSlovo'>".$prvoSlovo."</a> ";
   }

   // za svako slovo

   if($prezimena->num_rows){
      foreach($prezimena as $prezime){
         $prvoSlovo  = $prezime["prvoSlovo"];
         // Prikazi sve pacijente cije prezime pocinje na $prvoSlovo
         echo "<h3 id='$prvoSlovo'>$prvoSlovo</h3>";

         $q2 = "SELECT * FROM pacijenti WHERE prezime LIKE '".$prvoSlovo."%' ORDER BY ime";

         $sviPacijenti = $conn->query($q2);
         ispisTabele($sviPacijenti);
      }
   }
   ?>



</body>
</html>
