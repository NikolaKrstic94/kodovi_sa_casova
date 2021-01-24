<?php

class Film{
   private $naslov;
   private $reziser;
   private $godinaIzdanja;
   private $ocene;

   // konstruktor 
   public function __construct($n, $r, $g, $o){
      $this->setNaslov($n);
      $this->setReziser($r);
      $this->setGodinaIzdanja($g);
      $this->setOcene($o);
   }

   // seteri
   public function setNaslov($n){
      $this->naslov = $n;
   }
   public function setReziser($r){
      $this->reziser = $r;
   }
   public function setGodinaIzdanja($g){
      $this->godinaIzdanja = $g;
   }
   public function setOcene($o){
      $this->ocene = $o;
   }

   // geteri
   public function getNaslov(){
      return $this->naslov;
   }
   public function getReziser(){
      return $this->reziser;
   }
   public function getGodinaIzdanja(){
      return $this->godinaIzdanja;
   }
   public function getOcene(){
      return $this->ocene;
   }

   // metode 
   public function stampaj(){
      echo "<ul>
         <li>{$this->getNaslov()}</li>
         <li>{$this->getReziser()}</li>
         <li>{$this->getGodinaIzdanja()}</li>
         <li>".implode(", ", $this->getOcene())."</li>
      </ul>";
   }
   public function prosek(){
      $sumaOcena = 0;
      foreach ($this->ocene as $ocena) {
         $sumaOcena += $ocena;
      }
      return $sumaOcena / count($this->ocene);
   }

}
 ?>