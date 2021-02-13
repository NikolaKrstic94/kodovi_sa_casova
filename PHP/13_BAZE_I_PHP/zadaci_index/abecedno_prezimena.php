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

   echo "<h3>Sva prezimena po abecednom redosledu</h3>";

   $p = "SELECT DISTINCT prezime FROM pacijenti
   ORDER BY prezime";
   $prezimena = $conn->query($p);
   echo "<ul>";
   foreach($prezimena as $p){
      $prezime = $p["prezime"];
      echo "<li><a href='#$prezime'>$prezime</a></li>";
   }
   echo "</ul>";

   foreach($prezimena as $p){
      $prezime = $p["prezime"];
      echo "<h3 id=$prezime>$prezime</h3>";
      $q = "SELECT * FROM pacijenti
      WHERE prezime LIKE '".$prezime."'";
      $sviPacijenti = $conn->query($q);
      ispisTabele($sviPacijenti);
   }



   // za svako slovo kre


   ?>



</body>
</html>
