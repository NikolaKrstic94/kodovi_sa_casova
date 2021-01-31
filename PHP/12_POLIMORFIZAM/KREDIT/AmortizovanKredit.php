<?php
require_once "kredit.php";
class AmortizovaniKredit extends Kredit{
   const TIP = "Amortizovan Kredit";

   public function __construct($godKamata, $osnovica, $brGod){
      parent::__construct($godKamata, $osnovica, $brGod, self::TIP);
   }
   /* public function mesecnaRataAmortizovanKredit(){
      $godKamata = $this->getGodKamata();
      $brGod = $this->getBrGod();
      $osnovica = $this->getOsnovica();

      $mesecnaKamata = $godKamata / 100 / 12;
      $stepen = (1+ $mesecnaKamata) ** ($brGod * 12);

      return ($osnovica * $mesecnaKamata * $stepen) / ($stepen - 1);
   } */


   // override
   public function mesecnaRata() {
      $godKamata = $this->getGodKamata();
      $brGod = $this->getBrGod();
      $osnovica = $this->getOsnovica();

      $mesecnaKamata = $godKamata / 100 / 12;
      $stepen = (1+ $mesecnaKamata) ** ($brGod * 12);

      return ($osnovica * $mesecnaKamata * $stepen) / ($stepen - 1);
   }

   public function Proba(){
      return "Proba za Amortizovan Kredit";
   }
}



 ?>
