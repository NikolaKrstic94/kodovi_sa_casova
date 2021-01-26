<?php

class Kredit{
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
      echo "<p style='color:green'>Pozvan je konstruktor za klase kredit</p>";
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
      echo "<p style='color:red'>Pozvan je destruktor</p>";
   }
   //metode
   public function stampa(){
      echo "<ul>
               <li>{$this->getGodKamata()}% godisnja kamatna stopa</li>
               <li>Osnovica:{$this->getOsnovica()}</li>
               <li>Broj godina otplate:{$this->getBrGod()}</li>
               <li>Tip kredita:{$this->getTip()}</li>
            </ul>";
   }

   public function brojKredita(){
      echo "Broj realizovanih kredita je:".self::$brojKredita;
   }

}






 ?>
<!--


Worthy story!


Willpower is often not everything you need.This is a story which helped 273 people with enough willpower and not enough financial resources, live prosperous lives in not so prosperous Serbia.
Project IT Bootcamp provides knowledge free of charge and gives individuals power to change their life perspective.Join the project which uses knowledge as its only tool for providing opportunities.

I've put 3 years of my life, all my means and competencies into the IT Bootcamp project. 273 times I felt tremendous joy, 273 times I felt I had changed the world for the better.

You can feel the same way by contributing to our cause.Donations do keep the project alive. Worthy things should stay alive, right?


Everyone says all you need is willpower.I think that's only partially true! There are countless people with great potential and willingness to change their lives  and yet they still don't. Be it because of the financial reasons, fear, or something else, they need a hand. That's why we are here. Project IT Bootcamp gives guidance, help and knowledge, free of charge to precisely those people. 273 individuals already succeded in reshaping their lives and they were promptly given career choices they could only dream of before enrolling at IT Bootcamp.
To continue changing lives, we need your donations. Help us help people. Together we can make dreams come true, one life at a time.
Thank you from the bottom of my heart.







 -->
