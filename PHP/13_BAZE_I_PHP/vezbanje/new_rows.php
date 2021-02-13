<?php

require_once "connection.php";

/* $q = "ALTER TABLE pacijenti ADD datum_rodjenja DATE AFTER prezime;";

if($conn->query($q)){
   echo "<p>Uspesno dodat datum</p>";
}
else {
   echo "<p>Nije uspesno dodat datum" . $conn->error."</p>";
}

 */

/* $q = "UPDATE pacijenti SET datum_rodjenja = '1999-01-01' WHERE id=1;";
$q .= "UPDATE pacijenti SET datum_rodjenja = '1994-02-02' WHERE id=2;";
$q .= "UPDATE pacijenti SET datum_rodjenja = '1995-05-10' WHERE id=3;";
$q .= "UPDATE pacijenti SET datum_rodjenja = '1998-08-15' WHERE id=4;";
$q .= "UPDATE pacijenti SET datum_rodjenja = '2000-04-20' WHERE id=5;";
$q .= "UPDATE pacijenti SET datum_rodjenja = '1991-03-25' WHERE id=6;";


if($conn->multi_query($q)){
   echo "Uspesno dodati datumi rodjenja u redove";
}
else {
   echo "<p>Neuspesno dodati datumi".$conn->error."</p>";
} */


$q = "SELECT * FROM pacijenti;";

if($conn->query($q)->num_rows > 0){

   foreach($conn->query($q) as $row){

      echo "id:" .$row["id"] . " ime: ".$row["ime"]." prezime: ".$row["prezime"]." visina: ".$row["visina"]. " tezina: ". $row["tezina"]." Dat rodj: ". $row["datum_rodjenja"]."<br>" ;
   }
}
else {
   echo "0 results";
}

echo "<br>";
echo "<br>";
echo "<br>";


$result = $conn->query($q);
if($conn->query($q)->num_rows > 0){

   while($row = $result->fetch_assoc()){

      echo "id:" .$row["id"] . " ime: ".$row["ime"]." prezime: ".$row["prezime"]." visina: ".$row["visina"]. " tezina: ". $row["tezina"]." Dat rodj: ". $row["datum_rodjenja"]."<br>" ;
   }
}
else {
   echo "0 results";
}
 ?>
