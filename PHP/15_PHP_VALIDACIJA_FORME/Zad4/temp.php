   <form action="<?php
   if($prikazi){
      echo "prikaz.php";
   }
   ?>" method="POST">
      <p>
         <label for="">Ime i prezime: </label>
         <input type="text" name="imePrezime" value="<?php echo $ime ?>" id="">
         <span class="error">* <?php echo $imeErr; ?></span>
      </p>
      <p>
         <label for="">Email: </label>
         <input type="email" name="email" value="<?php echo $email?>" id="">
         <span class="error">* <?php echo $emailErr; ?></span>
      </p>
      <p>
         <label for="">Biografija: </label>
         <textarea name="bio" id="" cols="30" rows="10"><?php echo $bio ?></textarea>
         <span class="error">* <?php echo $bioErr; ?></span>
      </p>
      <p>
         <label for="">Pol: </label>
         <input type="radio" name="pol" id="" value="z">Zenski
         <input type="radio" name="pol" id="" value="m">Muski
         <input type="radio" name="pol" id="" value="d">Drugo
      </p>

      <p>
         <input type="submit" name="submit" value="Posalji">
         <input type="reset" name="reset" value="Resetuj">
      </p>
   </form>
