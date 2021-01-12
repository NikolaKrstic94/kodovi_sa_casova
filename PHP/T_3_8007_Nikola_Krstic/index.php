<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Test 3</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Header -->
   <div class="row col-12 row-2">
      <header>
         <h1>Dobrodosli na moj sajt</h1>
            <?php //ISPIS PARAGRAFA DATUMA
               $dayNum = date ("w");
               $dayDate = date("j");
               $month = date ("m");
               $year = date ("Y");
               if($dayNum == 1) {
                  $day = "Ponedeljak";
               }
               elseif($dayNum == 2){
                  $day = "Utorak";
               }
               elseif($dayNum == 3){
                  $day = "Sreda";
               }
               elseif($dayNum == 4){
                  $day = "Cetvrtak";
               }
               elseif($dayNum == 5){
                  $day = "Petak";
               }
               elseif($dayNum == 6){
                  $day = "Subota";
               }
               elseif($dayNum == 0){
                  $day = "Nedelja";
               }
            echo "<p>Danas je: $day, $dayDate.$month.$year</p>";
         ?>
      </header>
   </div>
   <!-- NAV MENI -->
   <div id="nav_menu" class="row col-12 row-1">
      <nav>
         <ul>
            <li><a href="index.php">O meni</a></li>
            <li><a href="index.php">O mom kucnom ljubimcu</a></li>
            <li><a href="index.php">O mojim interesovanjima</a></li>
            <li id="li_right"><a href="index.php">O mom poslu</a></li>
         </ul>
      </nav>
   </div>
   <!-- Centralni deo -->
   <div class="row col-12 row-8">
      <!-- Levi centralni deo -->
      <section class="col-9">
         <h2>O meni</h2>
         <?php 
         $gender = "Z";
         if($gender == "M"){
            $boja = "blue";
         }
         elseif($gender == "Z"){
            $boja = "red";
         }
         else {
            $boja = "green";
         }
         echo"<p style='color:$boja'>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, et facilis. Incidunt quia fugiat, sequi recusandae in quis sed saepe impedit reprehenderit doloremque alias repellat vel ipsa aliquam enim beatae?
         </p>"
         ?>
         <h2>O mom kucnom ljubimcu</h2>
         <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, et facilis. Incidunt quia fugiat, sequi recusandae in quis sed saepe impedit reprehenderit doloremque alias repellat vel ipsa aliquam enim beatae?
         </p>
         <h2>O mojim interesovanjima</h2>
         <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, et facilis. Incidunt quia fugiat, sequi recusandae in quis sed saepe impedit reprehenderit doloremque alias repellat vel ipsa aliquam enim beatae?
         </p>
         <h2>O mom poslu</h2>
         <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio, et facilis. Incidunt quia fugiat, sequi recusandae in quis sed saepe impedit reprehenderit doloremque alias repellat vel ipsa aliquam enim beatae?
         </p>
      </section>
      <!-- desni deo -->
      <aside class="col-3">
         <h1>Moja fotografija:</h1>
   <?php
      if($gender == "M"){ 
         echo"<img src='slike/male.jpg' alt=''>";
         }
      
      elseif($gender == "Z"){
         echo"<img src='slike/female.jpg' alt=''>";
      }
      else {
         echo"<img src='slike/genderless.jpg' alt=''>";
      }
   ?> 
      </aside>
   </div>
   <!-- footer -->
   <div class="row col-12 row-1">
      <footer>
         <h1>Footer</h1>
      </footer>
   </div>
</body>
</html>