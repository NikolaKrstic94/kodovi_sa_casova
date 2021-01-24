<?php


class Osoba{
   private $ime;
   private $prezime;
   private $godinaRodjenja;

   //konstruktor
   public function __construct($ime, $prezime, $godinaRodjenja){
      $this->setIme($ime);
      $this->setPrezime($prezime);
      $this->setGodinaRodjenja($godinaRodjenja);
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
   //geteri
   public function getIme(){
      return $this->ime;
   }
   public function getPrezime(){
      return $this->prezime;
   }
   public function getGodinaRodjenja(){
      return $this->godinaRodjenja;
   }
   //metode
   public function ispisiOsobu(){
      echo "<p>Osoba:</p>";
      echo "<ul>
         <li>{$this->getIme()}</li>
         <li>{$this->getPrezime()}</li>
         <li>{$this->getGodinaRodjenja()}</li>
      </ul>";
   }
}






 ?>