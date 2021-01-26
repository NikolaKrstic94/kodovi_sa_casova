<?php
require_once "kredit.php";
class AmortizovaniKredit extends Kredit{
   const TIP = "Amortizovan Kredit";

   public function __construct($godKamata, $osnovica, $brGod){
      parent::__construct($godKamata, $osnovica, $brGod, self::TIP);
   }
   public function racunanjeAmortizovanog(){
      $godKamata = $this->getGodKamata();
      $brGod = $this->getBrGod();
      $osnovica = $this->getOsnovica();
   }
}



 ?>
