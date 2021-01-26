<?php

require_once "kredit.php";

class ObicanKredit extends Kredit{
const TIP = "Obican kredit";
//konstruktor
public function __construct($godKamata, $osnovica, $brGod){
   parent::__construct($godKamata, $osnovica, $brGod, self::TIP);
}

public function racunanjeObicnog(){
   $osnovica = $this->getOsnovica();
   $brGodina = $this->getBrGod();
   $godKamata = $this->getGodKamata();

   $mesecnaRata = ($osnovica + ($osnovica *$brGodina*($godKamata/100)))/($brGodina*12);
   return $mesecnaRata;
}

}








 ?>
