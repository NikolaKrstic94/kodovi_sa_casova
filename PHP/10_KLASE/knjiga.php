<?php

class Knjiga{
    private $naslov;
    private $autor;
    private $godIzdanja;
    private $brojStrana;
    private $cena;

    // Konstruktor
    public function __construct($n, $a, $g, $b, $c)
    {
       $this->setNaslov($n);
       $this->setAutor($a);
       $this->setGodIzdanja($g);
       $this->setBrojStrana($b);
       $this->setCena($c);
    }

    // Seteri
    public function setNaslov($n){
       $this->naslov = $n;
    }
    public function setAutor($a){
       $this->autor = $a;
    }
    public function setGodIzdanja($g){
       $this->godIzdanja = $g;
    }
    public function setBrojStrana($b){
       $this->brojStrana = $b;
    }
    public function setCena($c){
       $this->cena = $c;
    }

    // Geteri
    public function getNaslov(){
       return $this->naslov;
    }
    public function getAutor(){
       return $this->autor;
    }
    public function getGodIzdanja(){
       return $this->godIzdanja;
    }
    public function getBrojStrana(){
       return $this->brojStrana;
    }
    public function getCena(){
       return $this->cena;
    }

    // Metode
    function stampaj(){
       echo 
       "<ul>
       <li>Naslov:'{$this->getNaslov()}'</li>
       <li>Autor:{$this->getAutor()}</li>
       <li>Izdata:{$this->getGodIzdanja()} godine</li>
       <li>Broj strana:{$this->getBrojStrana()}</li>
       <li>Cena:{$this->getCena()} RSD</li>
       </ul>";
    }
 
    function obimna(){
       $brStr = $this->getBrojStrana();
       if($brStr > 600){
          return true;
       }
       else {
          return false;
       }
    }
 
    function skupa(){
       $cena = $this->getCena();
       if($cena > 8000){
          return true;
       }
       else {
          return false;
       }
    }
 
    function dugackoIme(){
       $imeAutora = $this->getAutor();
       $duzinaImena = strlen($imeAutora);
       if($duzinaImena > 18){
          return true;
       }
       else {
          return false;
       }
    }
 }


 $k1 = new Knjiga("Naslov 1", "Autor1", 1900, 100, 8500);
 $k2 = new Knjiga("Naslov 2", "Autor1", 1905, 650, 9500);
 $k3 = new Knjiga("Naslov 3", "AutorAutorAutorAutor2", 2009, 300, 800);
 $k4 = new Knjiga("Naslov 4", "AutorAutorAutorAutor2", 2015, 350, 1000);
 $k5 = new Knjiga("Naslov 5", "Autor3", 2020, 2700 , 9500);

 $knjige = array($k1, $k2, $k3, $k4, $k5);
 foreach ($knjige as $k) {
    if($k->dugackoIme()){
       echo "<p>{$k->getAutor()}</p>";
    }
 }
 echo "<hr>";

foreach ($knjige as $k) {
   if($k->skupa() && $k->obimna()){
      $k->stampaj();
   }
}

function ukupnaCena($knjige){
   $sumaCenaKnjiga=0;
   foreach ($knjige as $k) {
      $sumaCenaKnjiga += $k->getCena();
   }
   return $sumaCenaKnjiga;
}
echo "Ukupna cena svih knjiga je:".ukupnaCena($knjige);
echo "<hr>";

echo "<p>prosecnaCena - Kolika je prosecna cena jedne knjige</p>";
function prosecnaCena($niz){
   $ukupna = ukupnaCena($niz);
   $br = count($niz);
   return $ukupna / $br;
   }
   echo "Prosecna cena knjiga je " . prosecnaCena(array($k1, $k3, $k5));
echo "<hr>";


function prosecnaStranica($knjige){
   $ukupnaCena = ukupnaCena($knjige);
   $ukupnoStranica = 0;
   foreach ($knjige as $k ) {
      $ukupnoStranica += $k->getBrojStrana();
   }
   return  $ukupnaCena / $ukupnoStranica;
}

function prosecnaStranicaZaKnjigu($knjige){
   $ukupnaCenaJedneStraniceSvihKnjiga = 0;
   foreach ($knjige as $k ) {
      $cenaJedneStranice = $k->getCena() / $k->getBrojStrana();
      $ukupnaCenaJedneStraniceSvihKnjiga += $cenaJedneStranice;
      echo "<p>jedna stranica knjige ".$k->getNaslov()." kosta $cenaJedneStranice rsd </p>";
   }
   echo "Cena svih pojedinacnih stranica je $ukupnaCenaJedneStraniceSvihKnjiga";
}
echo "Jedna stranica kosta u proseku ".prosecnaStranica($knjige)." rsd";

echo "<hr>";

prosecnaStranicaZaKnjigu($knjige);
?>