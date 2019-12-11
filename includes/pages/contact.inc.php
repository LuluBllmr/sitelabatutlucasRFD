<h1>Contact</h1>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><h1>Contact</h1></title>
    <link rel="stylesheet" href=".\assets/css/reset.css">
  </head>
  <body>

  </body>
</html>

<h1>Pour nous contacter</h1>
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
    array_push($erreur, "Veuillez saisir un message");
}
  if (count($erreur) > 0) {
    $message = '<ul>';

    for ($i=0; $i < count($erreur) ; $i++) {
      $message .= '<li>';
      $message .= $erreur[$i];
      $message .= '</li>';
    }
    $message.='</ul>'; 
  }
  else {
    echo "Insertion en BDD";
  }
}
  else {
    require './includes/formcontact.php';
}
