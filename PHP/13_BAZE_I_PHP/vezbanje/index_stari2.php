<?php
require_once "connection.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Spajanje svega</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

// Prikazati sve pacijente u tabeli

$q = "SELECT * FROM pacijenti;";
$result = $conn->query($q);

if(!$result->num_rows){
   echo "<p class='info'>Trenutno u bazi nemate pacijenata</p>";
}
else {
   echo "<table>";
   echo "<tr>
         <th>Ime</th>
         <th>Prezime</th>
         <th>Datum rodjenja</th>
         <th>Visina</th>
         <th>Tezina</th>
   </tr>";

   foreach($result as $row){
      echo "<tr>";
      echo "<td>" .$row["ime"] ."</td>";
      echo "<td>" .$row["prezime"] ."</td>";
      echo "<td>" .$row["datum_rodjenja"] ."</td>";
      echo "<td>" .$row["visina"] ."</td>";
      echo "<td>" .$row["tezina"] ."</td>";
      echo "</tr>";
   }

   

   echo "</table>";
}

// Prikazati sve u listi

if(!$result->num_rows){
   echo "<p class='info'>Trenutno u bazi nemate pacijenata</p>";
}
else {


   foreach($result as $row){
      echo "<ul>";
      echo "<li>".$row["ime"]."</li>";
      echo "<li>".$row["prezime"]."</li>";
      echo "<li>".$row["datum_rodjenja"]."</li>";
      echo "<li>".$row["visina"]."</li>";
      echo "<li>".$row["tezina"]."</li>";
      echo "</ul>";
   }


}





 ?>
</body>
</html>
