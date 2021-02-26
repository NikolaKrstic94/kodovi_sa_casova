<?php
require_once "header.php";
require_once "connection.php";
require_once "validation.php";

if(!(empty($_SESSION["id"]))){
$id = $_SESSION["id"];
}
else {
   header("Location:index.php");
}


$nameErr = $surnameErr = "";
if(isset($id)){

}
$sql = "SELECT profiles.name AS name, profiles.surname AS surname, profiles.gender AS gender, profiles.dob AS dob, profiles.user_id, users.id FROM profiles
INNER JOIN users
ON users.id = profiles.user_id
WHERE user_id = $id;";

$validated = true;

$result = $conn->query($sql);

foreach($result as $row){
   $name = $row["name"];
   $surname = $row["surname"];
   $gender = $row["gender"];
   $dob = $row["dob"];

}
// Name validation
if(textValidation($name)){
   $validated = false;
   $nameErr = textValidation($name);
}
else {
   $name = trim($name); //Odsecanje praznina pre i nakon stringa
   $name = preg_replace('/\s\s+/', ' ', $name); //Odsecanje duplih praznina unutar stringa
}

// Surname validation
if(textValidation($surname)){
   $validated = false;
   $surnameErr = textValidation($surname);
}
else {
   $surname = trim($surname); //Odsecanje praznina pre i nakon stringa
   $surname = preg_replace('/\s\s+/', ' ', $surname); //Odsecanje duplih praznina unutar stringa
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $validated = true;
        // Name validation
        if(textValidation($name)){
            $validated = false;
            $nameErr = textValidation($name);

        }
        else {
            $name = trim($name); //Odsecanje praznina pre i nakon stringa
            $name = preg_replace('/\s\s+/', ' ', $name); //Odsecanje duplih praznina unutar stringa
        }

        // Surname validation
        if(textValidation($surname)){
            $validated = false;
            $surnameErr = textValidation($surname);
        }
        else {
            $surname = trim($surname); //Odsecanje praznina pre i nakon stringa
            $surname = preg_replace('/\s\s+/', ' ', $surname); //Odsecanje duplih praznina unutar stringa
        }

        // Date of birth validation

        if(dobValidation($dob)){
            $validated = false;
            $dobErr = dobValidation($dob);
        }
         if($validated){
            $q = "UPDATE `profiles`
            SET profiles.name = '$name', profiles.surname = '$surname' , profiles.gender = '$gender', profiles.dob = '$dob'
            WHERE user_id = $id;";
         }
        }

$male = $female = $other = "";
        if($gender == "m"){
            $male = "checked";
        }
        elseif($gender == "f"){
            $female = "checked";
        }
        elseif($gender == "o"){
            $other = "checked";
        }
?>
<h5 class="centeredText pt-3">Change your profile information:</h5>
<form action="changeProfile.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name"
    value="<?php echo $name;?>">
     <small id="nameHelp" class="form-text error">*<?php echo $nameErr; ?></small>
  </div>
  <div class="form-group">
    <label for="surname">Surname</label>
    <input type="text" class="form-control" id="surname" name="surname"
    value = "<?php echo $surname;?>">
    <small id="nameHelp" class="form-text error">*<?php echo $surnameErr; ?></small>
  </div>
  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="date" class="form-control" id="dob" name="dob"
    value="<?php echo $dob;?>">
  </div>
  <label for="gender">Gender:</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="male" value="m" <?php echo $male; ?> >
  <label class="form-check-label" for="male">
    Male
  </label>
  </div>
   <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="female" value="f"  <?php echo $female; ?> >
  <label class="form-check-label" for="female">
    Female
  </label>
  </div>
   <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="other" value="o"  <?php echo $other; ?> >
  <label class="form-check-label" for="other">
    Other
  </label>
  </div>
  <button type="submit" class="btn btn-primary mb-3">Submit</button>
</form>








<!-- //    $q = "UPDATE `profiles`
//       INNER JOIN users
//       ON profiles.user_id = users.id
//       SET profiles.name = '$name', profiles.surname = '$surname' , profiles.gender = '$gender', profiles.dob = '$dob'
//       WHERE users.id = $id;";

//    if($conn->query($q)) {
//       echo "<p class='success'>Successfully changed profile information in table profiles</p>";
//    }
//    else {
//       echo "<p class='error'>Error adding profile in table profiles: " . $conn->error . "</p>";
// }

// if($validated  || ($_SERVER['REQUEST_METHOD'] === 'POST')){
//          $q = "UPDATE `profiles`
//                INNER JOIN users
//                ON profiles.user_id = users.id
//                SET profiles.name = '$name', profiles.surname = '$surname' , profiles.gender = '$gender', dob = $dob
//                WHERE users.id = $id;";

//          if($conn->query($q)) {
//             //echo "<p class='success'>Successfully added profile in table profiles</p>";
//          }
//          else {
//             echo "<p class='error'>Error adding profile in table profiles: " . $conn->error . "</p>";
//          }
//    }
//    else {
//          echo "<p>Error adding user in table users: " . $conn->error . "</p>";
//    }
 -->
