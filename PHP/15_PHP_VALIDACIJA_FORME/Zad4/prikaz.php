<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Prikaz podataka</title>
</head>
<body>
   <h3>Nazad na <a href="index.php">pocetnu stranicu</a></h3>
    <?php
    require_once "connection.php";
      $ime = $_POST["imePrezime"];

      $email = $_POST["email"];

      $bio = $_POST["bio"];

      $pol = $_POST["pol"];



      if($ime != "" && $email != "" && $bio != ""){
/*          echo "<h2>Uneti podaci:</h2>";
         echo "<p>Ime i prezime: ".$ime."</p>";
         echo "<p>Email: ".$email."</p>";
         echo "<p>Biografija: ".$bio."</p>";
         echo "<p>Pol:".$pol."</p>";
 */
         $upit = "INSERT INTO korisnici(imePrezime, email, bio, pol) VALUES
         ('".$ime."','".$email."','".$bio."','".$pol."');";
         if($conn->query($upit)){
            echo "<p class='dodatKorisnik'>Uspesno dodat korisnik</p>";
         }
         else {
            echo "<p class='greska'>Error".$conn->error."</p>";
         }
 }

   ?>
</body>
</html>
