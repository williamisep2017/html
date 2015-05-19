<?php session_start();?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1; user-scalable=0"/>
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/new-offre-container.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>
<body>
<?php 	$userid = $donnees['userid']; ?>
<?php $id_annonce = $_GET['annonce']; ?>
<?php include("connexion_bdd.php"); ?>
			<?php
				$reponse = $bdd->query("SELECT * FROM annonce WHERE id='$id_annonce]'");
				echo '<p>Voici les informations concernant cette annonce :</p>';
				$donnees = $reponse->fetch()
			?>
						<p>
							user utilisateur:<?php echo $_SESSION['id']; ?>	
							user vendeur:<?php echo $donnees['userid']; ?></br>
						</p>
			<?php 
			$reponse->closeCursor();
			?>



			<?php
				$reponse = $bdd->query("SELECT * FROM utilisateurs Inner Join annonce ON annonce.userid = utilisateurs.id");
				echo '<p>Voici les informations concernant cette annonce :</p>';
				$donnees = $reponse->fetch()
			?>
						<p>
							adresse-mail du vendeur:<?php echo $donnees['adresse_mail']; ?></br>
							pseudo du vendeur:<?php echo $donnees['pseudo']; ?></br>
							Adresse/Adresse de vente:<?php echo $donnees['adresse']; ?></br>
						</p>
			<?php 
			$reponse->closeCursor();
			?>
							




</body>		
</html>