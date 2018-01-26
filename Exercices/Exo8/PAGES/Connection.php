<?php
include ("coonectBDD.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>page connection</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="Pseudo">
    <input type="password" name="PassKey">
    <button type="submit" value="Valider">Valider</button>
    <p>
      <a href="incription.php">Inscription</a>
    </p>
  </form>
  <?php
  $connectReussit= false;
  if (isset($_POST['Pseudo']) && isset($_POST['PassKey'])) {/*si les input ne sont pas vide fait ça!*/
    $Pseudonyme= $_POST['Pseudo'];
    $reponse = $bdd->query('SELECT * FROM `identifiant` WHERE `Pseudo`=\'' . $_POST['Pseudo'] . '\'') or die(print_r($bdd->errorInfo()));
    while ($resultat = $reponse->fetch()){
      if ($resultat['Password'] == $_POST['PassKey']) { /*si les resultat de requete sont égaleau saisie de l'utilisateur alors tu fait ça!*/
        echo "Connection réussit";
        $_SESSION['prenom']= $Pseudonyme;
        $Bonjour = "Bienvenue ". $_SESSION['prenom']. " !";
        $connectReussit= true;
      }
    }
    $reponse->closeCursor();
  }


  ?>
</body>
</html>
