<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pacijent</title>
</head>
<body>
   <?php
      class Pacijent{
         private $ime;
         private $visina;
         private $tezina;
         // KONSTRUKTOR - automatski postavlja parametre
         public function __construct($i, $v, $t){
            $this->setIme($i);
            $this->setVisina($v);
            $this->setTezina($t);
         }
         //SETERI - SET METODE
         public function setIme($i){
            $this->ime = $i;
         }
         public function setVisina($v){
            if($v > 0 && $v < 250){
               $this->visina = $v;
            }
            else {
               echo "Visina mora biti izmedju 0 cm i 250cm";
               $this->visina = 100;
            }
         }
         public function setTezina($t){
            if($t > 0 && $t < 450){
               $this->tezina = $t;
            }
            else {
               echo "Neispravno uneta tezina";
            }
         }
         public function getIme(){
            return $this->ime;
         }
         public function getVisina(){
            return $this->visina;
         }
         public function getTezina(){
            return $this->tezina;
         }

         public function stampaj(){
            echo "<p>$this->ime je visok/a $this->visina i tezak/ka $this->tezina kg.</p>";
         }

         public function bmi(){
            return ($this->tezina / pow($this->visina/100,2));
         }

         public function kritican(){
            if($this->bmi() < 15 || $this->bmi() > 40){
               return true;
            }
            else {
               return false;
            }
         }
      }
      /* $pac1 = new Pacijent();
      $pac1->ime = "Jelena";
      $pac1->visina = 1.73;
      $pac1->tezina = 67;

      $pac1->stampaj();
      echo "BMI pacijenta je " . $pac1->bmi();
      if($pac1->kritican()){
         echo "<p>Pacijent ima kritican BMI</p>";
      }
      else{
         echo "<p>Osoba nema kritican bmi</p>";
      } */
      // $pac2 = new Pacijent(); // javlja gresku undefined varuiable jer je privatno polje i moze mu se pristupiti samo unutar klase
      // $pac2->stampaj(); // ne javlja jer je metoda javna i javnim poljima i metodama se moze pristupiti u klasi i izvan nje  
      // $pac2->setIme("Ana");
      // $pac2->setVisina(150);
      // $pac2->setTezina(80);
      // $pac2->stampaj();
      // echo "Ime pac2 pacijenta je: " .$pac2->getIme();
      $pac = new Pacijent();
    ?>
</body>
</html>