<?php
$username = "admin";
$password = "admin123";
$host = "localhost";
$dbname = "videoteka_domaci";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
   die("Error connecting to the database");
}


function ispisTabele($result){

         echo "<table>";
         echo "<tr>";
         echo "<th>Naslov</th>";
         echo "<th>Godina</th>";
         echo "<th>Ocena</th>";
         echo "<th>Ime Autora</th>";
         echo "<th>Prezime Autora</th>";
         echo "<th>Zanr</th>";
         echo "</tr>";
         foreach($result as $row){
            echo "<tr>";
            echo   "<td>".$row["naslov"]."</td>";
            echo   "<td>".$row["godina"]."</td>";
            echo   "<td>".$row["ocena"]."</td>";
            echo   "<td>".$row["Ime Autora"]."</td>";
            echo   "<td>".$row["Prezime Autora"]."</td>";
            echo   "<td>".$row["Zanr"]."</td>";
            echo  "</tr>";
         }
         echo "</table>";
      }

?>
