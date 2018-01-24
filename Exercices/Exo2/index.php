<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exo 3</title>
  <link rel="stylesheet" href="CSS/style.css" type="text/css">
</head>
<body>
  <!-- Écrire un programme qui écrit 500 fois « Je ne dois pas oublier de signer la feuille
  de présence. » -->
  <?php
  $phrase=  " Je ne dois pas oublier de signer la feuille de présence </br>";
  for ($i=1; $i <= 500 ; $i++) {
    if($i%100 != 0){
      // if ($i!==100 && $i!==200 && $i!==300 && $i!==400 && $i!==500)

      echo $phrase;
    }else{ /*indique les ligne 100/200/300/400/500 etc */
      echo $i."</br>";
      echo $phrase;
    }
  }
  ?>
</body>
</html>
