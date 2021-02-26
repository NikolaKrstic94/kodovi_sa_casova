<?php
require_once "connection.php";

// $upit = "CREATE TABLE korisnici(
//    id INT AUTO_INCREMENT PRIMARY KEY,
//    imePrezime VARCHAR(255),
//    email VARCHAR(255),
//    bio TEXT,
//    pol CHAR(1)
// )";

$upit = "INSERT INTO TABLE"
if($conn->query($upit)){
   echo "uspesno napravljena tabela";
}
else {
   echo "Neuspesno napravljena tabela";
}

 ?>
