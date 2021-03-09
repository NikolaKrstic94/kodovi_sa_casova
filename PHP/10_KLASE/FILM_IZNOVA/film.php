<?php

class Film{
   private $naslov;
   private $reziser;
   private $godinaIzdanja;
   private $ocene;



   // konstruktori
   public function __construct($naslov, $reziser, $godinaIzdanja, $ocene){
      $this->setNaslov($naslov);
      $this->setReziser($reziser);
      $this->setGodinaIzdanja($godinaIzdanja);
      $this->setOcene($ocene);
   }
   //seteri
   public function setNaslov($naslov){
      $this->naslov = $naslov;
   }
   public function setReziser($reziser){
      $this->reziser = $reziser;
   }
   public function setGodinaIzdanja($godinaIzdanja){
      $this->godinaIzdanja = $godinaIzdanja;
   }
   public function setOcene($ocene){
      $this->ocene = $ocene;
   }
   // getteri

   public function getNaslov(){
      return $this->naslov;
   }
   public function getReziser(){
      return $this->reziser;
   }
   public function getGodinaIzdanja(){
      return $this->godinaIzdanja;
   }
   public function getOcene(){
      return $this->ocene;
   }
   // metode
   public function stampaj(){
      echo "<ul>
         <li>{$this->getNaslov()}</li>
         <li>{$this->getReziser()}</li>
         <li>{$this->getGodinaIzdanja()}</li>
         <li>".implode(", ", $this->getOcene())."</li>
      </ul>";
   }
   public function prosek(){
      $sumaOcena = 0;
      foreach ($this->ocene as $ocena) {
         $sumaOcena += $ocena;
      }
      return $sumaOcena / count($this->ocene);
   }

}

class ShortFilm extends Film{
   private $trajanje;

   // konstruktor
   public function __construct($naslov, $reziser, $godinaIzdanja, $ocene, $trajanje){
      parent::__construct($naslov, $reziser, $godinaIzdanja, $ocene);
      $this->setTrajanje($trajanje);
   }
   // seteri
   public function setTrajanje($trajanje){
      $this->trajanje = $trajanje;
   }
   // geteri
   public function getTrajanje(){
      return $this->trajanje;
   }
   public function prosek(){
      parent::prosek();
   }
}

 ?>
