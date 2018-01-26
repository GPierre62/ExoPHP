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
    <input type="password" name="PassKey2">
    <button type="submit" value="Valider">Valider</button>
  </form>
  <?php
  if (isset($_POST['Pseudo'])&&isset($_POST['PassKey'])&&isset($_POST['PassKey2'])) {
    if ($_POST['PassKey']==$_POST['PassKey2']) {
      $bdd->query('INSERT INTO `identifiant` (`Pseudo`, `Password`) VALUES (\'' . $_POST['Pseudo'] . \'', \'' . $_POST['PassKey'] . \''');
    }
  }
  ?>
