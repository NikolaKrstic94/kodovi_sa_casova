<?php
require_once "knjiga.php";

class Udzbenik extends Knjiga{

   private $tiraz;

   //konstruktor
   public function __construct($naslov, $autori, $brojStrana, $cena, $tiraz){
      parent::__construct($naslov, $autori, $brojStrana, $cena);
      $this->setTiraz($tiraz);
   }
   //seteri
   public function setTiraz($tiraz){
      if($tiraz < 0){
         $this->tiraz = 0;
      }
      else {
         $this->tiraz = $tiraz;
      }
   }
   //geteri
   public function getTiraz(){
      return $this->tiraz;
   }
   //metode
   public function stampa(){
      parent::stampa();
      echo "<li>Tiraz:{$this->getTiraz()}</li>
      </ul>";
   }
   public function skupa(){
      $odnos = $this->getCena() / $this->getTiraz();
      if($odnos > 200){
         return true;
      }
      else {
         return false;
      }
   }
}



 ?>
