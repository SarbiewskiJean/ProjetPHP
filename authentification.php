<html>
  <link rel="stylesheet" type="text/css" href="font.css">

  <div class="bandeDeco">
    <head>
      <a href="pageAccueil.php"> <img src="blog.jpg" class="logo"> </a>
    </head>
  </div>
<body>

  <script language=" javascript " type="text/javascript">

    function connecte(){
      alert("Connexion réussie.");
    }
  </script>

  <form method ="post" action ="authentification.php">
    <p><input type="text" size="20" name="pseudo" placeholder="Adresse mail ou pseudo" required=required></p>
    <p><input type="password" size="20" name="motdepasse" placeholder="Mot de passe" required=required></p>
    <input type="submit" value="Se connecter">
  </form>
  </body>
 </html>
