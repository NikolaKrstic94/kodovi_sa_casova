<?php
require_once "sportista.php";

class Kosarkas extends Sportista {
   private $poeni;

//konstuktor
public function __construct($ime, $prezime, $godinaRodjenja, $gradRodjenja, $poeni){

parent::__construct($ime,$prezime,$godinaRodjenja,$gradRodjenja);

$this->setPoeni($poeni);
}
//seteri
public function setPoeni($poeni){
   $this->poeni = $poeni;
}
//geteri
public function getPoeni(){
   return $this->poeni;
}
//metod
public function ispisiKosarkasa(){
   $this->ispisiSportistu();
   foreach($this->poeni as $p){
      echo $p . ", ";
   }
}

public function prosekPoena(){
   $suma = 0;
   foreach($this->poeni as $p){
      $suma += $p;
   }
   return $suma / count($this->poeni);
   }
}

 ?>
