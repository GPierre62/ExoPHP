<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exo 6</title>
  <link rel="stylesheet" href="CSS/style.css" type="text/css">
</head>
<body>
  <!-- Écrire un formulaire qui demande le nom et l&#39;âge de l&#39;utilisateur. Le bouton submit
  de ce formulaire provoquera l&#39;affichage d&#39;une page qui saluera l&#39;utilisateur avec
  cette phrase : « Bonjour machin, vous avez xx ans... » (avec les bonnes valeurs,
  bien entendu). -->
  <form action="" method="post">
    <input type="text" name="machin" placeholder="votre nom">
    <input type="number" name="Age" placeholder="votre age">
    <input type="submit" value="Valider">
  </form>

  <?php
  if (!empty($_POST["machin"])&&($_POST["Age"])) {
    $Age= $_POST["Age"];
    echo "Bonjour ".$_POST["machin"]." !  ". "Vous avez ".$_POST["Age"]." ans ! </br>";
    if($Age<5){
      $verdict=' Ouh le bébé !';
    }elseif($Age<13){
      $verdict=' Vous êtes un enfant !';
    }elseif($Age<18){
      $verdict=' Vous êtes un(e) ado !';
    }elseif($Age>50){
      $verdict=' Toutes nos condoléances !';
    }else{
      $verdict=' Ah ! enfin un(e) adulte !';
    }
    echo $verdict;
  }
  ?>
</body>
</html>
