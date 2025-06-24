<?php
session_start();
$nom_c = "";
$nom_s = "";
if (isset($_COOKIE['nom'])) {
  $nom_c = $_COOKIE['nom'];
};
if (isset($_SESSION['nom'])) {
  $nom_s = $_SESSION['nom'];
};

// if ($_SERVER['HTTP_REFERER'] == "http://localhost/php-web/test.php") {
//   session_unset();
//   session_destroy();
// };

if (str_contains($_SERVER['HTTP_REFERER'], "test.php")) {
  session_unset();
  session_destroy();
};
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies</title>
</head>

<body>
  <h1>Cookies et sessions</h1>
  <h2>Cookies</h2>
  <!-- <p>Nom : <?php echo $_COOKIE['nom'] ?></p> -->
  <p>Nom : <?= $nom_c ?></p> <!-- Syntaxe plus courte -->

  <h2>Sessions</h2>
  <p>Nom : <?= $nom_s ?></p>
  <p>
    <a href="test.php">Vider la session
    </a>
  </p>

</body>

</html>