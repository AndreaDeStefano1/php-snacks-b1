<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 
$text =
 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex non eos distinctio, officia fugiat, temporibus qui enim architecto commodi dolorem saepe repudiandae atque dolor rem. Vel, id porro voluptatibus consequatur corrupti harum saepe aspernatur odit molestias optio a quas architecto, deleniti eligendi quod cumque repellat similique aut. Natus quia quam dolorum sapiente, unde nesciunt ipsum reiciendis itaque? Fuga veritatis odit mollitia iure quaerat quia autem quidem ad dolores natus ut dolorum, culpa similique! Tempore possimus adipisci, suscipit facilis vitae quos assumenda, placeat sequi, minus voluptatem enim? Ad, cum deserunt dolorem pariatur minus voluptatem laboriosam eligendi! Quidem ipsam rerum, suscipit unde accusantium perspiciatis dolores autem facilis aperiam assumenda ea dignissimos a possimus repudiandae quo consectetur expedita esse enim nobis nostrum. Aut voluptas delectus dolore, laboriosam iusto possimus repudiandae iste doloremque quia eaque, aliquam aliquid. Nihil, est error? Delectus eaque, ea quod architecto sequi alias sint voluptatum placeat harum maxime quibusdam quo quas aperiam sunt perspiciatis molestias non voluptatem dolores! Dolorum itaque earum quos, sunt corrupti hic laboriosam eius veritatis est adipisci iste magnam inventore soluta numquam quod? Nulla officiis reiciendis illum? Similique culpa vel repellendus ullam cumque atque, saepe incidunt placeat soluta magni minus nemo recusandae alias sed. Nam dicta animi nihil libero non hic, quae, dolorem corporis illum est ex at perspiciatis cumque porro molestias temporibus delectus cupiditate vero doloribus accusamus laboriosam. Magni mollitia ad sunt, odit obcaecati praesentium repellendus commodi porro aut et exercitationem blanditiis ipsum, est sit fuga quos laboriosam, illum eligendi totam ducimus in modi ut molestiae recusandae! Omnis maiores perspiciatis officiis inventore! Illo veniam quibusdam consequatur repudiandae, blanditiis harum accusamus? Recusandae, voluptatum adipisci iusto accusantium debitis vitae id sed, itaque, eveniet delectus natus aperiam earum nobis numquam sit ex? Eaque aspernatur dicta non vero quae ab debitis! Ipsum assumenda voluptatum magni rerum illum dolore consequuntur sunt!';

$explodedText = explode('.',$text);




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
    for ($i=0; $i < count($explodedText); $i++) { 
      echo '<p>' . $explodedText[$i] . '</p>';
    }
  ?>
</body>
</html>