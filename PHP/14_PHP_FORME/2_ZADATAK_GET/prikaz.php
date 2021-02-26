<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Prikaz podataka</title>
</head>
<body>
   <h2>Uneli ste podatke:</h2>

   <?php
   echo "Ime: ".$_GET["imePrezime"];
   echo "<br>";
   echo "Email: ".$_GET["email"];
   echo "<br>";
   echo "Biografija: ".$_GET["bio"];
   echo "<br>";
   $pol = $_GET["pol"];
   /* if($pol == "m"){
      echo "Pol: "."<span style='color:blue'>Muski</span>";
   }
   elseif($pol == "z"){
      echo "Pol: "."<span style='color:pink'>Zenski</span>";
   }
   else {
      echo "Pol: "."<span style='color:grey'>Drugo</span>";
   } */

   switch($pol){
      case "m":
         echo "Pol: "."<span style='color:blue'>Muski</span>";
         break;
      case "z":
         echo "Pol: "."<span style='color:pink'>Zenski</span>";
         break;
      default:
         echo "Pol: "."<span style='color:grey'>Drugo</span>";
   }
   echo "<br>";
   $znanje = $_GET["znanje"]; // array of checkboxes of name="znanje"
   echo "<p>Znanje:</p>";
   echo "<ul>";
         foreach($znanje as $z){
            echo "<li>".$z."</li>";
         }

   echo "</ul>";
    ?>

   <p>Kliknite  <a href="index.php">ovde</a> povratak na pocetnu</p>
</body>
</html>
