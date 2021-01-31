<?php

abstract class Kredit{
   private $godKamata; // realan broj zadat u procentima
   private $osnovica; // realan broj veci od nule
   private $brGod; // broj godina otplate kredita - ceo br veci od nule
   private $tip; // tip kredita - "string"
   private static $defaultBrGod;
   private static $podGodKamata;
   private static $brojKredita = 0;
   public const DEFAULT_OSNOVICA = 1000;

   //konstruktor
   public function __construct($godKamata, $osnovica, $brGod, $tip){
      $this->setGodKamata($godKamata);
      $this->setOsnovica($osnovica);
      $this->setBrGod($brGod);
      $this->setTip($tip);
      self::$brojKredita++;
      // echo "<p style='color:green'>Pozvan je konstruktor za klase kredit</p>";
   }

   //seteri
   public function setGodKamata($godKamata){
      if($godKamata < 1){
         $this->godKamata = self::$podGodKamata;
      }
      elseif($godKamata <=100){
         $this->godKamata = $godKamata;
      }
      else{
         $this->godKamata = self::$podGodKamata;
      }
   }
   public function setOsnovica($osnovica){
      if($osnovica > self::DEFAULT_OSNOVICA){
         $this->osnovica = $osnovica;
      }
      else{
         $this->osnovica = self::DEFAULT_OSNOVICA;
      }
   }
   public function setBrGod($brGod){
      if($brGod < 0){
         $this->brGod = 1;
      }
      else {
         $this->brGod = $brGod;
      }
   }
   public function setTip($tip){
      $this->tip = $tip;
   }
   public static function setDefaultBrGod($defaultBrGod){
      self::$defaultBrGod = $defaultBrGod;
   }
   public static function setPodGodKamata($podGodKamata){
      if($podGodKamata >= 20 && $podGodKamata <= 100){
         self::$podGodKamata = $podGodKamata;
      }
      else {
         self::$podGodKamata = 100;
      }
   }
   // geteri
   public function getGodKamata(){
      return $this->godKamata;
   }
   public function getOsnovica(){
      return $this->osnovica;
   }
   public function getBrGod(){
      return $this->brGod;
   }
   public function getTip(){
      return $this->tip;
   }
   public static function getDefaultBrGod(){
      return self::$defaultBrGod;
   }
   public static function getPodGodKamata(){
      return self::$podGodKamata;
   }

   public static function getBrojKredita(){
      return self::$brojKredita;
   }

   // destruktor
   public function __destruct()
   {
      self::$brojKredita--;
      // echo "<p style='color:red'>Pozvan je destruktor</p>";
   }
   //metode
   public function stampa(){
      echo "<ul>
               <li>{$this->getGodKamata()}% godisnja kamatna stopa</li>
               <li>Osnovica:{$this->getOsnovica()}</li>
               <li>Broj godina otplate:{$this->getBrGod()}</li>
               <li>Tip kredita:{$this->getTip()}</li>
               <li>Mesecna rata:{$this->mesecnaRata()}</li>
            </ul>";
   }

   public function brojKredita(){
      echo "Broj realizovanih kredita je:".self::$brojKredita;
   }
/*
   public function mesecnaRata(){
      $osnovica = $this->getOsnovica();
      $brGodina = $this->getBrGod();
      $godKamata = $this->getGodKamata();

      $mesecnaRata = ($osnovica + ($osnovica *$brGodina*($godKamata/100 *1.1)))/($brGodina*12);
      return $mesecnaRata;

   }
      Varijanta kada je osnovna klasa Kredit imala metodu mesecnaRata()
    */

    public abstract function mesecnaRata();

}

 ?>
