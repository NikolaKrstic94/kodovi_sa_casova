<?php
    require_once "connection.php";
    require_once "header.php";
    require_once "validation.php";

    $validated = true;
    $name = $surname = $gender = $dob = $username = $pass = $repass = "";
    $nameErr = $surnameErr = $dobErr = $usernameErr = $passErr = $repassErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];

        // Name validation
        if(textValidation($name)){
            $validated = false;
            $nameErr = textValidation($name);
        }
        else {
            $name = trim($name); //Odsecanje praznina pre i nakon stringa
            $name = preg_replace('/\s\s+/', ' ', $name); //Odsecanje duplih praznina unutar stringa
            $name = $conn->real_escape_string($name);
        }

        // Surname validation
        if(textValidation($surname)){
            $validated = false;
            $surnameErr = textValidation($surname);
        }
        else {
            $surname = trim($surname); //Odsecanje praznina pre i nakon stringa
            $surname = preg_replace('/\s\s+/', ' ', $surname); //Odsecanje duplih praznina unutar stringa
            $surname = $conn->real_escape_string($surname);
        }

        // Date of birth validation
        if(dobValidation($dob)){
            $validated = false;
            $dobErr = dobValidation($dob);
        }
        else {
           $dob = $conn->real_escape_string($dob);
        }

        // Username validation
        if(usernameValidation($username, $conn)){
            $validated = false;
            $usernameErr = usernameValidation($username, $conn);
        }
        else {
           $username = $conn->real_escape_string($username);
        }

        // Password validation
        if(passwordValidation($pass)){
            $validated = false;
            $passErr = passwordValidation($pass);
        }
        // Retype password
        if(passwordValidation($repass)){
            $validated = false;
            $repassErr = passwordValidation($repass);
        }

        // Password == Retype password
        if($pass != $repass){
            $validated = false;
            $repassErr = "Password and Retype password must be the same";
        }
        else {
            $pass = md5($pass);
            $pass = $conn->real_escape_string($pass);
        }

        if($validated){
            $q = "INSERT INTO `users`(`username`, `pass`)
                VALUES ('$username', '$pass');";

            if($conn->query($q)) {
                //echo "<p class='success'>Successfully added user in table users</p>";
                $q = "SELECT `id`
                    FROM `users`
                    WHERE `username` LIKE '$username'";

                $result = $conn->query($q);
                $red = $result->fetch_assoc();
                $id = $red['id'];
                $dob = 'NULL';
                $q = "INSERT INTO `profiles`(`name`, `surname`, `gender`, `dob`, `user_id`)
                        VALUES ('$name', '$surname', '$gender', $dob, '$id')";

                if($conn->query($q)) {
                    echo "<p class='success text-center p-0 m-0'>Successfully registered!</p>";
                }
                else {
                    echo "<p class='error'>Error adding profile in table profiles: " . $conn->error . "</p>";
                }
            }
            else {
                echo "<p>Error adding user in table users: " . $conn->error . "</p>";
            }

            $name = $surname = $gender = $dob = $username = $pass = $repass = "";
            $nameErr = $surnameErr = $dobErr = $usernameErr = $passErr = $repassErr = "";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div class="container px-0">
   <form class=""action="register.php" method="POST">
   <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="Your name here..." value="<?php echo $name; ?>">
      <small id="nameHelp" class="form-text error">
      <?php echo $nameErr; ?>*</small>

      <label for="surname">Surname:</label>
      <input type="text" name="surname" id="surname" class="form-control" placeholder="Your surname here..." value="<?php echo $surname; ?>">
      <small id="surnameHelp" class="form-text error">
      <?php echo $surnameErr; ?>*</small>

      <label>Gender:</label>
      <div class="form-check">
         <label class="form-check-label" for="female" >
         <input class="form-check-input radio-inline" type="radio" name="gender" id="female" value="f" <?php if(isset($gender) && $gender == "f") echo 'checked="checked";' ?>>
         Female</label>
      </div>
      <div class="form-check">
         <label class="form-check-label" for="male" >
         <input class="form-check-input radio-inline" type="radio" name="gender" id="male" value="m" <?php if(isset($gender) && $gender == "m") echo 'checked="checked";' ?>>
         Male</label>
      </div>
      <div class="form-check">
         <label class="form-check-label" for="other" >
         <input class="form-check-input radio-inline" type="radio" name="gender" id="other" value="o" <?php if(isset($gender) && $gender == "o") echo 'checked="checked";' ?>>
         Other</label>
      </div>


      <label for="dob">Date of Birth:</label>
      <input type="date" name="dob" value="<?php echo $dob; ?>">
      <span class="error"><?php echo $dobErr; ?></span>
      <br>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username"
      class="form-control" placeholder="Username here..." value="<?php echo $username; ?>">
      <small id="usernameHelp" class="form-text error">
      <?php echo $usernameErr ?>*</small>

      <label for="password">Password:</label>
      <input type="password" name="pass" id="pass" class="form-control" placeholder="Password here...">
      <small id="passwordHelp" class="form-text error">
      <?php echo $passErr ?>*</small>

      <label for="password">Retype Password:</label>
      <input type="password" name="repass" id="repass"
      class="form-control" placeholder="Retype your password..">
      <small id="repassHelp" class="form-text error">
      <?php echo $repassErr ?>*</small>
      <button class="btn btn-primary mb-3">Submit</button>
   </div>
   </form>
</div>
</body>
</html>

