<?php

require_once "figura.php";
require_once "krug.php";
require_once "kvadrat.php";


function ispisiFiguru($unos, $niz) {

      foreach ($niz as $objekat) {
         if($unos == "Krug"){
            if (get_class($objekat) == "Krug") {
            $objekat->zovemSe();
          }
         }
         else {
            if (get_class($objekat) == "Kvadrat") {
            $objekat->zovemSe();
          }
         }

      }
   }


$k1 = new Krug();
$k2 = new Krug();
$k3 = new Krug();

$kv1 = new Kvadrat();
$kv2 = new Kvadrat();
$kv3 = new Kvadrat();
$kv4 = new Kvadrat();

$niz = array($k1,$k2,$k3,$kv1,$kv2,$kv3, $kv4);

// foreach($niz as $objekat){
//    if(get_class($objekat) == "Kvadrat"){
//       $objekat->zovemSe();
//    }
// }
ispisiFiguru("Kvadrat",$niz);


 ?>
