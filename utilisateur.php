<?php
$username = "Doe";
if ($_GET['username'] != "") {
  $username = $_GET['username'];
};
$age = $_GET['age'];
$ville = $_GET['ville'];
$genre = "madame";
if (isset($_GET['genre']) and $_GET['genre'] == 'homme') {
  $genre = "monsieur";
};

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
  </p>
</body>

</html>