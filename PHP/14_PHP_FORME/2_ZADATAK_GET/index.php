<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP + Forme - 2. Zadatak</title>
</head>
<body>
   <form action="prikaz.php" method="GET">
      <p>
         <label for="">Ime i prezime:</label>
         <input type="text" name="imePrezime" id="">
      </p>
      <p>
         <label for="">Email:</label>
         <input type="email" name="email" id="">
      </p>
      <p>
         <label for="">Biografija:</label>
         <textarea name="bio" id="" cols="30" rows="10"></textarea>
      </p>
      <p>
         <label for="">Pol: </label>

         <input type="radio" name="pol" id="z" value="z">
         <label for="z">Zenski</label>
         <input type="radio" name="pol" id="m" value="m">
         <label for="m">Muski</label>
         <input type="radio" name="pol" id="d" value="d" checked>
         <label for="d">Drugo</label>
      </p>

      <p>
         <label for="">Znanje:</label>
         <input type="checkbox" name="znanje[]" value="html" id="html">
         <label for="html">HTML</label>
         <input type="checkbox" name="znanje[]" value="css" id="css">
         <label for="css">CSS</label>
         <input type="checkbox" name="znanje[]" value="js" id="js">
         <label for="js">JS</label>
         <input type="checkbox" name="znanje[]" value="php" id="php">
         <label for="php">PHP</label>
      </p>

      <p>
         <input type="submit" name="submit" value="Posalji">
         <input type="reset" name="reset" value="Resetuj">
      </p>
   </form>
</body>
</html>
