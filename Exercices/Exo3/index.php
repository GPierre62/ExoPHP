<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exo 3</title>
  <link rel="stylesheet" href="CSS/style.css" type="text/css">
</head>
<body>
  <!-- Écrire un programme qui calcule la factorielle de 10.
  Factorielle de 10 : 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 * 10 -->
  <?php
  $factorielle = 10;
  $toto=1;
  $resultat=1;

  while ($toto <= $factorielle) {
    echo $toto;
    $resultat = $resultat * $toto;
    if ($toto<$factorielle) {
      echo " x ";
    }else{
      echo " = ".$resultat;
    }
    $toto++;
  }
  ?>
</body>
</html>
