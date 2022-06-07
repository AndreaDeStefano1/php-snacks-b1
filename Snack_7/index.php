<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php  
$class = [
  [
    'name' => 'Peppe',
    'lastname' => 'Peppino',
    'vote' => [ 1, 2, 3, 4]
  ],
  [
    'name' => 'Luca',
    'lastname' => 'Lughino',
    'vote' => [ 6, 6, 7, 7]
  ],
  [
    'name' => 'Mario',
    'lastname' => 'Mario',
    'vote' => [ 10, 8, 9, 8]
  ]
]
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
  <?php  
   for ($i=0; $i < count($class); $i++) { 
     $averageVote = array_sum($class[$i]['vote']) / count($class[$i]['vote']);
     echo '<li> Lo studente ' . $class[$i]['name'] . ' ' . $class[$i]['lastname'] . ' ha una media voti pari a ' . $averageVote . '</li>';
   }
  ?>
</body>
</html>