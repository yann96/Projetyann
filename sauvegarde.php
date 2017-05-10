<?php 
    $serveur = "localhost";
	$utilisateur = "root";
	$motDePasse = "";
	$baseDonne = "base";

	$conn = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDonne) OR die("Erreur de connexion à la base de données");

    $Nom = mysqli_real_escape_string($conn, trim(htmlspecialchars($_POST['nomParticipant'])));
	$Prenom = mysqli_real_escape_string($conn, trim(htmlspecialchars($_POST['prenomParticipant'])));
	$Ville = mysqli_real_escape_string($conn, trim(htmlspecialchars($_POST['villeParticipant'])));


		$com_sql = "INSERT INTO personne(Nom, Prenom, Ville) VALUES ('$Nom','$Prenom', '$Ville')";
		$resCom = mysqli_query($conn, $com_sql);
// Redirection du visiteur vers la page du minichat
		header('location:formulaire.php');
?>