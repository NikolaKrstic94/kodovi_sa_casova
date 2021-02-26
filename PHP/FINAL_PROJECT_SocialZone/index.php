<?php
require_once "header.php";
require_once "connection.php";
if(isset($_SESSION["id"])){
   header("Location:followers.php");
}
?>

<div class="jumbotron pt-4">
   <h1 class="display-4 text-center">Welcome to Social Zone!</h1>
   <div class="container">
   <p class="lead mt-4 mx-4">This is a social network recreation designed to showcase skills that learners from ITBootcamp acquire over the course (pun intended) of 3 months! This website is a culmination of (almost) everything we've learned, enjoy!</p>
   <hr class="my-3">
   <p class="mt-4 mx-4">It uses PHP as the main language and of course SQL database for manipulating data along with HTML and CSS for a complete back-end package.</p>
   <div class="d-flex">
      <span class="lead ml-auto mr-5 jumboButtons">
         <a class="btn btn-primary btn-lg mt-4" href="login.php" role="button">Login!</a>
      </span>
      <span class="lead mr-auto jumboButtons">
         <a class="btn btn-primary btn-lg mt-4" href="register.php" role="button">Make an account!</a>
      </span>

   </div>
   </div>

</div>
