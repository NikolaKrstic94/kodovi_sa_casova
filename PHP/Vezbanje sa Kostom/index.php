<!-- <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Vezbanje</title>
</head>
<body>

   <?php
   
   /* Množiti sve brojeve od 20 ka 1, sve dok proizvod ne predje 10.000. Prikazati konacan rezultat crvenom bojom a poslednje pomnozeni broj - zelenom. */


   $i = 20;
   $proizvod = 1;
   while($i>=1){
      $proizvod*=$i;
      if($proizvod>10000){
         break;
      }
      $i--;
   }
   echo $proizvod/$i;

   echo "<hr>";

   // Uneti 2 broja. Ukoliko je prvi broj manji od drugog broja, množiti prvi broj samim sobom, sve dok rezultat ne bude veći od drugog unetog broja. U suprotnom na ekranu ispisati “GREŠKA”.
   
   $n = 2;
   $m = 200;
   while($n<$m){
      echo "$n ";
      $n = $n * $n; // $n = 2*2;  $n = 4*4 ; $n = 16*16
   }

   echo "<hr>";

   // Prikazati brojeve od 30 do 100, ali preskociti sve one cija je poslednja cifra deljiva sa 3 ili deljiva sa 5, ili je zbir cifara u broju deljiv sa 4
   // 123
   
   $n = 130;
   $m = 150;
   $suma = 0;
   while($n <= $m){
      $i = $n;
      while($i / 10 > 0)
         {
               $zadnjibr = $i % 10;
               $suma = $suma + $zadnjibr;
               $i = floor($i/10);
         }
      if(($n % 10)%3==0 || ($n % 10)%5==0 || $suma % 4 == 0){
         echo "$n ";
      }
      $suma = 0;
      $n++;
   }

   echo "<hr>";

   
      /* Za unete cele brojeve a, b ispisati brojeve iz intervala [a, b], od kojih je prvi broj koji se ispisuje jednak broju a, dok je svaki sledeći tri puta veći od prethog broja. 
      Na primer za  [a, b] = [5, 50] treba ispisati 5, 15, 45. */

      $a = 5;
      $b = 50;
      while($a<$b){
         echo "$a ";
         $a *= 3;
      }

      // Odrediti ceo deo i ostatak pri deljenju celih brojeva a i b, bez korišćenja operacija / i %.
      echo "<hr>";
      // 20 / 3 = 6(2)
      $a = 8;
      $b = 3;
      $suma = $b;
      $brojac = 0;
      while($suma < $a){
         $suma += $b;
         $brojac++;
      }
      echo "<p>$brojac</p>";
      echo $a - ($suma - $b);
      
      echo "<hr>";

      // nizovi
      $niz = [];
      for($i = 0; $i<5; $i++){
         $niz[$i] = $i;
      }
      echo implode(" ", $niz);

      echo "<hr>";
      
      $suma = 0;
      $brojac = 0;
      for($i = 0; $i<count($niz); $i++){
         $suma+=$niz[$i];
         $brojac++;
      }
      echo $suma / $brojac;

// Napisati program kojim se pronalazi broj nula u unetom nizu brojeva.
      echo "<hr>";
      $niz = [1,2,1,0,3,0,5,0];
      $brojacNula = 0;

      for($i = 0; $i<count($niz); $i++){
         if($niz[$i] == 0){
            $brojacNula++;
         }
      }
      echo "<p>$brojacNula</p>";

/* Kreira se niz od N članova i unosi broj X. Treba ispisati indekse onih članova niza koji su jednaki broju X.
 */
      echo "<hr>";
      $x = 1;
      for($i = 0; $i < count($niz); $i++){
         if($niz[$i] == $x){
            echo "<p>$i</p>";
         }
      }

// 1,2,3,4,1,1    - niz a

// 1,1,1,0,1,0     - niz b

/* Za unete nizove A od N i B od M celih brojeva, treba ispisati M elemenata niza A onim redosledom kako je navedeno u nizu B. Podrazumeva se da ni jedan elemenat niza B nije veći od N.
 */
$nizA = [23,52,38,44];
$nizB = [3,1,1,2];
for($i=0;$i<count($nizB); $i++){
   $key = $nizB[$i] - 1;
   echo "$nizA[$key] ";
}

$noviNiz[$i] = $i;
?>

</body>
</html> -->