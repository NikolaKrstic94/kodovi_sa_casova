<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>OBJEKTNO</title>
</head>
<body>
   <!-- Klase -->
   <?php
      class Auto{
         //polja
         private $marka;
         private $boja;
         private $imaKrov;
         //metodi
         public function __construct($m, $b, $k){
            $this->setMarka($m);
            $this->setBoja($b);
            $this->setImaKrov($k);
         }
         public function getMarka(){
            return $this->marka;
         }
         public function getBoja(){
            return $this->boja;
         }
         public function getImaKrov(){
            return $this->imaKrov;
         }
         public function setMarka($m){
            $this->marka = $m;
         }
         public function setBoja($b){
            $this->boja = $b;
         }
         public function setImaKrov($k){
            $this->imaKrov = $k;
         }
         function sviraj(){
            echo  "$this->marka beep!";
         }
      }
      $auto1 = new Auto("Merdza","plava", false);
      echo "{$auto1->getBoja()} je {$auto1->getMarka()}";

      echo "<br>";









      // kreirati klasu film
      class Film{
         private $naslov;
         private $reziser;
         private $godinaIzdanja;
         
         public function __construct($n, $r, $g)
         {
            $this->setNaslov($n);            
            $this->setReziser($r);            
            $this->setGodinaIzdanja($g);            
         }

         public function setNaslov($n){
            $this->naslov = $n;
         } 
         public function setReziser($r){
            $this->reziser = $r;
         }
         public function setGodinaIzdanja($g){
            if($g >= 1800){
            $this->godinaIzdanja = $g;
            }
            else {
               $this->godinaIzdanja = 1800;
            }
         }
         public function getNaslov(){
            return $this->naslov;
         }
         public function getReziser(){
            return $this->reziser;
         }
         public function getGodinaIzdanja(){
            return $this->godinaIzdanja;
         }
         function ispisiFilm(){
            echo "Naslov filma je $this->naslov,reziser je $this->reziser, a godina izdanja je $this->godinaIzdanja ";
         }
      }

      $film1 =  new Film("Inception", "Nepoznati reziser", 1995);
      echo "<p>Film: {$film1->getNaslov()} ciji je reziser       {$film1->getReziser()} je snimljen {$film1->getGodinaIzdanja()}</p>"
    ?>
</body>
</html>