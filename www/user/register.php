<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <form classe="box" action="../validation/register-validate.php" method="post">
    <h1 class="box-title">S'inscrire</h1>
    <input type="username" class="box-input" name="username" placeholder="Votre nom d'utisateur" required />

    <input type="email" class="box-input" name="email" placeholder="Adresse Mail" required />

    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />

    <input type="submit" value="S'inscrire" class="box-button" />

    <p class="box-register">Déjà inscrit?
      <a href="login.php">Connectez-vous ici</a>
    </p>
  </form>
</body>

</html>