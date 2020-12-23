<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ugnjezdeno grananje</title>
   <style>
      div {
         color:red;
      }
   </style>
</head>
<body>
   <?php
      $br1 = 5;
      $br2 = 7;
      // if($br1 > $br2) {
      //    echo "Broj $br1 je veci";
      //    if($br1 == 0) {
      //       echo " i paran je";
      //    }
      //    else {
      //       echo " i neparan je";
      //    }
      // }
      // elseif($br2 > $br1) {
      //    echo "Broj $br2 je veci";
      //    if($br2 %2 == 0) {
      //       echo " i paran je";
      //    }
      //    else {
      //       echo " i neparan je";
      //    }
      // }
      // else {
      //    echo "Brojevi $br1 i $br2 su jednaki";
      // }
      if($br1 >= 0 && $br2>=0) {
         echo "brojevi $br1 i $br2 su nenegativni";
      }
    ?>

</body>
</html>