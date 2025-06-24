<?php
// Démarrer la session
session_start();


$username = "Doe";
if ($_REQUEST['username'] != "") {
  $username = $_REQUEST['username'];
};
$age = $_REQUEST['age'];
$ville = $_REQUEST['ville'];
$genre = "madame";
if (isset($_REQUEST['genre']) and $_REQUEST['genre'] == 'homme') {
  $genre = "monsieur";
};

// ajouter un cookie
setcookie("nom", $username);

// ajouter des données dans la session
$_SESSION['nom'] = $username;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion d'utilisateur</title>
</head>

<body>
  <h1>Gestion d'utilisateur</h1>
  <p>
    Bonjour
    <?php
    // if ($genre == "homme") {
    //   echo "Monsieur $username, vous avez $age ans et êtes de $ville";
    // } else {
    //   echo "Madame $username, vous avez $age ans et êtes de $ville";
    // };
    // echo $genre == "homme" ? "Monsieur " : "Madame ";
    echo "$genre $username, vous avez $age ans et êtes de $ville"
    ?>
    <a href="test.php">Consulter les cookies</a>
  </p>
</body>

</html>