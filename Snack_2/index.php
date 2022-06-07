<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
  
<?php 
$isAuth = false;
if(strlen($_GET['name']) > 2 && (stristr($_GET['mail'], '.') != false) && (stristr($_GET['mail'], '@') != false) && is_numeric($_GET['age'])){
  $isAuth = true;
};
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
  
  if($isAuth){
    
    echo '<h1>Accesso Riuscito</h1>';
  }else{
    echo '<h1>Accesso Negato</h1>';
  } ?>
</body>
</html>