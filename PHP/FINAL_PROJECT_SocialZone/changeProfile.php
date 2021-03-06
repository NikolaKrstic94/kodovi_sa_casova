<?php
require_once "header.php";
require_once "connection.php";
require_once "validation.php";

if (!(empty($_SESSION["id"]))) {
   $id = $_SESSION["id"];
} else {
   header("Location:index.php");
}


$nameErr = $surnameErr = $bioErr= "";
$sql = "SELECT profiles.name AS name, profiles.surname AS surname, profiles.gender AS gender, profiles.dob AS dob, profiles.user_id, profiles.bio AS bio, users.id FROM profiles
INNER JOIN users
ON users.id = profiles.user_id
WHERE user_id = $id;";

$validated = true;

$result = $conn->query($sql);

foreach ($result as $row) {
   $nameOld = $row["name"];
   $surnameOld = $row["surname"];
   $genderOld = $row["gender"];
   $dobOld = $row["dob"];
   if(empty($row["bio"])){
      $bioOld = "";
   }
   else {
      $bioOld = $row["bio"];
   }
}
// Name validation
if (textValidation($nameOld)) {
   $validated = false;
   $nameErr = textValidation($nameOld);
} else {
   $nameOld = trim($nameOld); //Odsecanje praznina pre i nakon stringa
   $nameOld = preg_replace('/\s\s+/', ' ', $nameOld); //Odsecanje duplih praznina unutar stringa
}

// Surname validation
if (textValidation($surnameOld)) {
   $validated = false;
   $surnameErr = textValidation($surnameOld);
} else {
   $surnameOld = trim($surnameOld); //Odsecanje praznina pre i nakon stringa
   $surnameOld = preg_replace('/\s\s+/', ' ', $surnameOld); //Odsecanje duplih praznina unutar stringa

   // Bio validation
   if($bioOld == ''){
      $bioErr = "Your bio is empty! Add something!";
   }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $name = $_POST['name'];
   $surname = $_POST['surname'];
   $gender = $_POST['gender'];
   $dob = $_POST['dob'];
   $bio = $_POST['bio'];
   $validated = true;
   // Name validation
   if (textValidation($name)) {
      $validated = false;
      $nameErr = textValidation($name);
   } else {
      $name = trim($name); //Odsecanje praznina pre i nakon stringa
      $name = preg_replace('/\s\s+/', ' ', $name); //Odsecanje duplih praznina unutar stringa
   }

   // Surname validation
   if (textValidation($surname)) {
      $validated = false;
      $surnameErr = textValidation($surname);
   } else {
      $surname = trim($surname); //Odsecanje praznina pre i nakon stringa
      $surname = preg_replace('/\s\s+/', ' ', $surname); //Odsecanje duplih praznina unutar stringa
   }

   // Date of birth validation

   if (dobValidation($dob)) {
      $validated = false;
      $dobErr = dobValidation($dob);
   }


   if ($validated) {
      $q = "UPDATE `profiles`
            SET profiles.name = '$name', profiles.surname = '$surname' , profiles.gender = '$gender', profiles.dob = '$dob', profiles.bio = '$bio'
            WHERE user_id = $id;";
      $conn->query($q);

      // after submiting the form, this sets proper values to be shown in the form
      $nameOld = $name;
      $surnameOld = $surname;
      $genderOld = $gender;
      $dobOld = $dob;
      $bioOld = $bio;
   }
   // else {
   //    echo "You have to change all your parameters";
   // }

}
  $male = $female = $other = "";
   if ($genderOld == "m") {
      $male = "checked";
   } elseif ($genderOld == "f") {
      $female = "checked";
   } elseif ($genderOld == "o") {
      $other = "checked";
   }
?>
<h5 class="centeredText pt-3">Change your profile information:</h5>
<form action="changeProfile.php" method="POST">
   <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php echo $nameOld; ?>">
      <small id="nameHelp" class="form-text error">*<?php echo $nameErr; ?></small>
   </div>
   <div class="form-group">
      <label for="surname">Surname</label>
      <input type="text" class="form-control" id="surname" name="surname" value="<?php echo $surnameOld; ?>">
      <small id="nameHelp" class="form-text error">*<?php echo $surnameErr; ?></small>
   </div>
   <div class="form-group">
      <label for="dob">Date of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $dobOld; ?>">
   </div>
   <label for="gender">Gender:</label>
   <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="male" value="m" <?php echo $male; ?>>
      <label class="form-check-label" for="male">
         Male
      </label>
   </div>
   <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="female" value="f" <?php echo $female; ?>>
      <label class="form-check-label" for="female">
         Female
      </label>
   </div>
   <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="other" value="o" <?php echo $other; ?>>
      <label class="form-check-label" for="other">
         Other
      </label>
   </div>
   <div class="form-group">
      <p class="text-center">Your Bio:</p>
      <textarea name="bio" id="bio" cols="55" rows="10"><?php if($bioOld) echo $bioOld; else echo $bioErr; ?></textarea>
   </div>
   <button type="submit" class="btn btn-primary mb-3">Submit</button>
</form>






