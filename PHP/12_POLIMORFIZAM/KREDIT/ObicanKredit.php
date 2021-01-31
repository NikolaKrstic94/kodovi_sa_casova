<?php

require_once "kredit.php";

class ObicanKredit extends Kredit{
const TIP = "Obican kredit";
//konstruktor
public function __construct($godKamata, $osnovica, $brGod){
   parent::__construct($godKamata, $osnovica, $brGod, self::TIP);
}

/* public function mesecnaRataObicanKredit(){
   $osnovica = $this->getOsnovica();
   $brGodina = $this->getBrGod();
   $godKamata = $this->getGodKamata();

   $mesecnaRata = ($osnovica + ($osnovica *$brGodina*($godKamata/100)))/($brGodina*12);
   return $mesecnaRata;
}
 */// Ukoliko ime metode ostane mesecnaRataObicanKredit(), to znaci da izvedena klasa ObicanKredit poseduje i metodu:
//-mesecnaRata() koju je nasledilaiz osnovne klase Kredit,
//-mesecnaRataObicanKredit() koja je samo njena metoda.
// Resenje je da izvedena klasa ne nudi novu metodu nego da nudi VARIJANTE metode iz osnovne klase


// override - polimorfizam
public function mesecnaRata(){
   $osnovica = $this->getOsnovica();
   $brGodina = $this->getBrGod();
   $godKamata = $this->getGodKamata();

   $mesecnaRata = ($osnovica + ($osnovica *$brGodina*($godKamata/100)))/($brGodina*12);
   return $mesecnaRata;
   }



public function proba(){
   return "Proba za obican kredit";
}
}








 ?>

