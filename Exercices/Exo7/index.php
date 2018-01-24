<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo 7</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
  </head>
  <body>
    <!--Écrire un formulaire qui demande le nom et le sexe de l&#39;utilisateur (M ou Mme). Ce
formulaire appelle une page qui affichera « Bonjour monsieur Truc » ou « Bonjour
madame Bidule » suivant le cas. -->
  <form action="" method="post">
      <input type="radio" name="sexe" value="Madame">
      <label for="sexeChoice1">Une Femme</label>
      <input type="radio" name="sexe" value="Monsieur">
      <label for="sexeChoice2">Un Homme </label>
      <input type="text" name="Nom" placeholder="Votre Nom">
      <input type="submit" value="Valider">
  </form>

    <?php
      if (!empty($_POST["Nom"])) {
        echo "Bonjour ".$_POST["sexe"]." ".$_POST["Nom"]." Bonne journée ! ";
      }
     ?>
  </body>
</html>
