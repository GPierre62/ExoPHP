<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exo 5</title>
  <link rel="stylesheet" href="CSS/style.css" type="text/css">
</head>
<body>
  <!-- Écrire un programme qui affiche la table de multiplication de 13 et ses résultats. -->
  <?php
  $max = 10;
  $multi=1;
  $resultat=1;
  $treize=13;

  while ($multi <= $max) {
    $faignasse=$multi." X ".$treize." = ".$resultat." </br>";
    echo $faignasse;
    $multi++;
  }
  ?>
</body>
</html>
