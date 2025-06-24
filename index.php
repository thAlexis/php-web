<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home page</title>
  <?php require "./_links.php" ?>
</head>

<body>
  <?php include "./_menu.php" ?>
  <?php include_once "./_menu.php" ?>
  <h1 class="text-secondary">Page d'accueil</h1>
  <p>Bienvenue dans notre application PHP</p>
  <a href="utilisateur.php?username=Mitroglou&ville=Marseille&age=55">
    Connaitre un peu plus sur la légende ?
  </a>

</body>

</html>