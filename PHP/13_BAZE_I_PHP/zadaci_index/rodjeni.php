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

   $q = "SELECT * FROM pacijenti
   WHERE datum_rodjenja > '1969-12-12' AND datum_rodjenja < '1998-12-12'";

   $result = $conn->query($q);
   echo "<h3>Rodjeni izmedju 1970 i 1999</h3>";
   ispisTabele($result);

   ?>



</body>
</html>
