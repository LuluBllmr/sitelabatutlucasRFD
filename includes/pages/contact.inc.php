<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title><h1>Contact</h1></title>
  <link href="./assets/css/style.css" rel="stylesheet" />
</head>
<header>
  <h2>Contactez nous !</h2>
</header>
<body>

</body>
</html>


<?php

if (isset($_POST['formcontact'])) {
  $nom = checkInput($_POST['nom']);
  $prenom = checkInput($_POST['prenom']);
  $mail = checkInput($_POST['mail']);
  $msg = checkInput($_POST['message']);
  $erreur = array();
  if ($nom === "")
    array_push($erreur, "Veuillez saisir votre nom");
  if ($prenom === "")
    array_push($erreur, "Veuillez saisir un prénom");
  if ($mail === "")
    array_push($erreur, "Veuillez saisir une adresse mail");
  if ($msg === "")
    array_push($erreur, "Veuillez saisir un message");
  if (count($erreur) > 0) {
    $msg = '<ul>';
    for($i = 0 ; $i < count($erreur) ; $i++) {
      $msg .= '<li>';
      $msg .= $erreur[$i];
      $msg .= '</li>';
    }
    $msg .= '</ul>';
    echo $msg;
    require 'formcontact.php';
  }
  else {
    $sqlVerif = "SELECT COUNT(*) FROM sitemichel
    WHERE mail='" . $mail ."'";
    $nbrOccurences = $pdo->query($sqlVerif)->fetchColumn();
    if ($nbrOccurences > 0) {
      echo "Déjà dans la base";
    }
    else {
        $sql = "INSERT INTO sitemichel
        (nom, prenom, mail, message)
        VALUES ('" . $nom . "', '" . $prenom . "', '" . $mail ."', '" . $msg ."')";
        $query = $pdo->prepare($sql);
        $query->bindValue('nom', $nom, PDO::PARAM_STR);
        $query->bindValue('prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue('mail', $mail, PDO::PARAM_STR);
        $query->bindValue('message', $msg, PDO::PARAM_STR);
        $query->execute();
        echo "Enregistrement OK";
      }
  }
}
else {
  $nom = $prenom = $mail = $msg = "";
  require './includes/formcontact.php';
}
