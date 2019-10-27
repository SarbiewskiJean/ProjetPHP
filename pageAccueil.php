<html>
  <link rel="stylesheet" type="text/css" href="font.css">

<div class="bandeDeco">
  <head>
    <a href="pageAccueil.php"> <img src="blog.jpg" alt="dommage" class="logo"> </a>
  </head>

    <script language=" javascript " type="text/javascript">

    function deco()
    {
      if(confirm("Etes vous sur de vouloir vous déconnectez?"))
      {
        document.location.href = "https://devweb.iutmetz.univ-lorraine.fr/~sarbiews2u/ProjetPHP/Deconnexion.php";
      }
    }
    </script>
    <body>
      <form method ="post" action ="pageAccueil.php">

      <div class="menu">
        <header>
          <a href="https://devweb.iutmetz.univ-lorraine.fr/~sarbiews2u/ProjetPHP/creationCompte.php">Inscrivez vous</a>
          <a href="https://devweb.iutmetz.univ-lorraine.fr/~sarbiews2u/ProjetPHP/authentification.php">Connectez vous</a>
        <a href="https://devweb.iutmetz.univ-lorraine.fr/~sarbiews2u/ProjetPHP/creationArticle.php">Ecrire un article</a>        
		</header>
      </div>
      </div>
      <br />
      <div class="marge">
                <h1>Page d'accueil</h1>
				<h2>Liste Blogs:</h2>
        <table><tr><div class="blog"><td class="titreSujet"><a href=https://devweb.iutmetz.univ-lorraine.fr/~sarbiews2u/ProjetPHP/pageBlog.php?id=16>Test</a></td></div><td></td></table>
		<table><tr><div class="blog"><td class="titreSujet"><a href=https://devweb.iutmetz.univ-lorraine.fr/~sarbiews2u/ProjetPHP/pageBlog.php?id=13>Test</a></td><td class="dateSujet">2019-10-26</td></tr><tr></tr><tr></tr><td class="resumeSujet">Resume: ceci est un test</td></div><td></td></table>
		<table><tr><div class="blog"><td class="titreSujet"><a href=https://devweb.iutmetz.univ-lorraine.fr/~sarbiews2u/ProjetPHP/pageBlog.php?id=14>Test</a></td><td class="dateSujet">2019-10-26</td></tr><tr></tr><tr></tr><td class="resumeSujet">Resume: Ceci est un test</td></div><td></td></table>
		<table><tr><div class="blog"><td class="titreSujet"><a href=https://devweb.iutmetz.univ-lorraine.fr/~sarbiews2u/ProjetPHP/pageBlog.php?id=15>Test</a></td><td class="dateSujet">2019-10-25</td></tr><tr></tr><tr></tr><td class="resumeSujet">Resume: ceci est un test</td></div><td></td></table>
		<table><tr><div class="blog"><td class="titreSujet"><a href=https://devweb.iutmetz.univ-lorraine.fr/~sarbiews2u/ProjetPHP/pageBlog.php?id=12>Dernier test</a></td><td class="dateSujet">2019-10-23</td></tr><tr></tr><tr></tr><td class="resumeSujet">Resume: Ceci est un test</td></div><td></td></table>
    </form>
  </body>
</html>
