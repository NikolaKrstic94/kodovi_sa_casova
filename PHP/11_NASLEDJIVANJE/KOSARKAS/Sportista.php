<?php

class Sportista{
   private $ime;
   private $prezime;
   private $godinaRodjenja;
   private $gradRodjenja;

   //konstruktor
   public function __construct($ime, $prezime, $godinaRodjenja, $gradRodjenja){
      $this->setIme($ime);
      $this->setPrezime($prezime);
      $this->setGodinaRodjenja($godinaRodjenja);
      $this->setGradRodjenja($gradRodjenja);
   }
   //seteri
   public function setIme($ime){
      $this->ime = $ime;
   }
   public function setPrezime($prezime){
      $this->prezime = $prezime;
   }
   public function setGodinaRodjenja($godinaRodjenja){
      $this->godinaRodjenja = $godinaRodjenja;
   }
   public function setGradRodjenja($gradRodjenja){
      $this->gradRodjenja = $gradRodjenja;
   }
   //geteri
   public function getIme(){
      return $this->ime;
   }
   public function getPrezima(){
      return $this->prezime;
   }
   public function getGodinaRodjenja(){
      return $this->godinaRodjenja;
   }
   public function getGradRodjenja(){
      return $this->gradRodjenja;
   }
   //metode

   public function ispisiSportistu(){
     echo "<ul>
         <li>{$this->getIme()}</li>
         <li>{$this->getPrezima()}</li>
         <li>{$this->getGodinaRodjenja()}</li>
         <li>{$this->getGradRodjenja()}</li>
      </ul>";
   }
}








 ?>
