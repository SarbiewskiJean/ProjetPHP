<html>
  <link rel="stylesheet" type="text/css" href="font.css">
  <div class="bandeDeco">
    <head>
      <a href="pageAccueil.php"> <img src="blog.jpg" alt="dommage" class="logo"> </a>
    </head>
  </div>
<body>
  <title>Création d'un compte</title>
  <form method ="post" action ="creationCompte.php">
    <p><input type="text" size="20" name="nom" placeholder="Nom" required=required></p>
    <p><input type="text" size="20" name="prenom" placeholder="Prenom" required=required></p>
    <p><input type="email" size="20" name="addressemail" placeholder="Mail" required=required></p>
    <p><input type="password" size="20" name="motdepasse" placeholder="Mot de passe" required=required></p>
    <p><input type="text" size="20" name="pseudo" placeholder="Pseudonyme" required=required></p>
    <input type="submit" value="Creer un compte">
  </form>
  </body>
 </html>
