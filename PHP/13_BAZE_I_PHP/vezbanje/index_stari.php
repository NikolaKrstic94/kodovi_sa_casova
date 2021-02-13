<?php

require_once "connection.php";
echo "Connected successfully";

// **********Pravljenje tabele i pozivanje jednog upita******

/* $sql = "CREATE TABLE pacijenti (
   id INT UNSIGNED PRIMARY KEY,
   ime VARCHAR(50),
   prezime VARCHAR(150),
   visina SMALLINT,
   tezina FLOAT
)";
if($conn->query($sql)){
   echo "<p>New record created correctly</p>";
}
else {
   echo "Error: " .$sql . "<br>" . $conn->error;
}
 */


// **********pravljenje visestrukih upita*****************

/*    $sql = "INSERT INTO pacijenti(id, ime, prezime, visina, tezina) VALUES (1, 'Mika', 'Mikic', 183, 83);";

   $sql .= "INSERT INTO pacijenti(id, ime, prezime, visina, tezina) VALUES (2, 'Ninoslav', 'Ninic', 185, 72);";

   $sql = "INSERT INTO pacijenti(id, ime, prezime, visina, tezina) VALUES (3, 'Petar', 'Peric', 181, 78)";

 */



// ************pozivanje multi_query tj vise upita nad objektom $conn (od mysqli klase)***********

/*    if($conn->multi_query($sql)){
      echo "New records created successfully";
   }
   else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
 */

// Dodavanje kolone posle prezime kolone u postojecoj tabeli

/* $sql = "ALTER TABLE pacijenti ADD datum_rodjenja DATE AFTER prezime";

if($conn->query($sql)){
   echo "Uspesno dodata kolona datum_rodjenja";
}
else{
   echo "Error pri dodavanju kolone datum_rodjenja".$sql."<br>". $conn->error;
}
 */


// **********DODAVANJE VREDNOSTI U KOLONU DATUM_RODJENJA***

/* $sql = "UPDATE pacijenti
SET datum_rodjenja = '1999-01-01' WHERE id=1;";

$sql .= "UPDATE pacijenti
SET datum_rodjenja = '2000-05-25' WHERE id=2;";

$sql .= "UPDATE pacijenti
SET datum_rodjenja = '1994-03-15' WHERE id=3;";


if($conn->multi_query($sql)){
   echo "Dodati datumi rodjenja uspesno";
}
else {
   echo "Error:".$sql."<br>".$conn->error;
}
 */

// Prikaz podataka iz baze

$sql = "SELECT * FROM pacijenti";

$result = $conn->query($sql);

if($result->num_rows > 0){
   while($row = $result->fetch_assoc()){
      echo "id:" . $row["id"]. " Name: " . $row["ime"]. " Prezime: " . $row["prezime"]." Datum rodjenja: ".$row["datum_rodjenja"]. " Visina: ".$row["visina"]." Tezina: ".$row["tezina"];
   }
}
else {
      echo "0 results";
   }






?>
