<?php

class Student{
   private $jmbg;
   private $ime;
   private $prezime;
   private $nizOcena;
   private $prosecnaOcena;


   //konstruktor
   public function __construct($jmbg, $ime, $prezime, $nizOcena){
      $this->setJmbg($jmbg);
      $this->setIme($ime);
      $this->setPrezime($prezime);
      $this->setNizOcena($nizOcena);
      $this->setProsecnaOcena($nizOcena);
   }

   //seteri
   public function setJmbg($jmbg){
      if(is_string($jmbg) && strlen($jmbg) == 13){
         $this->jmbg = $jmbg;
      }
      else {
         $this->jmbg = "0000000000000";
      }
   }
   public function setIme($ime){
      $this->ime = $ime;
   }
   public function setPrezime($prezime){
      $this->prezime = $prezime;
   }
   public function setNizOcena($nizOcena){
      $noviNiz = array();
      foreach($nizOcena as $ocena){
         if($ocena < 6){
            $noviNiz[] = 6;
         }
         elseif($ocena >= 6 && $ocena < 7){
            $noviNiz[] = 6;
         }
         elseif($ocena >= 7 && $ocena < 8){
            $noviNiz[] = 7;
         }
         elseif($ocena >= 8 && $ocena < 9){
            $noviNiz[] = 8;
         }
         elseif($ocena >= 9 && $ocena < 10){
            $noviNiz[] = 9;
         }
         else{
            $noviNiz[] = 10;
         }
      }

      $this->nizOcena = $noviNiz;
   }
   public function setProsecnaOcena(){
      $sumaOcena = 0;
      $brojacOcena = 0;
      foreach($this->nizOcena as $ocena){
         $sumaOcena += $ocena;
         $brojacOcena++;
      }
      return $this->prosecnaOcena = $sumaOcena / $brojacOcena;
   }

   //geteri
   public function getJmbg(){
      return $this->jmbg;
   }
   public function getIme(){
      return $this->ime;
   }
   public function getPrezime(){
      return $this->prezime;
   }
   public function getNizOcena(){
      return $this->nizOcena;
   }
   public function getProsecnaOcena(){
      return $this->prosecnaOcena;
   }

   // metode
   public function ispis(){
   echo "<ul>
            <li>{$this->jmbg}</li>
            <li>{$this->ime}</li>
            <li>{$this->prezime}</li>
            <li>". implode(', ', $this->getNizOcena())."</li>
            <li>".$this->prosecnaOcena."</li>
         </ul>";
   }

}







 ?>
