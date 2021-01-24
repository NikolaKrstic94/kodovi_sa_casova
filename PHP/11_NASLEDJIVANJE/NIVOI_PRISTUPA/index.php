<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nivoi Pristupa</title>
</head>
<body>
   
<?php 


class Vozilo{
   private $privatnoPolje = "privatno";
   protected $protectedPolje = "protected";
   public $javnoPolje = "javno";
}

class Automobil extends Vozilo {
   public function stampaj(){
      $this->privatnoPolje = "PrivatnoPolje";
      echo $this->privatnoPolje;
   }
}


// $v->$privatnoPolje = "Privatno polje"; // Greska, ne mogu izvan klase da pristupim privatnom polju

// $v->protectedPolje = "Protected polje"; // ne mogu izvan klase da pristupim protected polju
$v = new Vozilo();
$v->javnoPolje = "Javno polje";

$a = new Automobil();
$a->stampaj();










?>


</body>
</html>