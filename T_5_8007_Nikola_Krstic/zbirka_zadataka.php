<?php

require_once "knjiga.php";

class ZbirkaZadataka extends Knjiga {
   private $brojZadataka;

   //konstruktor
   public function __construct($naslov, $autori, $brojStrana, $cena,$brojZadataka){
      parent::__construct($naslov, $autori, $brojStrana, $cena);
      $this->setBrojZadataka($brojZadataka);
   }
   //seteri
   public function setBrojZadataka($brojZadataka){
      if($brojZadataka < 0){
         $this->brojZadataka = 0;
      }
      else {
         $this->brojZadataka = $brojZadataka;
      }
   }
   //geteri
   public function getBrojZadataka(){
      return $this->brojZadataka;
   }
   //metode
   public function stampa(){
      parent::stampa();
      echo "<li>Broj zadataka:{$this->getBrojZadataka()}</li>
      </ul>";
   }




   public function skupa(){
     $cenaStrane = $this->getCena() / $this->getBrojStrana();
     if(($this->getBrojZadataka() / count($this->getAutori()) > $cenaStrane )){
        return true;
     }
     else {
        return false;
     };
   }
}





 ?>
