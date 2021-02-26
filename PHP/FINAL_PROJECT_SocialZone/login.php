<?php
    // Otvaranje sesije na pocetku stranice
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SocialZone</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require_once 'connection.php';
    $usernameError = $passError = "*";
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // korisnik je poslao username i pass i pokusava logovanje
        $username = $conn->real_escape_string($_POST['username']);
        $pass = $conn->real_escape_string($_POST['pass']);
        $val = true;
        if(empty($username)) {
            $val = false;
            $usernameError = "Username cannot be left blank!";
        }
        if(empty($pass)) {
            $val = false;
            $passError = "Password cannot be left blank!";
        }
        if($val) {
/*             // Pokusamo da ulogujemo korisnika samo ako su sva polja
            // forme neprazna
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = $conn->query($sql);
            if($result->num_rows == 0) {
                $usernameError = "This username doesn't exist!";
            }
            else {
                // Postoji korisnicko ime, treba proveriti sifre
                $row = $result->fetch_assoc();
                $dbPass = $row['pass'];
                if($dbPass != md5($pass)) {
                    $passError = "Incorrect password!";
                }
                else {
                    // ovde vrsimo logovanje
                    $_SESSION['id'] = $row['id'];
                  //   $_SESSION['full_name'] = $row[""]
                    header('Location: followers.php');
                }
            }
 */
            // Pokusamo da ulogujemo korisnika samo ako su sva polja
            // forme neprazna
            $sql = "SELECT users.id, users.username,users.pass, profiles.name AS name,profiles.surname AS surname FROM users
            INNER JOIN profiles
            ON users.id = profiles.user_id
             WHERE username = '$username'";
            $result = $conn->query($sql);
            if($result->num_rows == 0) {
                $usernameError = "This username doesn't exist!";
            }
            else {
                // Postoji korisnicko ime, treba proveriti sifre
                $row = $result->fetch_assoc();
                $dbPass = $row['pass'];
                if($dbPass != md5($pass)) {
                    $passError = "Incorrect password!";
                }
                else {
                    // ovde vrsimo logovanje
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['full_name'] = $row["name"] ." ". $row["surname"];
                    header('Location: followers.php');
                }
            }

         }
    }
?>
<div class="container mt-3">
   <form action="#" method="POST" class="pt-4">
   <div class="form-group">
   <h3 class="text-center">Login to Social Zone</h3>
      <label for="username">Username:</label>
      <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
      <small class="form-text error"><?php echo $usernameError; ?></small>
   </div>

   <div class="form-group">
      <label for="pass">Password:</label>
      <input type="password" class="form-control" name="pass"
      id="pass" placeholder="Enter your password">
      <small class="form-text error"><?php echo $passError; ?></small>
   </div>

   <button type="submit" class="btn btn-primary mb-4">Log In!</button>

   </form>
</div>

</body>
</html>
