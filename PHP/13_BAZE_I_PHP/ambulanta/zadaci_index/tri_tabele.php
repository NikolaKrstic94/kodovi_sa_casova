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

   
   echo "<h3>Po visini</h3>";
   $q = "SELECT * FROM pacijenti
   ORDER BY visina DESC;";
   $result = $conn->query($q);
   ispisTabele($result);

   echo "<h3>Po tezini</h3>";
   $q = "SELECT * FROM pacijenti
   ORDER BY tezina DESC;";
   $result = $conn->query($q);
   ispisTabele($result);

   echo "<h3>Po datumu rodjenja</h3>";
   $q = "SELECT * FROM pacijenti
   ORDER BY datum_rodjenja DESC;";
   $result = $conn->query($q);
   ispisTabele($result);


    ?>
</body>
</html>
