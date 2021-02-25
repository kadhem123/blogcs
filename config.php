<?php
$servername="localhost";
$username="root";
$password="";
$dbname="BLOGCS";
$con=mysqli_connect($servername,$username,$password,$dbname);

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="img/logocsv1.png" width="150px" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="category.php">Ajouter Catégorie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="createArticle.php">Ajouter Article</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="article.php">Voir Articles</a>
      </li>
     

    </ul>
  
  </div>
</nav>