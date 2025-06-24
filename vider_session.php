<?php
session_start();
// unset($_SESSION['nom']); // Supprime la variable
session_unset(); // Supprime toutes les variables session
session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vider la session</title>
</head>

<body>
  <h1>Votre session est désormais vide</h1>
</body>

</html>