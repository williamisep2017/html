<html>
    <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="traitement_depot-offre.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>

    <body>


<div class="wrap">

		<div class ="title">
			<h1>Récapitulatif de l'annonce</h1>
		</div>

			<div class="sous-title">
				<h2>Information sur le produit</h2>
			</div>

	<div class="content">
		<table>

		<tr>
			<td> <h3>types de vente :</h3></td>
			<td><?php echo htmlspecialchars($_POST['choix_vente']); ?></td>
		</tr>

		<tr>
			<td>
				<h3>types de produits: </h3>
			</td>
			<td><?php echo htmlspecialchars($_POST['choix_produits']); ?>
			</td>
		</tr>

		<tr>
			<td><h3>Nom du produit :</h3></td>	
			<td><?php echo htmlspecialchars($_POST['NOM']); ?></td>
		</tr>

		<tr>
			<td><h3>Variété du produit :</h3></td>	
			<td><?php echo htmlspecialchars($_POST['VAR']); ?></td>
		</tr>

		<tr>
			<td><h3>poids du produit :</h3></td>
			<td><?php echo htmlspecialchars($_POST['pdsKg']); ?> killogrames et <?php echo htmlspecialchars($_POST['pdsG']); ?>Grammes.</td>
		</tr>

		<tr>
			<td><h3>Quantité:</h3> 	</td>
			<td><?php echo htmlspecialchars($_POST['qte']); ?></td>
			</tr>
		<tr>
			<td><h3>Le produits a été ramasé le :</h3> </td>
			<td><?php echo htmlspecialchars($_POST['date-ramassage']); ?></td>
		</tr>

		<tr>
			<td><h3>Commentaire :</h3> </td>
			<td><?php echo htmlspecialchars($_POST['commentaire']); ?></td>
		</tr>


	</table>
	</div>




<!--//////////////////////////////////////////////////
/////////   Information Personnelle   ////////
//////////////////////////////////////////////////////-->

				<div class ="title2">
					<h1>Informations personnelles</h1>
				</div>
					<section class="Identite">
						<div class="Identite-left">
							<h3>Localisation</h3>
						</div>
							<div class="Identite-right">
								<h3>Profil</h3>
							</div>
					</section>

<!--///////////////////////////
/////////    VALIDER   ////////
///////////////////////////////-->

		<div class="bouton">
			<form>
				<p>
				<input class="submit2" type="reset" value="< Précedent " />
				<input name="envoyer" class="submit1" type="submit" value="Valider >" />
				
			</p>
			</form>
		
		</div>

</div>



<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Enregistrement de l'annonce dans la basse de donnée   //////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<?php 
//Connection au serveur de base de donnée
include("connexion_bdd.php");

// Vérification de la validité des informations
if(isset($_POST['envoyer'])) {
	if(isset($_POST['choix_vente']) AND !empty($_POST['choix_vente'])
		AND isset($_POST['choix_produits']) AND !empty($_POST['choix_produits'])
		AND isset($_POST['NOM']) AND !empty($_POST['NOM'])
		AND isset($_POST['pdsKg']) AND !empty($_POST['pdsKg'])
		AND isset($_POST['pdsG']) AND !empty($_POST['pdsG'])
		AND isset($_POST['qte']) AND !empty($_POST['qte'])
		AND isset($_POST['date-ramassage']) AND !empty($_POST['date-ramassage']))

	
	{
		//Tous les champs sont remplis
		$pseudo=mysql_escape_string($_POST['pseudo']);
		$mail=mysql_escape_string($_POST['adresse_mail']);
		$password1=mysql_escape_string($_POST['password1']);
		$password2=mysql_escape_string($_POST['password2']);

		// Hachage du mot de passe
		$pass_hache = sha1($_POST['password1']);
		
		$longueur_pseudo = strlen($pseudo);

		if($longueur_pseudo >3 and $longueur_pseudo <=30)
		{
		//le pseudo respect le format
		if($password1 == $password2)
		{

		//les mots de passe sont identique
		$req = $bdd->prepare('INSERT INTO utilisateurs(pseudo, mot_de_passe, adresse_mail) VALUES(:pseudo, :mot_de_passe, :adresse_mail)');
		$req->execute(array(
   			 	'pseudo' => $pseudo,
    			'mot_de_passe' => $pass_hache,
    			'adresse_mail' => $mail));
		echo 'Votre inscription a été pris en compte';
		//include("index.php");
		}

		else {
			$erreur='Le mot de passe et le mot de pase de confirmation de corresponde pas';
		}
		}

else{
		$erreur="La longueur du Pseudo ou Nom complé n'a pas la bonne taille (minimum 3 et maximum 30)" ;
}
}
else{
		$erreur='Tous les champs sont obligatoire.';
}
}
?>

<?php
if(isset($erreur)) {
	echo 'Erreur : '. $erreur;
}
?>

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Fin de l'enregistrement de l'annonce dans la basse de donnée   //////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

	</body>