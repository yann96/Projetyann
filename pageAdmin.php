<!DOCTYPE html>
    <html lang="en" >
     <head> 
    <script src="js/jquery.js" type="text/javascript"></script>
        <script type="application/javascript" src="js/awesomechart.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">

          
      

      </head>

        <body>

        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="#">informations</a></li>
        <li><a href="#">A propos</a></li>
      </ul>
       
    </div>
  </div>
</nav>
<?php
if (isset($_POST['password']) AND $_POST['password'] =="yann") // Si le mot de passe est bon
{
// le formulaire d'inscription

?>
<a href="formulaire.php" class="btn btn-primary">Formulaire d'ajout</a>
<?php

}
else // Sinon, on affiche un message d'erreur
{

echo '<p>Mot de passe incorrect</p>'; 
include('connexion.php');

}
?>


</body>
</html>