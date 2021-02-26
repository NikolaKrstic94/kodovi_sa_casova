<?php
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

<div class="container">
   <nav class="navbar navbar-expand navbar-dark bg-info text-white p-0">
   <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
      <ul class="navbar-nav d-flex">
         <li class="nav-item active py-1">
           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item active mr-auto py-1">
           <a class="nav-link" href="followers.php">Friends</a>
         </li>
      </ul>
      <ul class="navbar-nav d-flex ml-auto">
         <li class="nav-item active py-1">
              <a class="nav-link" href="changeProfile.php" >Change profile</a>
         </li>
         <li class="nav-item active py-1">
            <a class="nav-link" href="changePass.php" >Change password</a>
         </li>
         <li class="nav-item active py-1">
            <a class="nav-link" href="logout.php" >Logout</a>
         </li>
      </ul>
      </div>
   </nav>
   <h4 class="welcomeUser"> <?php if(isset($_SESSION["full_name"])) echo "Welcome, " .$_SESSION["full_name"] ."!"; ?></h4>


