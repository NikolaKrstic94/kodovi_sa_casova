<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Projekat</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous" />
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <div class="container col-9">
      <div class="row col-12 ml-0 mb-0 p-0" id="headerCitati"> <!-- Header Citati naslov -->
         <h3 class="col-12 text-center mb-0">Citati</h3>
      </div>
      <div class="row col-12 m-0 p-0"><!-- Carousel -->
         <div id="carouselExampleIndicators" class="p-0 carousel slide col-12" data-ride=”carousel”>
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            
            <div class="carousel-inner">
               <?php
               
               $images = ["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg","6.jpg","7.jpg","8.jpg","9.jpg","10.jpg","11.jpg","12.jpg"];
               shuffle($images);
               $randImage1 = $images[0];
               $randImage2 = $images[1];
               $randImage3 = $images[2];
                  echo '<div class="carousel-item active">
                  <img src="images/'.$randImage1.'" style="height: 450px;" class="d-block w-100" alt="...">
                  </div>';
               $randImageNum = rand(1,12);
                  echo '<div class="carousel-item">
                  <img src="images/'.$randImage2.'" style="height: 450px;" class="d-block w-100" alt="...">
                  </div>';
               $randImageNum = rand(1,12);
                  echo '<div class="carousel-item">
                  <img src="images/'.$randImage3.'" style="height: 450px;" class="d-block w-100" alt="...">
                  </div>';
               ?>
            </div>
            <a class="carousel-control-prev pl-o" href="#carouselExampleIndicators" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <div class="row col-12 m-0 p-0" id="tabovi"><!-- Nav (Posao, zdravlje, motivacija, ljubav) -->
         <ul class="nav nav-pills nav-fill col-12 m-0 p-0">
            <li class="nav-item">
               <a class="nav-link" href="index.php?zdravlje">Zdravlje</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="index.php?ljubav">Ljubav</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="index.php?posao">Posao</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="index.php?motivacija" tabindex="-1">Motivacija</a>
            </li>
         </ul>
      </div>
      <div class="row col-12 m-0 p-0"><!-- Jumbotron Citati -->
         <div class="jumbotron my-0 py-0 col-12 text-center" id="jumbo_area">
            <?php
            function ispisiCitatZdravlje(){
               $file = "citati/zdravlje.txt";
               $file_niz = file($file);
               $numOfLines = count($file_niz);
               $last_array_index = $numOfLines -1;
               $rand_index = mt_rand(0,$last_array_index);
               $even_rand = $rand_index & ~1;
               $rand_text = $file_niz[$even_rand];
               $rand_text_author = $file_niz[$even_rand+1];
               echo '<p class="lead pt-3">'.$rand_text.'</p>
                     <p class="lead mt-1 mb-5">'.$rand_text_author.'</p>';
            }
            function ispisiCitatLjubav(){
               $file = "citati/ljubav.txt";
               $file_niz = file($file);
               $numOfLines = count($file_niz);
               $last_array_index = $numOfLines -1;
               $rand_index = mt_rand(0,$last_array_index);
               $even_rand = $rand_index & ~1;
               $rand_text = $file_niz[$even_rand];
               $rand_text_author = $file_niz[$even_rand+1];
               echo '<p class="lead pt-3">'.$rand_text.'</p>
                     <p class="lead mt-1 mb-5">'.$rand_text_author.'</p>';
            }
            function ispisiCitatPosao(){
               $file = "citati/posao.txt";
               $file_niz = file($file);
               $numOfLines = count($file_niz);
               $last_array_index = $numOfLines -1;
               $rand_index = mt_rand(0,$last_array_index);
               $even_rand = $rand_index & ~1;
               $rand_text = $file_niz[$even_rand];
               $rand_text_author = $file_niz[$even_rand+1];
               echo '<p class="lead pt-3">'.$rand_text.'</p>
                     <p class="lead mt-1 mb-5">'.$rand_text_author.'</p>';
            }
            function ispisiCitatMotivacija(){
               $file = "citati/motivacija.txt";
               $file_niz = file($file);
               $numOfLines = count($file_niz);
               $last_array_index = $numOfLines -1;
               $rand_index = mt_rand(0,$last_array_index);
               $even_rand = $rand_index & ~1;
               $rand_text = $file_niz[$even_rand];
               $rand_text_author = $file_niz[$even_rand+1];
               echo '<p class="lead pt-3">'.$rand_text.'</p>
                     <p class="lead mt-1 mb-5">'.$rand_text_author.'</p>';
            }
            function ispisiCitat(){
               $file1 = "citati/zdravlje.txt";
               $file2 = "citati/ljubav.txt";
               $file3 = "citati/posao.txt";
               $file4 = "citati/motivacija.txt";
               $file_niz1 = file($file1);
               $file_niz2 = file($file2);
               $file_niz3 = file($file3);
               $file_niz4 = file($file4);
               $all_quotes = array_merge($file_niz1,$file_niz2,$file_niz3,$file_niz4);
               $numOfLines = count($all_quotes);
               $last_array_index = $numOfLines -1;
               $rand_index = mt_rand(0,$last_array_index);
               $even_rand = $rand_index & ~1;
               $rand_text = $all_quotes[$even_rand];
               $rand_text_author = $all_quotes[$even_rand+1];
               echo '<p class="lead pt-3">'.$rand_text.'</p>
                     <p class="lead mt-1 mb-5">'.$rand_text_author.'</p>';
            }
            if (isset($_GET['zdravlje'])) {
               ispisiCitatZdravlje();
            }
            elseif(isset($_GET['ljubav'])){
               ispisiCitatLjubav();
            }
            elseif(isset($_GET['posao'])){
               ispisiCitatPosao();
            }
            elseif(isset($_GET['motivacija'])){
               ispisiCitatMotivacija();
            }
            else{
               ispisiCitat();
            }
             ?>
         </div>
      </div>
      <div class="row col-12 m-0 p-0" id="futer_row"><!-- Footer -->
         <footer class="footer col-12 m-0 p-0">
            <h4 class="text-center m-0 p-0">
               <?php
               $dan = date('j');
               $mesec = date ('n');
               $godina = date ('Y');
               echo "Danas je: $dan.$mesec.$godina ";
                ?>
            </h4>
         </footer>
      </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"></script>
</body>

</html>