<?php

    class Film{

        private $naslov;
        private $reziser;
        private $godina;
        private $ocene = [];


         //KONSTRUKTOR
         public function __construct($n, $r, $g, $o){
            $this->setNaslov($n);
            $this->setReziser($r);
            $this->setGodina($g);
            $this->setOcene($o);
         }
        //SETERI
        public function setNaslov($n){
            $this->naslov = $n;
        }
        public function setReziser($r){
            $this->reziser = $r;
        }
        public function setGodina($g){
            if($g >= 1800){
                $this->godina = $g;
            } else {
                $this->godina = 1800;
            }            
        }
        public function setOcene($o){
           $this->ocene = $o;
        }

        //GETERI
        public function getNaslov(){
            return $this->naslov;
        }

        public function getReziser(){
            return $this->reziser;
        }

        public function getGodina(){
            return $this->godina;
        }
        public function getOcene(){
           return $this->ocene;
        }

        public function stampaj(){
            echo 
            "<table>
                <tr>
                    <td>Naslov filma:</td>
                    <td>$this->naslov</td>
                </tr>
                <tr>
                    <td>Reziser filma:</td>
                    <td>$this->reziser</td>
                </tr>
                <tr>
                    <td>Godina filma:</td>
                    <td>$this->godina</td>
                </tr>
                <tr>
                    <td>Ocene korisnika:</td>
                    <td>".implode(", ",$this->ocene)."</td>
                </tr>
            </table>
            <hr>
            ";
        }
        
        public function prosek(){
           $sumaOcena = 0;
           $brojacOcena = 0;
           foreach ($this->ocene as $ocena) {
              $sumaOcena += $ocena;
              $brojacOcena++;
           }
           return $sumaOcena / $brojacOcena;
        }
    }