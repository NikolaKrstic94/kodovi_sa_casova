<?php

class Vozilo{
   public $boja;
   public $tip;

   public function __construct($b, $t){
      $this->setBoja($b);
      $this->setTip($t);
   }

   // seteri
   public function setBoja($b){
      $this->boja = $b;
   }
   public function setTip($t){
      $this->tip = $t;
   }

   // geteri
   public function getBoja(){
      return $this->boja;
   }
   public function getTip(){
      return $this->tip;
   }


   public function voziVozilo(){
      echo "<p>Vozilo u pokretu</p>";
   }

}
class Automobil extends Vozilo{
   //Automobil nasledjuje sve neprivatno iz klase Vozilo
   public function voziAutomobil(){
      $this->voziVozilo();
      echo "<p>Automobil u pokretu boje {$this->getBoja()}</p>";
   }
}

 ?>