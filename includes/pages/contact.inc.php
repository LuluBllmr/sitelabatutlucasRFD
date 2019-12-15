<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><h1>Contact</h1></title>
    <link rel="stylesheet" href="C:\wamp64\www\rfd\assets\css\reset.css">
    <link href="./assets/css/stylecv.css" rel="stylesheet" />
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
  $email = checkInput($_POST['email']);
  $msg = checkInput($_POST['msg']);
  $erreur = array();
  if ($nom === "") {
    array_push($erreur, "Veuillez saisir votre nom");
  if ($prenom === "")
    array_push($erreur, "Veuillez saisir un prénom");
  if ($email === "")
    array_push($erreur, "Veuillez saisir une adresse e-mail");
  if ($msg === "")
    array_push($erreur, "Veuillezl saisir un message");
}
  if (count($erreur) > 0) {
    $message = '<ul>';
    for($i = 0 ; $i < count($erreur) ; $i++) {
      $message .= '<li>';
      $message .= $erreur[$i];
      $message .= '</li>';
    }
    $message .= '</ul>';
    echo $message;
    require './includes/formcontact.php';
  }
  else {
    echo "Insertion en BDD";
  }
}
else {
  $nom = $prenom = $email = $msg = "";
  require './includes/formcontact.php';
}
      $sqlVerif = "SELECT COUNT(*) FROM clients
      WHERE mail='" . $email ."'";
      $nbrOccurences = $pdo->query($sqlVerif)->fetchColumn();
      if ($nbrOccurences > 0) {
        echo "Déjà dans la base";
      }
      else {
          $sql = "INSERT INTO clients
          (nom, prenom, mail, message)
          VALUES ('" . $nom . "', '" . $prenom . "', '" . $email ."', '" . $msg ."')";
          $query = $pdo->prepare($sql);
          $query->bindValue('nom', $nom, PDO::PARAM_STR);
          $query->bindValue('prenom', $prenom, PDO::PARAM_STR);
          $query->bindValue('email', $email, PDO::PARAM_STR);
          $query->bindValue('message', $msg, PDO::PARAM_STR);
          $query->execute();
          echo "Enregistrement OK";
        }
