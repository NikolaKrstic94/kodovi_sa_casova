<?php

class Vozilo{

   private $tip;
   private $boja;
   // konstruktor
   public function __construct($tip,$boja){
      $this->setTip($tip);
      $this->setBoja($boja);
   }

   // seteri
   public function setTip($tip){
      $this->tip = $tip;
   }
   public function setBoja($b){
      $this->boja = $b;
   }

   // geteri
   public function getTip(){
      return $this->tip;
   }
   public function getBoja(){
      return $this->boja;
   }
   // metode
   public function ispisiVozilo(){
      echo "<p>Vozilo u pokretu!</p>";
   }
}



















?>