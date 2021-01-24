<?php
require_once "vozilo.php";

class Kamion extends Vozilo{
   private $nosivost;
   private $kategorija;

   //konstruktor
   public function __construct($tip, $boja,$nosivost,$kategorija){
      parent::__construct($tip, $boja);
      $this->setNosivost($nosivost);
      $this->setKategorija($kategorija);
   }
   //seteri
   public function setNosivost($nosivost){
      $this->nosivost = $nosivost;
   }
   public function setKategorija($kategorija){
      $this->kategorija = $kategorija;
   }
   //geteri
   public function getNosivost(){
      return $this->nosivost;
   }
   public function getKategorija(){
      return $this->kategorija;
   }
   // metode 

   public function ispisiKamion(){
      echo "<p>Kamion:</p>";
      echo "Boja: " . $this->getBoja();
      echo "<br>Tip: " . $this->getTip();
      echo "<br>Nosivost: " . $this->getNosivost();
      echo "<br>Kategorija: " . $this->getKategorija();
   }
}

 ?>