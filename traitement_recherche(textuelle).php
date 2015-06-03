<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/Lesoffres.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
    </head>

    <body>
<div class="site-container"> <!--Utile pour le responsive du header seulement-->
<div class="site-pusher"><!--Utile pour le responsive du header seulement-->

<?php include("header1-responsive.php"); ?>

<div class="site-content"><!--Utile pour le responsive du header seulement-->
	<div class="container"><!--Utile pour le responsive du header seulement-->

<div class="wrap-lesoffres">
	<div class ="offres">
		<h3 class="title-lesoffres">Résulats recherche</h3>
	</div>
		<?php
			$connect = mysqli_connect( "localhost", "root", "root","Proxipotage" ) OR die( "la co a la bdd a ap marcher.<br />\nErreur MySQL '" . "'" );
			$articles=$_GET['recherche'];
				$sql = "SELECT * FROM annonce INNER JOIN fruits ON annonce.NOM = fruits.fruit WHERE NOM LIKE '%$articles%' ORDER BY date_ajout DESC"; // stripslashs =(evite les injections SQL)
				$action = mysqli_query($connect,$sql) OR die( "Impossible d'exécuter la requête !" ); // Envoie la requête au serveur MySQL avec en paramètre la bdd et la table
				$nbr_resultat = mysqli_num_rows( $action ); // compte le nombre de résultats 
				if( $nbr_resultat > 0 )  //cherche le nombre de résultats trouvé
				{
				echo "<b>$nbr_resultat</b> article(s) correspondants à votre recherche.<br /><br/>\n";// On commence notre boucle avec le tableau avec en parametre notre $action qui rassemble $sql + $connect
				while( $affichage = mysqli_fetch_array( $action ) ) // retourne un tableau contenant la ligne demandé dans le résultat
				{		?>

		<div class="produit">	
			<div class="column-left">
				<img src="<?php echo $affichage['image_fruit']?>" class="box-images"/>
					<div class="rectangle">
						<?php echo'<a href="interface-mail.php?annonce='.$affichage['id'].'">'?>
							Envoyer un mail au vendeur
						<?php '</a>'; ?>
					</div>
					<div class="rectangle">
						<a href="Echanger.php"> Voir le numéros du vendeur</a>
					</div>
			</div>					  

			<div class="column-right">
				<h4 class="title-blocright">Ajouté le : <?php echo $affichage['date_ajout']; ?></h4>
					<p class="description-offre">
						id : <?php echo $affichage['id_annonce']; ?><br/>
						<span>Type d'offre : <?php echo $affichage['choix_vente']; ?></span><br/>
						<?php echo $affichage['choix_produits']; ?><br/>
						<span><?php echo $affichage['NOM']; ?> </span><br/>
						Poids : <?php echo $affichage['pdsKg']; ?>Kg et <?php echo $affichage['pdsG']; ?>g
						Quantité : <?php echo $affichage['qte']; ?><br/>
						<span>Prix (au killo) : 5 € le killo</span><br/>
						Lieu : <?php echo $affichage['adresse_de_vente']; ?><br/>
						Commentaire :</br>
						<?php echo $affichage['comment']; ?>
					</p>	
			</div>
		</div>
	<?php
		}
	}
	else {
		 echo " :/ Désolé, il n'y a pas d'offre correspondant avec votre recherhce <br />Rentouner sur la page d'accueil saisir une autre recherche. <br/> <a href='Accueil.php'>Retour à la page d'accueil</>\n";
		}					  				
	?>
</div>  <!-- fin du wrap -->

</div>
</div>
<?php include("footer.php");?>


</div><!-- container-->
</div> <!-- site content-->
<div class="site-cache" id="site-cache"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/responsive_header.js"></script>
</div> <!-- site pusher-->
</div> <!-- site container-->
	</body>
</html>