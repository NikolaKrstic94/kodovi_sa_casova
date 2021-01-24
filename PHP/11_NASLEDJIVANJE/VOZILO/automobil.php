<?php

require_once "vozilo.php";


class Automobil extends Vozilo{
   private $brSedista;

   // konstruktor
   public function __construct ($tip, $boja, $brSedista){
    // moguce je pozivati roditeljske setere, ali nije prakticno. LPrakticnije je pozvati roditeljski konstruktor.
      // $this->setTip($tip);
      // $this->setBoja($boja);
      parent::__construct($tip, $boja);
      $this->setBrSedista($brSedista);
   }

   // seteri  - samo za sopstvena polja u ovom slucaju $brSedista
   public function setBrSedista($brSedista){
      $this->brSedista = $brSedista;
   }

   //geteri - samo za sopstvena polja u ovom slucaju $brSedista
   public function getBrSedista(){
      return $this->brSedista;
   }

   //metode
   public function ispisiAutomobil(){
      echo "<p>Automobil u pokretu</p>";
   }
}















 ?>