<!DOCTYPE html>
    <html lang="en" >
     <head> 
    <script src="js/jquery.js" type="text/javascript"></script>
        <script type="application/javascript" src="js/awesomechart.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">

          <script>

      
      $(document).ready(function(){
        $('#ajout_participant').click(function(){
          //alert("toto");
        $('#entrer_participant').toggle(500);
      });

      });

      function reinitialiser(){
        var x = getElementById('mini_form');
        x.reset();
      }
      function supprimer(code_com){
        xmlhttp.open('GET', 'lister.php?lister=oui&supprimer=oui&codeCom='+code_com, true);
        xmlhttp.send();
      }

      function apercevoir(code_com, nom_client){
        xmlhttp.onreadystatechange = function(){
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById('apercuCommande').innerHTML = xmlhttp.responseText;
          }
        }
        xmlhttp.open('GET', 'sauver_com.php?apercevoir=oui&codeCom='+code_com+'&nomClient='+nom_client, true);
        xmlhttp.send();
      }
      

    </script>
      

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

<div class="container">
    <div class="well text-primary  " >
      <h2 class="text-center">PARTICIPANTS </h2>
    </div>
    <div id='apercuParticipant'>
      <div >
        <div id="col-md-6 col-md-offset-6" >
          <button class="btn btn-primary btn-lg" id="ajout_participant">Ajout d'un participant</button> 
        </div>
        <br /><br />
        <div id="entrer_participant" style="display:none;" class="col-md-6" >
          <form  id="mini_form" action="sauvegarde.php" method="post">
            <div class="form-group">
              <label>Nom du participant:</label>
              <input type="text" name="nomParticipant" id= "nomParticipant" class="form-control">
               <label>Prenom du partication:</label>
              <input type="text" name="prenomParticipant" id = "prenomParticipant" class="form-control">
               <label>Ville du participant:</label>
              <input type="text" name="villeParticipant" id = "villeParticipant" class="form-control">
            </div>
            <button class="btn btn-alert" onclick="reinitialiser();">Valider</button>
          </form>
          <br /><br />

        </div>
      </div>
      
      
      <br />

      

      <table class="table table-bordered text-center table-striped table-hover">     
        <thead>
          <tr class="danger">
            <th>nom Participant</th>
            <th>Prenom participant </th>
            <th>Ville du participant</th>
            <th>Aperçu/ Supprimer</th>
          </tr>
        </thead>
        <tbody>
           <?php include ('lister.php');?>
        </tbody>
      </table>
    </div>
    <br /><br />
</div>


</body>
</html>