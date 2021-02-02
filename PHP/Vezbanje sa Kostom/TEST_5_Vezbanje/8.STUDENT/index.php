<?php

require_once "student.php";


// pomocne funkcije

function najbolji($nizStudenta){

   $trenutniNajbolji = $nizStudenta[0];

   foreach($nizStudenta as $student){
      if($student->getProsecnaOcena() > $trenutniNajbolji->getProsecnaOcena()){
         $trenutniNajbolji = $student;
      }
   }
   return $trenutniNajbolji;
}
// funkcije


function imePrezime($ime, $prezime, $nizStudenta){

   $brojStudenataIstoIme = 0;

   foreach($nizStudenta as $student){
      if($ime == $student->getIme() && $prezime == $student->getPrezime()){
         $brojStudenataIstoIme++;
      }
   }
   echo "Broj studenata sa imenom '$ime' i prezimenom '$prezime' je: $brojStudenataIstoIme";
}



function srednjaOcena($nizStudenta){
   $sumaSvihOcena = 0;
   $brojacStudenata = 0;
   foreach($nizStudenta as $student){
      $sumaSvihOcena += $student->getProsecnaOcena();
      $brojacStudenata++;
   }
   // echo "Prosecna ocena svih studenata je: " .$sumaSvihOcena/$brojacStudenata;
   return $sumaSvihOcena / $brojacStudenata;
}

function osrednji($nizStudenta){
   $srednjaOcena = srednjaOcena($nizStudenta);
   $osrednji = $nizStudenta[0];
   $trenutnaNajbliza = abs($nizStudenta[0]->getProsecnaOcena() - $srednjaOcena);
   foreach($nizStudenta as $student){
      if(abs($student->getProsecnaOcena() - $srednjaOcena) < $trenutnaNajbliza ){
         $trenutnaNajbliza = abs($student->getProsecnaOcena() - $srednjaOcena);
         $osrednji = $student;
      }
   }
   echo "Student koji je najblizi proseku svih ocena je:";$osrednji->ispis();
}

function najmanjaOcenaNajboljeg($nizStudenta){

   $najbolji = najbolji($nizStudenta);
   $najgoraOcena = $najbolji->getNizOcena()[0];

   foreach($najbolji->getNizOcena() as $ocena){
      if($ocena < $najgoraOcena){
         $najgoraOcena = $ocena;
      }
   }
   echo "Najmanja ocena najboljeg studenta je: $najgoraOcena";
   $najbolji->ispis();
}

function najmanjaOcena($nizStudenta){

   $trenutnaNajmanja = $nizStudenta[0]->getNizOcena()[0];

   foreach($nizStudenta as $student){
      foreach($student->getNizOcena() as $ocena){
         if($ocena < $trenutnaNajmanja){
            $trenutnaNajmanja = $ocena;
         }
      }
   }
   return $trenutnaNajmanja;
}

function najcescaOcena($nizStudenta){

   $brojacSest = 0;
   $brojacSedam = 0;
   $brojacOsam = 0;
   $brojacDevet = 0;
   $brojacDeset = 0;

   foreach($nizStudenta as $student){
      foreach($student->getNizOcena() as $ocena){
         if($ocena == 6){
            $brojacSest++;
         }
         elseif($ocena == 7){
            $brojacSedam++;
         }
         elseif($ocena == 8){
            $brojacOsam++;
         }
         elseif($ocena == 9){
            $brojacDevet++;
         }
         else{
            $brojacDeset++;
         }
      }
   }

   $nizBrojaca = array($brojacSest, $brojacSedam, $brojacOsam, $brojacDevet, $brojacDeset);
   $trenutniNajcesciBrojac = $nizBrojaca[0];

   foreach($nizBrojaca as $brojacCifre){
      if($brojacCifre > $trenutniNajcesciBrojac){
         $trenutniNajcesciBrojac = $brojacCifre;
      }
   }


   for($i=0; $i<count($nizBrojaca); $i++){
      if($trenutniNajcesciBrojac == $nizBrojaca[$i]){
         if($i == 0){
            echo "Najcesca ocena je 6";
         }
         elseif($i == 1){
            echo "Najcesca ocena je 7";

         }
         elseif($i == 2){
            echo "Najcesca ocena je 8";
         }
         elseif($i == 3){
            echo "Najcesca ocena je 9";
         }
         elseif($i == 4){
            echo "Najcesca ocena je 10";
         }
      }
   }
}

function rodjeniGodine($godina, $nizStudenta){
   $novaGodina = substr($godina, 1, 3);
   foreach($nizStudenta as $student){
      if(strpos($student->getJmbg(), $novaGodina) !== false){
         echo $student->ispis();
      }
   }
}




$student1 = new Student("0806994523651", "Nikola", "Krstic", [8,8,8,8,8]);
$student2 = new Student("1147994888888", "Milan", "Mikic",[8,8,8,8,8]);
$student3 = new Student("0504990255874", "Marko", "Markovic", [7,7,7,7,7]);
$student4 = new Student("1412993000000", "Djole", "Djokovic", [7,7,7,7,7]);

$nizStudenta = array ($student1, $student2, $student3, $student4);

foreach($nizStudenta as $student) {
   $student->ispis();
}
echo "<hr>";

   imePrezime("Nikola", "Krstic", $nizStudenta);

echo "<hr>";

   echo   number_format(srednjaOcena($nizStudenta),2);

echo "<hr>";

   osrednji($nizStudenta);

echo "<hr>";

   najmanjaOcenaNajboljeg($nizStudenta);

echo "<hr>";

   echo "Najmanja ocena svih studenata je: ". najmanjaOcena($nizStudenta);

echo "<hr>";

   najcescaOcena($nizStudenta);

echo "<hr>";

   rodjeniGodine("1994",$nizStudenta);














/* $nizOcena = array(6.3,10.5,7.1,9.13);
foreach($nizOcena as $ocena){
   if($ocena < 6){
      $this->ocena = 6;
   }
   elseif($ocena >= 6 && $ocena < 7){
      $this->ocena = 6;
   }
   elseif($ocena >= 7 && $ocena < 8){
      $this->ocena = 8;
   }
   elseif($ocena >= 8 && $ocena < 9){
      $this->ocena = 9;
   }
   elseif($ocena >= 9 && $ocena < 10){
      $this->ocena = 9;
   }
   else{
      $this->ocena = 10;
   }
} */




 ?>
