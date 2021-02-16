<?php require_once "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ambulanta</title>
   <link rel="stylesheet" href="ambulanta.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<h1 class="naslov">Ambulanta</h1>

<ul>
   <li>
      <a href="zadaci_index/tri_tabele.php">
         <button class="btn btn-primary"> Tri tabele</button>
      </a>
   </li>
   <li>
      <a href="zadaci_index/rodjeni.php">
         <button class="btn btn-primary"> Rodjeni 1970-1999</button>
      </a>
   </li>
   <li>
      <a href="zadaci_index/natprosecno_teski.php">
         <button class="btn btn-primary"> Natprosecno teski</button>
      </a>
   </li>
   <li>
      <a href="zadaci_index/natprosecno_visoki.php">
         <button class="btn btn-primary"> Natprosecno visoki</button>
      </a>
   </li>
   <li>
      <a href="zadaci_index/ispod25.php">
         <button class="btn btn-primary"> Ispod 25 godina</button>
      </a>
   </li>
   <li>
      <a href="zadaci_index/nezdrav_bmi.php">
         <button class="btn btn-primary"> Nezdrav BMI</button>
      </a>
   </li>
    <li>
      <a href="zadaci_index/slova_prezimena.php">
         <button class="btn btn-danger">Slova prezimena</button>
      </a>
   </li>
    <li>
      <a href="zadaci_index/abecedno_prezimena.php">
         <button class="btn btn-warning">Abecedno prezimena</button>
      </a>
   </li>



</ul>

<?php




 ?>
</body>
</html>
