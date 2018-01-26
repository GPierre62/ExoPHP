<?php
include ("coonectBDD.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>page insciption</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="Pseudo"placeholder="entrez votre identifiant">
    <input type="password" name="PassKey" placeholder="tapez votre mot de passe">
    <input type="password" name="PassKey2" placeholder="retapez votre mot de passe">
    <button type="submit" value="Valider">Valider</button>
  </form>
  <?php
  if (isset($_POST['Pseudo'])&&isset($_POST['PassKey'])&&isset($_POST['PassKey2'])) {
    if ($_POST['PassKey']==$_POST['PassKey2']) {
      $mdp = $_POST['PassKey'];
      $toto = $_POST['Pseudo'];
      $bdd->query('INSERT INTO `identifiant` (`Pseudo`, `Password`) VALUES ("'.$toto.'","'.$mdp.'")');
    }
  }
  ?>
