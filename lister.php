<?php // Connexion à la base de données 
    $serveur = "localhost";
	$utilisateur = "root";
	$motDePasse = "";
	$baseDonne = "base";

	$conn = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDonne) OR die("Erreur de connexion à la base de données");

$com_sql = "SELECT * FROM personne";
		$res_sql = mysqli_query($conn, $com_sql);

		while ($donnee = mysqli_fetch_assoc($res_sql)) {
			
			echo "<tr>
				<td>$donnee[Nom]</td>
				<td>$donnee[Prenom]</td>
				<td>$donnee[Ville]</td>
				<td>
					
				</tr>
			";
			
		} 
mysqli_close($conn);
?>    
