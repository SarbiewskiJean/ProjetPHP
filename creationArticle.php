<html>
  <link rel="stylesheet" type="text/css" href="font.css">

  <div class="bandeDeco">
    <head>
      <a href="pageAccueil.php"> <img src="blog.jpg" alt="dommage" class="logo"> </a>
    </head>
  </div>
<body>
  <h1>Ecrivez votre sujet: </h1>
  <form method ="post" action ="creationArticle.php">
    <p><input type="text" size="20" name="titresujet" placeholder="Sujet de l'article"></p>
    <p><textarea wrap="hard" rows="5" cols="30" name="textesujet" placeholder="Contenu de l'article" class="contenuArticle"></textarea></p>
	<p><input type="text" size="20" name="resume" placeholder="Descriptif"></p>
    <input type="submit" value="Ajouter l'article">
  </form>

  </body>
</html>
