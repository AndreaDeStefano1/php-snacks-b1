<!-- 
  Snack 1
  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
  Olimpia Milano - Cantù | 55-60 
-->

<?php 
$basketMatch = [
  [
    'homeTeam' => 'Ginnastica Roma',
    'guestTeam' => 'Olimpia Milano',
    'homeTeamScore' => '34',
    'guestTeamScore' => '55',
  ],
  [
    'homeTeam' => 'Partenope',
    'guestTeam' => 'Pall. Cantù',
    'homeTeamScore' => '66',
    'guestTeamScore' => '56',
  ],
  [
    'homeTeam' => 'Scaligera Verona',
    'guestTeam' => ' Libertas Forlì',
    'homeTeamScore' => '21',
    'guestTeamScore' => '33',
  ],
  [
    'homeTeam' => 'Pall. Pavia',
    'guestTeam' => 'Pall. Biella',
    'homeTeamScore' => '88',
    'guestTeamScore' => '76',
  ],
  [
    'homeTeam' => 'Olimpia Cagliari',
    'guestTeam' => 'Aurora Desio',
    'homeTeamScore' => '43',
    'guestTeamScore' => '65',
  ],
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

  for ($i=0; $i < count($basketMatch); $i++) { 
    echo '<li>' . $basketMatch[$i]['homeTeam'] . ' - ' . $basketMatch[$i]['guestTeam'] . ' | ' . $basketMatch[$i]['homeTeamScore'] . ' - ' . $basketMatch[$i]['guestTeamScore'] . '</li>';

  }
   ?>
</body>
</html>