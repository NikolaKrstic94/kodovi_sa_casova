<?php
require_once "header.php";
require_once "connection.php";

if(empty($_GET["id"])){
   echo "Pass ID to GET ";
}
$id = $_GET["id"];

$sql = "SELECT * FROM users
      WHERE id = $id";

$result = $conn->query($sql);

if(!($result->num_rows)){
   echo "<p class='errorP'>The user with such ID doesn't exist</p>";
}
else{
   $sql = "SELECT profiles.name AS name, profiles.surname AS surname, profiles.gender AS gender, profiles.dob AS dob, profiles.user_id, profiles.bio AS bio, users.id, users.username AS username FROM profiles
   INNER JOIN users
   ON users.id = profiles.user_id
   WHERE user_id = $id;";

   $result = $conn->query($sql);
   $result1 = $conn->query($sql);
   $row = $result1->fetch_assoc();
   $gender = $row["gender"];



   if($gender == "f"){
      $color = "pink";
   }
   if($gender == "m"){
      $color = "blue";
   }
   if ($gender == "o") {
      $color = "grey";
   }



   $cols = array("First Name", "Last Name",
   "Username", "Date of Birth", "Gender", "About me");
   $counter = 0;
   echo "<table class='profileTable' style='color:".$color."'>";
   foreach ($result as $row){

      echo "<tr><td>".$cols[$counter]."</td>";
      echo "<td>".$row["name"]."</td>";
      $counter++;

      echo "<tr><td>".$cols[$counter]."</td>";
      echo "<td>".$row["surname"]."</td>";
      $counter++;


      echo "<tr><td>".$cols[$counter]."</td>";
      echo "<td>".$row["username"]."</td>";
      $counter++;


      echo "<tr><td>".$cols[$counter]."</td>";
      echo "<td>".$row["dob"]."</td>";
      $counter++;


      echo "<tr><td>".$cols[$counter]."</td>";
      if($row["gender"] == "f"){
         $gender = "Female";
      }
      elseif($row["gender"] == "m"){
         $gender = "Male";
      }
      else {
         $gender = "Other";
      }
      echo "<td>".$gender."</td>";
      $counter++;


      echo "<tr><td>".$cols[$counter]."</td>";
      echo "<td>".$row["bio"]."</td>";
      $counter++;
   }
   echo "</table>";
}

   $loggedUser = "";
   $id = $_SESSION["id"];
   $sql = "SELECT profiles.name as name, profiles.surname AS surname, users.id FROM users
           INNER JOIN profiles
           ON users.id = profiles.user_id
           WHERE users.id = $id; ";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $loggedUser = $row["name"]." ".$row["surname"];
   echo "<p class='linkToFollowers'><a id='linkToFollowers' href='followers.php'>See all your friends here, ".$loggedUser."!</a></p>"
 ?>
