<?php
require_once "vozilo.php";

class Motocikl extends Vozilo {
   private $brojBrzina;
   private $kapacitetGoriva;

   // konstruktor
   public function __construct($tip, $boja, $brojBrzina, $kapacitetGoriva){
      parent::__construct($tip,$boja);
      $this->setBrojBrzina($brojBrzina);
      $this->setKapacitetGoriva($kapacitetGoriva);
   }
   // seteri
   public function setBrojBrzina($brojBrzina){
      $this->brojBrzina = $brojBrzina;
   }
   public function setKapacitetGoriva($kapacitetGoriva){
      $this->kapacitetGoriva = $kapacitetGoriva;
   }
   // geteri
   public function getBrojBrzina(){
      return $this->brojBrzina;
   }
   public function getKapacitetGoriva(){
      return $this->kapacitetGoriva;
   }
   // metode 
   public function ispisiMotocikl(){
      echo "<p>Motocikl:</p>";
      echo "Boja: " . $this->getBoja();
      echo "<br>Tip: " . $this->getTip();
      echo "<br>Broj brzina: " . $this->getBrojBrzina();
      echo "<br>Kapacitet goriva u L: " . $this->getKapacitetGoriva();
   }
}

 ?>