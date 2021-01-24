<?php
require_once "osoba.php";


class Zaposleni extends Osoba{
   private $plata;
   private $pozicija;

   // konstruktor 
   public function __construct($ime, $prezime, $godinaRodjenja,$plata, $pozicija){
      parent::__construct($ime, $prezime, $godinaRodjenja);
      $this->setPlata($plata);
      $this->setPozicija($pozicija);
   }
   //seteri
   public function setPlata($plata){
      $this->plata = $plata;
   }
   public function setPozicija($pozicija){
      $this->pozicija = $pozicija;
   }
   //geteri
   public function getPlata(){
      return $this->plata;
   }
   public function getPozicija(){
      return $this->pozicija;
   }
   //metode
   public function ispisiZaposlenog(){
      $this->ispisiOsobu();
      if($this->getPozicija() == "ekonomista"){
         echo "<p>Je zaposlen u ekonomskom sekotoru"." i ima platu: ".$this->getPlata();
      }
      else{
         echo "<p>Je zaposlen kao ".$this->getPozicija()." i ima platu: ".$this->getPlata();
      }
   }
}





 ?>