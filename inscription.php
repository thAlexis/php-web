<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
</head>

<body>
  <h1>Page d'inscription</h1>
  <form action="utilisateur.php" method="post">
    <fieldset>
      <legend>Données de connexion</legend>
      <div>
        <label for="password">Nom d'utilisateur</label>
        <input type="text" id=username placeholder="Votre nom d'utilisateur" autocomplete="off" autofocus name=username>
      </div>
      <div>
        <label for="password">Mot de passe</label>
        <input type="password" id=password placeholder="Votre mot de passe" name=password>
      </div>
    </fieldset>
    <div>
      <label for="age">Âge</label>
      <input type="number" id=age min=0 max=150 placeholder="Votre age" name=age>
    </div>
    <div>
      <label for="ville">Ville</label>
      <select id="ville" name=ville>
        <option selected disabled>Merci de choisir votre ville de résidence</option>
        <option value="marseille">Marseille</option>
        <option value="lyon">Lyon</option>
        <option value="Paris">Paris</option>
      </select>
    </div>
    <div>
      <label for="remarque">Remarque</label>
      <textarea id="remarque" cols="50" row="5" name=remarque></textarea>
    </div>
    <div>
      <label for="genre">Genre</label>
      <input type="radio" name="genre" value=homme>Homme
      <input type="radio" name="genre" value=femme>Femme
    </div>
    <div>
      <label for="sport">Sport préféré</label>
      <input type="checkbox" name="sport" value=foot>Foot
      <input type="checkbox" name="sport" value=basket>Basket
    </div>
    <div>
      <button>S'inscrire</button>
    </div>
  </form>

</body>

</html>