<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

function getRandomInt(){
  $randomInt = [];
  while(count($randomInt) < 15){
    $rand = rand();
   
    if (!(in_array($rand , $randomInt))) {
      $randomInt[] = $rand;
      
    } 
   
  }

  return $randomInt;
}

var_dump(getRandomInt());
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

</body>
</html>