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


$id = $_SESSION["id"];
$validated = true;
$oldPass = $newPass = $retypedPass = $newPassErr = $oldPassErr = $retypedPassErr = "";

   if($_SERVER["REQUEST_METHOD"] == "POST"){
      $oldPass = $_POST['oldPass'];
      $newPass = $_POST['newPass'];
      $retypedPass = $_POST['retypedPass'];

      // Password validation
      if(passwordValidation($oldPass)){
         $validated = false;
         $oldPassErr = passwordValidation($oldPass);
      }
      if(passwordValidation($newPass)){
         $validated = false;
         $newPassErr = passwordValidation($newPass);
      }

      // Retype password
      if(passwordValidation($retypedPass)){
         $validated = false;
         $retypedPassErr = passwordValidation($retypedPass);
      }

      // proveriti da li je isti stari password

         $sql = "SELECT pass FROM users
                  WHERE id = $id;";
         $result = $conn->query($sql);
         $red = $result->fetch_assoc();
         $password = $red["pass"];
         if(md5($_POST["oldPass"]) == $password){
              // Password == Retype password
            if($newPass != $retypedPass){
               $validated = false;
               $retypedPassErr = "Password and Retype password must be the same";
            }
         }
         else {
            $validated = false;
            $oldPassErr = "That's not your old password";
         }


      if($validated){

         $newPass = md5($newPass);
               $sql = "UPDATE users
                        SET pass = '$newPass'
                        WHERE id = $id";

               if($result = $conn->query($sql)){
                  echo "<p class='passMessage text-center text-info'>You successfully changed your password!</p>";
               }
               else {
               echo "error".$conn->error;
               }
      }
   }
?>

<h5 class="centeredText pt-3">Change your password:</h5>
<form action="changePass.php" method="POST">
  <div class="form-group">
    <label for="oldPass">Old Password:</label>
    <input type="password" class="form-control" id="oldPass" placeholder="Enter your old password..." name="oldPass">
    <small id="oldPassHelp" class="form-text error">*<?php echo $oldPassErr; ?></small>
  </div>
  <div class="form-group">
    <label for="newPass">New Password:</label>
    <input type="password" class="form-control" id="newPass" placeholder="Enter your new password..." name="newPass">
    <small id="newPassHelp" class="form-text error">*<?php echo $newPassErr; ?></small>
  </div>
  <div class="form-group">
    <label for="retypedPass">Retype New Password:</label>
    <input type="password" class="form-control" id="retypedPass" placeholder="Retype your new password..."
    name="retypedPass">
    <small id="retypedPassHelp" class="form-text error">*<?php echo $retypedPassErr; ?></small>
  </div>
  <button type="submit" class="btn btn-primary mb-3">Submit</button>
</form>

