<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo 1</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
  </head>
  <body>
    <!-- Écrire un programme PHP qui affiche tous les nombres impairs entre 0 et 1000, par
    ordre croissant : « 1 3 5 7 ... 995 997 999 ». -->
    <?php
      for ($i=1; $i <= 1000 ; $i+=2) {
        echo $i. "</br>";
      }
     ?>
  </body>
</html>
