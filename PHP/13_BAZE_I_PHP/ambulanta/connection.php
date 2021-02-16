<?php

$servername = "localhost";

$username = "admin";

$password = "admin123";

$database = "bolnica_stefan";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
   die("Error connecting to database: ". $conn->connect_error);
}

function ispisTabele($result){
   if(!$result->num_rows){
         echo "Nemate pacijente u bazi";
      }
      else {
         echo "<table>";
         echo "<tr>";
         echo "<th>Ime</th>";
         echo "<th>Prezime</th>";
         echo "<th>Datum Rodjenja</th>";
         echo "<th>Visina</th>";
         echo "<th>Tezina</th>";
         echo "</tr>";
         foreach($result as $row){
            echo "<tr>";
            echo   "<td>".$row["ime"]."</td>";
            echo   "<td>".$row["prezime"]."</td>";
            echo   "<td>".$row["datum_rodjenja"]."</td>";
            echo   "<td>".$row["visina"]."</td>";
            echo   "<td>".$row["tezina"]."</td>";
            echo  "</tr>";
         }
         echo "</table>";
      }
   }

?>
