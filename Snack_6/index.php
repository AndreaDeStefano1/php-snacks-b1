<!-- ## Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack</title>
    <style>
      .teachers {
        background-color: gray;
      }
      .pm{
        background-color: green;
      }
    </style>
</head>
<body>
  <div class=''>
    <?php 
      foreach ($db as $key => $value) :
      ?>
      <p class = <?php echo $key ?>>
      <?php
      
        foreach($value as $name){
          echo  $name['name'] . ' ' . $name['lastname'] . '<br>';
        }
        
      
      endforeach;
    ?>
      </p>

  </div>
</body>
</html>