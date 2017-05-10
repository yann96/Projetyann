<?php

	$serveur = "localhost";
	$utilisateur = "root";
	$motDePasse = "";
	$baseDonne = "base";

	$conn = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDonne) OR die("Erreur de connexion à la base de données");

?>