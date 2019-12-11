<h1>Contact</h1>
<?php

if (isset($_POST['formcontact'])) {
  echo "Je viens du formulaire";

}

else {
  echo "Je viens du futur";
}

require './includes/formcontact.php';

?>

<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
      <link rel="stylesheet" href="../../assets/css/style.css">
  </head>
  <body>

    <div id="wrap2">
      <nav>
        <ul>
          <li><a href="./accueil.inc.php">Accueil</a></li>
          <li><a href="./contact.inc.php">Contact</a></li>
          <li><a href="./cv.inc.php">CV</a></li>
          <li><a href="./galerie.inc.php">Galerie</a></li>
        </ul>
      </nav>
    </div>

  </body>
</html>
