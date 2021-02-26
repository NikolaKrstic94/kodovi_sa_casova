<?php
   $host = "localhost";
   $username = "admin";
   $password = "admin123";
   $dbname = "itbootcamp";

   $conn = new mysqli($host, $username, $password, $dbname);
   if($conn->connect_error){
      die("There is an error connectin to the database");
   }
 ?>
