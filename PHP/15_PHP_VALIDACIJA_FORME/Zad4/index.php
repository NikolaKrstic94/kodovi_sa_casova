<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Validacija forme</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$ime = $email = $bio = $pol = "";
$imeErr = $emailErr = $bioErr = $polErr =  "";
$prikazi = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(empty($_POST["imePrezime"])){
      $imeErr = "Morate uneti ime i prezime";
   }
   else {
      $ime = $_POST["imePrezime"];
   }

   if(empty($_POST["email"])){
      $emailErr = "Morate uneti email";
   }
   else {
      $email = $_POST["email"];
   }

   if(empty($_POST["bio"])){
      $bioErr = "Morate uneti biografiju";
   }
   else {
      $bio = $_POST["bio"];
   }
   if(empty($_POST["pol"])){
      $polErr = "Morate uneti pol";
   }
   else {
      $pol = $_POST["pol"];
   }
}
if($ime != "" && $email != "" && $bio !=""){
   $prikazi = true;
}

 ?>
   <form action="<?php if($prikazi) echo 'prikaz.php'; ?>" method="POST">
      <p>
         <label for="">Ime i prezime: </label>
         <input type="text" name="imePrezime" value="<?php echo $ime ?>" id="">
         <span class="error">* <?php echo $imeErr; ?></span>
      </p>
      <p>
         <label for="">Email: </label>
         <input type="email" name="email" value="<?php echo $email?>" id="">
         <span class="error">* <?php echo $emailErr; ?></span>
      </p>
      <p>
         <label for="">Biografija: </label>
         <textarea name="bio" id="" cols="30" rows="10"><?php echo $bio ?></textarea>
         <span class="error">* <?php echo $bioErr; ?></span>
      </p>
      <p>
         <label for="">Pol: </label>
         <input type="radio" name="pol" id="" value="z" <?php if(isset($pol) && $pol == "z") echo 'checked="checked";' ?>">Zenski
         <input type="radio" name="pol" id="" value="m" <?php if(isset($pol) && $pol == "m") echo 'checked="checked";' ?>>Muski
         <input type="radio" name="pol" id="" value="d" <?php if(isset($pol) && $pol == "d") echo 'checked="checked";' ?>>Drugo <span class="error">* <?php echo $polErr; ?></span>
      </p>

      <p>
         <button>Posalji</button>
         <input type="reset" name="reset" value="Resetuj">
      </p>
   </form>



</body>
</html>


