<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ARRAYS</title>
</head>
<body>
   <?php
   // zad 1
   $polaznici = array();
   $polaznici[] = "Marko";
   $polaznici[] = "Marija";
   $polaznici[] = "Ivana";
   $polaznici[] = "Goran";
   $polaznici[] = "Vladan";

   $duzina = count($polaznici);
   echo "1.) Svi clanovi niza su: ";
   for($i = 0; $i < $duzina; $i++){
     echo " $polaznici[$i]";
   }

   echo "<br>";echo "<br>"; 
   // zad 2) Odrediti zbir elemenata celobrojnog niza.
   $nizbrojeva = array(1,2,6,4,5);
   $zbir = 0;
   $duzinaNiza = count($nizbrojeva);
   for($i = 0; $i < $duzinaNiza; $i ++)
   {
      $zbir += $nizbrojeva[$i];
   }
   echo " 2.) Zbir brojeva niza je $zbir";

   echo "<br>";echo "<br>"; 
   // zad 3) Odrediti srednju vrednost elemenata celobrojnog niza.
   $srednjaVrednost = $zbir / $duzinaNiza;
   echo "3.) Srednja vrednost ovog celobrojnog niza je $srednjaVrednost";

   echo "<br>";echo "<br>"; 
   // Odrediti maksimalnu vrednost u celobrojnom nizu
   $maksimum = $nizbrojeva[0];
   for($i = 1; $i < $duzinaNiza; $i++)
   {  
      if($nizbrojeva[$i] > $maksimum)
      {
         $maksimum = $nizbrojeva[$i];
      }
   }
      echo "4.) Najveci element niza je $maksimum";


   echo "<br>";echo "<br>";
   // zad 6) Odrediti indeks najvećeg elementa celobrojnog niza.
   $niz1 = array(1,25,3,15,28,-5,5,10,0);
   $najveciElement = $niz1[0];
   for($i = 1; $i < count($niz1); $i++){
      if($niz1[$i] > $najveciElement){
         $najveciElement = $niz1[$i];
      }
   }
      for($i = 1; $i < count($niz1); $i++){
      if($niz1[$i] == $najveciElement){
         echo "Indeks najveceg elementa je $i";
      }
   }

   //

   $index = 0;
   for($i = 1; $i < count($niz1); $i++) {
      if($niz1[$i] > $niz1[$index]){
         $index = $i;
      }
   }
   $maks = $niz1[$index];
   echo"<p>Indeks maksmialnog elementa niza jednak je $index, a vrednost je $maks</p>";



   echo "<br>";echo "<br>";
   // zad 7) Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti.
   $zbir1 = 0;
   $brojElemenataVecih = 0;
   for($i = 0; $i < count($niz1); $i++){
      $zbir1 += $niz1[$i];
   }
   $srednjaVrednost = $zbir1 / count($niz1);
   for($i = 0; $i < count($niz1); $i++){
      if($niz1[$i] > $srednjaVrednost){
         echo "$niz1[$i] ";
         $brojElemenataVecih++;
      }
   }
   echo "7.) Broj elemenata koji su veci od srednje vrednosti niza je: $brojElemenataVecih";

   echo "<br>";echo "<br>";
   // zad 8) Izračunati zbir pozitivnih elemenata celobrojnog niza.
   $zbir = 0;
   for($i = 0; $i < count($niz1); $i++){
      if($niz1[$i] > 0){
         $zbir += $niz1[$i];
      }
   }
   echo "8.) Zbir pozitivnih elemenata celobrojnog niza je: $zbir";

   echo "<br>";echo "<br>";
   // zad 9) Odrediti broj parnih elemenata u celobrojnom nizu.
   $brojParnihElemenata = 0;
   for($i = 0; $i < count($niz1); $i++){
      if($niz1[$i] % 2 == 0){
         $brojParnihElemenata++;
      }
   }
   echo "9.) Broj parnih elemenata u celobrojnom nizu je: $brojParnihElemenata";

   echo "<br>";echo "<br>";
   // zad 10) Izračunati sumu elemenata u nizu sa parnim indeksom..
   $sumaElemenata = 0;
   for($i = 0; $i < count($niz1); $i++){
      if($i % 2 == 0){
         $sumaElemenata += $niz1[$i];
      }
   }
   echo "10.) Suma elemenata parnih indeksa je: $sumaElemenata";
      echo "<br>";echo "<br>";
   // zad 11) Promeniti znak svakom elementu celobrojnog niza.
   var_dump($niz1);
   echo "<p>11.) Okrenuti niz je:</p>";
   for($i = 0; $i < count($niz1); $i++) {
         $niz1[$i] = -($niz1[$i]);         
   }
   for($i = 0; $i < count($niz1); $i++){
      echo " $niz1[$i]";
   }

      echo "<br>";echo "<br>";
   // zad 12) Promeniti znak svakom neparnom elementu celobrojnog niza sa parnim indeksom.

   for($i = 0; $i < count($niz1); $i +=2){
      if($niz1[$i] % 2 != 0){
         $niz1[$i] = $niz1[$i] - $niz1[$i] * 2;         
      }
   }
   echo "12.) Promenjen znak svakom neparnom elementu celobrojnog niza sa parnim indeksom:";
   for($i = 0; $i < count($niz1); $i++){
      echo " $niz1[$i]";
   }


      echo "<br>";echo "<br>";
   // zad 13) Odrediti broj parnih elemenata sa neparnim indeksom.
   $brojParNeparInd = 0;
   for($i = 1; $i < count($niz1); $i+=2){
      if($niz1[$i] % 2 == 1) {
         $brojParNeparInd++;
      }
   }
   echo "13.) Broj parnih elemenata sa neparnim indeksom je: $brojParNeparInd";


      echo "<br>";echo "<br>";
   // zad 14) Ispisati dužinu svakog elementa u nizu stringova.
   $nizStr = array("Stefan","Jelena", "Nikola", "Dusan");
   $duzinaJednog = strlen($nizStr[0]);
   // mesto za vezbu od 14. do 17.



   $brojSadrziA = 0; 
   // zad 17
   for ($i = 0; $i < count($nizStr); $i++) {
      $ime = $nizStr[$i];
      if(strpos($ime, "a") !== false){
         $brojSadrziA++;
      }
   }
   echo "17.) Broj imena koji sadrzi slovo 'a' je: $brojSadrziA";
   echo "<br>";echo "<br>";
//18) Odrediti broj elemenata u nizu stringova
// koji počinju na slovo 'a' ili 'A'.
   $brPocinjuA = 0;
   for($I = 0; $i < count($nizStr); $i ++){
      $ime = $imena[$i];
      if(strpos($ime, "a") || strpos("ime", "A")){
         $brPocinjuA++;
      }
   }
   echo "<p>Broj imena koji pocinju na slovo 'A' ili </p>";

echo "<br>";echo "<br>";
// 19. Na osnovu celobrojnog niza $a[0], $a[1], ... formirati niz $b[0], $b[1], ... koji sadrži samo pozitivne brojeve.
$a = array(-2,-1,0,1,2,-3,5,-8,8);
$brPozitivnih = 0;
$b = array();
for($i = 0; $i < count($a); $i++) {
   if($a[$i] > 0) {
      $b[$brPozitivnih] = $a[$i]; 
      $brPozitivnih++;
   }
}
   echo "Niz b koji sadrzi samo sve celobronjne elemente je " . implode(" ,",$a);
   echo "<br>";
   echo "Niz b koji sadrzi samo pozitivne elemente je " . implode(" ,",$b);
echo "<br>";echo "<br>";

echo "<br>";echo "<br>";

// 20.)
   $nizA =  array(1,3,5);
   $nizB = array(0,2,4);
   $nizC = array();
   echo count($nizB);
   echo "<br>";echo "<br>";
   for($i = 0,$l = 1; $i < (count($nizA) + count($nizB)),$l < (count($nizA) + count($nizB)); $i+=2,$l+=2){
      
      if($i == 0 && $l == 1) {
         $nizC[$i] = $nizB[$i];
         $nizC[$l] = $nizA[$i];
      }
      if($i < count($nizB) && $l < count($nizA)) {
         $nizC[$i] = $nizB[$i-1];
         $nizC[$l] = $nizA[$l-1];
      }
   }
   implode(" ,", $nizC);



// $a = array(-5, 10, 15, 20, 25);
//     $b = array(6, 11, 16, 21, 26);
//     $c = array();
//     $n = 3;
//     $broj = 0;
//     for ($i = 0; $i < count($a); $i+=2)
//     {
//         if($a[$i] > 0 )
//         {
//             $c[($n - $broj++)] = $a[$i];
//         }
//     }
//     for ($i = 1; $i < count($a); $i+=2)
//     {
//         if($b[$i] > 0 )
//         {
//             $c[($n - $broj++)] = $b[$i];
//         }
//     }
//     echo "<p>";
//     echo implode(" ,", $c);
//     echo "</p>";























    ?>
</body>
</html>