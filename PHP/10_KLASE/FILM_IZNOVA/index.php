<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Film objekat</title>
</head>
<body>
   <?php
   require_once "film.php";


   /* vekFilmova kojoj se prosleđuje
   niz filmova i ceo broj (vek), a funkcija ispisuje samo
   one filmove koji su stvoreni u prosleđenom veku. */
   function vekFilmova($nizFilmova,$vek){
      foreach ($nizFilmova as $film) {
         if(ceil($film->getGodinaIzdanja() / 100) == $vek){
            $film->stampaj();
         }
      }
   }


   /* prosecnaOcena kojoj se
   prosleđuje niz filmova, a koja određuje i vraća
   prosečnu ocenu svih filmova. */
   function prosecnaOcenaSvihFilmova($nizFilmova){
      $sumaOcena = 0;
      $brojacFilmova = 0;
      foreach ($nizFilmova as $film) {
         $sumaOcena += $film->prosek();
         $brojacFilmova++;
      }
      return $sumaOcena / $brojacFilmova;
   }

   /* najboljeOcenjeni kojoj se
   prosleđuje niz filmova, a ona vraća najbolje
   ocenjeni film. */
   function najboljeOcenjeni($nizFilmova){
      $najboljaOcenjeni = $nizFilmova[0]->prosek();
      foreach($nizFilmova as $film){
         if($film->prosek() > $najboljaOcenjeni){
            $najboljaOcenjeni = $film->prosek();
         }
      }
      foreach ($nizFilmova as $film) {
         if($film->prosek() == $najboljaOcenjeni){
            return $film;
         };
      }
   }

   /* osrednjiFilm kojoj se prosleđuje
   niz filmova a ona vraća film koji je najbliži
   prosečnoj oceni svih filmova. */
   function osrednjiFilm($nizFilmova){
      $prosekSvih = prosecnaOcenaSvihFilmova($nizFilmova);
      $najbliziP = abs($nizFilmova[0]->prosek() - $prosekSvih);
      foreach ($nizFilmova as $film) {
         if($najbliziP > abs($film->prosek() - $prosekSvih)){
            $najbliziP = abs($film->prosek() - $prosekSvih);
         }
      }
      foreach ($nizFilmova as $film) {
         if(abs($film->prosek() - $prosekSvih) == $najbliziP){
            return $film;
         }
      }
   }

   /* najmanjaOcenaNajboljeg kojoj
   se prosleđuje niz filmova a ona određuje najbolji
   film i ispisuje njegovu najslabiju ocenu. */
   function najmanjaOcenaNajboljeg($nizFilmova){
      $najboljiFilm = najboljeOcenjeni($nizFilmova);
      $najslabijaOcena = 10;
      foreach ($najboljiFilm->getOcene() as $ocena) {
         if($ocena < $najslabijaOcena){
            $najslabijaOcena = $ocena;
         }
      }
      echo "Najslabija ocena najboljeg filma je: $najslabijaOcena";
   }

   /* Napisati funkciju najmanjaOcena kojoj se
   prosleđuje niz filmova, a koja vraća koja je
   najmanja ocena koju je bilo koji film dobio. */
   function najmanjaOcena($nizFilmova){
      $minOcena = 10;
      foreach ($nizFilmova as $film) {
         foreach ($film->getOcene() as $ocena) {
            if($minOcena > $ocena){
               $minOcena = $ocena;
            }
         }
      }
      return $minOcena;
   }

   $film1 = new Film("Kill Bill", "Quentin Tarantino", 2003, array(9.5,8,6,9,10));

   $film2 = new Film("Titanik", "James Cameron", 1997, array(8,8,8.3,9,9.5));

   $film3 = new Film("300", "Zack Snyder", 2006, array(7,4,6,8,7));

   $shortFilm = new ShortFilm("Naslov", "Reziser", 2000, [9.2, 8.8, 7, 6,], 20);

   echo "<hr>";
   echo $shortFilm->prosek();

   $filmovi = array($film1, $film2, $film3, $shortFilm);
   echo "<p>Spisak svih filmova je: </p>";
   foreach ($filmovi as $film) {
      $film->stampaj();
      echo "Prosecna ocena filma ".$film->getNaslov()." je ".$film->prosek();
   }
   echo "<hr>";
   echo "Prosecna ocena svih filmova je ". prosecnaOcenaSvihFilmova($filmovi);

   echo "<hr>";
   echo "Najbolje ocenjeni film je:";
   najboljeOcenjeni($filmovi)->stampaj();
   echo "<hr>";

   echo "<p>Film najblizi prosecnoj oceni svih filmova je:</p>";
   osrednjiFilm($filmovi)->stampaj();

   echo "<hr>";
   najmanjaOcenaNajboljeg($filmovi);

   echo "<hr>";
   echo "Najmanja ocena bilo kog filma je:". najmanjaOcena($filmovi);
   echo "<hr>";



    ?>
</body>
</html>
