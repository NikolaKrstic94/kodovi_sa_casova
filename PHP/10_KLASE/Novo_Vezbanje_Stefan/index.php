<?php

   //include "film.php"; // Ako dati fajl ne postoji, onda ignorise gresku i nastavlja dalje
   //require "film.php"; // Ako dati fajl ne postoji, onda prekida izvrsenje koda i tu generise gresku
   //include_once "film.php"; // Isto kao include samo proverava da li je vec ukljucen dati fajl i ako jeste ne ukljucuje ga ponovo
   require_once "film.php"; // isto kao i require samo proverava da li je vec ukljucen dati fajl i ako jeste ne ukljucuje gap onovo
   require_once "pacijent.php";
   require_once "autobus.php";



   // ZA FILM

   // FUNKCIJA - ispisati filmove koji su izasli u 21. veku
   function filmovi21Vek($films){
      foreach ($films as $film ) {
         if($film->getGodina() > 2000){
            $film->stampaj();
         }
      }
   }

   // Odrediti prosecnu ocenu svih filmova

   function prosecnaOcena($films){
      $suma = 0;
      foreach ($films as $film ) {
         $suma += $film->getOcena();
      }
      $n = count($films);
      if($n > 0){
         $arsr = $suma / $n;
      }
      else {
         $arsr = $suma;
      }
      return $arsr;
   }
   // odrediti najbolje ocenjeni film
   function ispisNajboljeOcenjenog($films){
      $maxOcena = 0;
      foreach ($films  as $film ) {
         if($film->getOcena() > $maxOcena){
            $maxOcena = $film->getOcena();
         }
      }
      foreach($films as $film){
         if($film->getOcena() == $maxOcena){
            $film->stampaj();
         }
      }
   }


   $film1 = new Film("Kill Bill", "Quentin Tarantino", 2003, 8.7, array(1,2,3,4,5));

   $film2 = new Film("Titanik", "James Cameron", 1997, 9.2, array(1,2,3,4,5)); 
   
   $film3 = new Film("300", "Zack Snyder", 2006, 7.6, array(1,2,3,4,5));

   $filmovi = array($film1, $film2, $film3);

      $film1->stampaj();

      $film2->stampaj();

      $film3->stampaj();

      echo '<p>Filmovi koji su izasli u 21. veku:</p>';
      filmovi21Vek($filmovi);


      $prosek = prosecnaOcena($filmovi);
      echo "Prosecna ocena svih filmova je $prosek";


      echo "<p>Najbolje ocenjeni film je : </p>";
      ispisNajboljeOcenjenog($filmovi);
      echo "<hr>";
      echo "Prosecna ocena ovog filma je: ".$film1->prosek($film1->getOceneKorisnika());
      

   // ZA PACIJENT.PHP
   echo "<p>PACIJENT ZADATAK</p>";
   /* 
     Kreirati niz od barem tri pacijenta.
    Ispisati podatke o pacijentu sa najmanjom
   težinom.
    Ispisati podatke o pacijentu sa najvećom bmi
   vrednošću.
    Ispisati sve pacijente čije ime sadrži slovo A.
    Napraviti funkciju srednjaVisina kojoj se
   prosleđuje niz pacijenata a koja određuje i
   vraća sredju visinu pacijenta.
    */

    $pac1 = new Pacijent("Nikola", 184, 80);
    $pac2 = new Pacijent("Milan", 170, 70);
    $pac3 = new Pacijent("Djoka", 175, 74);

    $pacijenti = array($pac1, $pac2, $pac3);

   function ispisiPacNajmanjaTezina($patients){
      $najmanjaTezinaPac = $patients[0]->getTezina();
      foreach($patients as $pac){
         if($najmanjaTezinaPac > $pac->getTezina()){
            $najmanjaTezinaPac = $pac->getTezina();
         }
      }
      foreach ($patients as $pac ) {
         if($najmanjaTezinaPac == $pac->getTezina()){
            $pac->stampaj();
         }
      }
   }

   function ispisiPacNajveciBmi($patients){
      $najveciBmi = $patients[0]->bmi();
      foreach($patients as $pac){
         if($najveciBmi < $pac->bmi()){
            $najveciBmi = $pac->bmi();
         }
      }
      foreach ($patients as $pac ) {
         if($najveciBmi == $pac->bmi()){
            $pac->stampaj();
         }
      }
   }

   function imeSadrziA($patients){
      foreach ($patients as $pac) {
         if(strpos($pac->getIme(), "a") !== false){
            $pac->stampaj();
         }
      }
   }

   function srednjaVisina($patients){
      $brojacPac = 0;
      $sumaVisina = 0;
      foreach ($patients as $pac ) {
         $sumaVisina += $pac->getVisina();
         $brojacPac++;
      }
      return $sumaVisina / $brojacPac;
   }

// POZIVANJE FUNKCIJA za pacijent.php
   echo "<p>Pacijent sa najmanjom tezinom:</p>";
   ispisiPacNajmanjaTezina($pacijenti);

   echo "<p>Pacijent sa najvecim BMI:</p>";
   ispisiPacNajveciBmi($pacijenti);
   
   echo "<p>Pacijenti cije ime sadrzi slovo 'a'</p>";
   imeSadrziA($pacijenti);

   echo "<p>Srednja visina svih pacijenata je:</p>";
   echo srednjaVisina($pacijenti);

