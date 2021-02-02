<?php

abstract class Knjiga{

   private $naslov;
   private $autori;
   private $brojStrana;
   private $cena;

   //konstruktor
   public function __construct($naslov, $autori, $brojStrana,$cena){
      $this->setNaslov($naslov);
      $this->setAutori($autori);
      $this->setBrojStrana($brojStrana);
      $this->setCena($cena);
   }

   //seteri
   public function setNaslov($naslov){
      $stringNaslov = strval($naslov);
      if(empty($stringNaslov)){
         $this->naslov = "K";
      }
      else {
         $this->naslov = $naslov;
      }
   }
   public function setAutori($autori){
      $this->autori = $autori;
   }
   public function setBrojStrana($brojStrana){
      if($brojStrana < 0){
         $this->brojStrana = 0;
      }
      else {
         $this->brojStrana = $brojStrana;
      }
   }
   public function setCena($cena){
      if($cena < 0){
         $this->cena = 0;
      }
      else {
         $this->cena = $cena;
      }
   }
   //geteri
   public function getNaslov(){
      return $this->naslov;
   }
   public function getAutori(){
      return $this->autori;
   }
   public function getBrojStrana(){
      return $this->brojStrana;
   }
   public function getCena(){
      return $this->cena;
   }
   //metode
   public function stampa(){
      echo "<ul>
            <li>Naslov:{$this->getNaslov()}</li>
            <li>Autori:".implode(', ',$this->getAutori())."</li>
            <li>Broj strana:{$this->getBrojStrana()}</li>
            <li>Cena:{$this->getCena()}</li>";
   }

   public abstract function skupa();

}




 ?>
