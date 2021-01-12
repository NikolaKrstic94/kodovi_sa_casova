<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Funkcije</title>
</head>
<body>
   <?php
      function mojaFunkcija() {
         echo "<p>Zdravo svete!</p>";
      }
      mojaFunkcija();
      function ispisiTekst($tekst){
      $promenljiva = ":)";
         echo "<p>Prosledili ste teskst: $tekst $promenljiva</p>";
      }
      function HorizontalnaLinija(){
         echo "<hr>";
      }
      ispisiTekst("CAOCAO");
      ispisiTekst("Zuri polako");
      
      $t = "Vuk dlaku menja ali cud nikada";
      ispisiTekst($t);
      HorizontalnaLinija();
      // Funkcija sa 2 prosledjena argumenta (parametra)
      function ispisiKorisnika($ime, $prezime){
         echo "<p>Ulogovani korisnik je <i>$ime $prezime</i></p>";
      }
      ispisiKorisnika("Nikola","Krstic");
      ispisiKorisnika("Stefan","Stanimirovic");

      HorizontalnaLinija();
      // Funkcija sa 3 prosledjena parametra
      function ispisiKorisnikaIGodine($ime, $prezime, $god){
         if ($god <0 || $god > 120 || $ime =="" || $prezime==""){
            echo "<p>Neispravno uneti podaci</p>";
         }
         else {
            echo "<p>Korisnik $ime $prezime ima $god godina </p>";
         }
      }
      ispisiKorisnikaIGodine("Jelena","Matejic", 26);

      HorizontalnaLinija();

      function zbir($br1, $br2){
         $z = $br1 + $br2;
         return  $z;
      }
      echo zbir(7, 3.5);
      HorizontalnaLinija();
      echo "Zbir brojeva je " .zbir(10, 15);


      // Zadatak: Izracunati zbir 3 broja koriscenjem funkcije zbir

      $b1 = 5;
      $b2 = 7;
      $b3 = 6;
      $zbirB1B2 = zbir($b1,$b2);
      $zbirB1B2B3 = zbir($zbirB1B2,$b3);
      echo "<p>$b1 + $b2 +$b3 = $zbirB1B2B3</p>";

      //2. nacin za zbir 3 broja koriscenje funkcije zbir
      $zbirB1B2B3 = zbir(zbir($b1, $b2),$b3);


      // zbir 5 brojeva
      /* 
         5
         6
         7
         8
         9
       */  

      /* Zadaci za vezbanje */
      /* Napisati funkciju neparan koja za uneti
      ceo broj n vraća tačno ukoliko je neparan
      ili netačno ukoliko nije neparan.
      Pozvati funkciju i testirati njen rad. */

      function isOdd($n){
         if($n % 2 != 0){
            return true;
         }
         else 
            return false;
      }
      echo isOdd(5);

      /*Napisati funkciju maks2 koja vraća veći
      od dva prosleđena realna broja. Zatim
      napisati funkciju maks4 koja vraća
      najveći od četiri realna broja.
      Pozvati funkcije i testirati njihov rad.  */
      HorizontalnaLinija();
      function maks2($n, $m){
         if($n > $m ){
            return $n;
         }
         else {
            return $m;
         }
      }
      echo maks2(7,4);

      HorizontalnaLinija();

      function maks4($n,$m,$j,$k){
         if(maks2($n,$m) > (maks2($j,$k))){
            return maks2($n,$m);
         }
         else {
            return maks2($j,$k);
         }
      }
      echo maks4(1,5,3,4);

      /* 3. Napisati funkciju slika kojoj se
      prosleđuje url adresa slike, a funkcija
      prikazuje sliku za prosleđenu adresu slike.
      Pozvati funkciju i testirati je za različite url
      adrese.*/
      HorizontalnaLinija();
      function prikaziSliku($urlSlike){
         echo "<img src='$urlSlike' style='width:200px'>";
      }
      prikaziSliku("https://grupovina.rs/upload/iblock/3fa/3fa18f2f05fd3d8d1389dd3872f32afb.jpg");

      /* 4.Napraviti funkciju obojenaRec kojoj se
      prosleđuje boja na engleskom jeziku i
      prosleđuje se proizvoljna reč. Prosleđenu
      reč ispisati u paragarfu bojom koja je
      prosleđena. Pozvati funkciju i testirati je. */
      HorizontalnaLinija();
      function obojenaRec($boja,$rec){
         echo "<p style='color:$boja'>$rec</p>";
      }
      obojenaRec("green","ZELENA");

      HorizontalnaLinija();
      /* Napraviti funkciju recenica1 koja pet
      puta ispisuje istu rečenicu u paragrafu, a
      veličina fonta rečenice treba da bude
      jednaka vrednosti iteratora (sami odredite
      startnu vrednost iteratora i za koliki korak
      ćete iterator povećavati). Testirati funkciju */
      function recenica1($recenica){
         for($i=0; $i <5; $i++){
            $k = ($i*2) *2 ;
            echo "<p style='font-size:$k"."px'>$recenica</p>";
         }
      }
      recenica1("Ovo je recenica");
      /* 6. Napraviti funkciju recenica2 kojoj se
      prosleđuje veličina fonta a ona u paragrafu
      ispisuje proizvoljnu rečenicu. Pozvati
      funkciju pet puta za različite prosleđene
      vrednosti. Testirati funkciju. */
      HorizontalnaLinija();
      function recenica2($fontSize){
         echo "<p style='font-size:$fontSize"."px'>Ovo je proizvoljna recenica iz 6. zadatka</p>";
      }
      recenica2(10);
      recenica2(15);
      recenica2(25);
      recenica2(30);
      
      HorizontalnaLinija();

      /* 7. Napraviti funkciju aritmeticka koja vraća
      aritmetičku sredinu brojeva od n do m.
      Brojeve n i m proslediti kao parametre
      funkciji. Testirati funkciju. */
      function aritmeticka($n, $m){
         $zbir = 0;
         $brojac = 0;
         for($i = $n; $i<=$m; $i++){
            $zbir+=$i;
            $brojac++;
         }
         return $zbir / $brojac;
      }
      echo "Aritmeticka sredina je " . aritmeticka(10,30); 


      /*8. Napisati funkciju aritmetickaCifre koja
      vraća aritmetičku sredinu brojeva kojima je
      poslednja cifra 3 u intervalu od n do m.
      Brojeve n i m proslediti kao parametre
      funkciji. Testirati funkciju. */
      HorizontalnaLinija();

      function aritmetickaCifre($n, $m){
         $zbir = 0;
         $brojac = 0;
         for($i=$n; $i <= $m; $i++){
            if($i % 10 == 3){
               $zbir += $i;
               $brojac++;
            }
         }
         return $zbir / $brojac;
      }
      echo aritmetickaCifre(10,50);

      /* 9. Dobili ste plaćenu programersku praksu u
      trajanju od n meseci. Prvog meseca, plata će biti
      a dinara. Ako budete vredno radili, svakog
      narednog meseca ćete dobiti povišicu od d
      dinara. Brojeve n, a i d određujete sami.
      Napišite funkciju praksa kojoj se prosleđuju
      brojevi n i a. Funkcija treba da vrati vrednost
      koliko ćete ukupno navca zaraditi, ukoliko
      svakog meseca budete dobijali povišicu.
      Testirati zadatak (pozvati funkciju i ispisati
      vrednost koju ona vraća). */
      HorizontalnaLinija();

      function racunanjePlate($meseci,$pocetna){
         $povisica = 3000;
         $ukupnoNovca = 0;
         for($i = 0; $i < $meseci; $i++){
            if($i == 0) {
            $ukupnoNovca = $ukupnoNovca + $pocetna;
            }
            else {
               $ukupnoNovca = $ukupnoNovca + ($pocetna+$povisica*$i);
            }
         }
         echo "<p>Ukupno novca koji ste zaradili za $meseci meseci sa pocetnom platom od $pocetna i povisicom od $povisica je $ukupnoNovca dinara</p>";
      }
      racunanjePlate(3,40000);

      /* 10. Napraviti niz celih brojeva.
      Ispisati sve neparne brojeve ovog niza
      koristeći funkciju neparan iz 1. zadatka.
      Pozvati funkciju i testirati je. */
      HorizontalnaLinija();
      $niz = [1,2,3,4,5];
      echo "<p>Neparni brojevi niza su: </p>";
      for($i=0; $i<count($niz); $i++){
         if(isOdd($i)){
           echo "<span style='color:red'>$i</span";
         }
      }

    ?>
</body>
</html>