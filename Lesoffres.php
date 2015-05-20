<!DOCTYPE html>
<?php session_start(); ?>

<html>
 <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/Lesoffres.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
   </head>
   
    <body>
 
<div class="site-container"> <!--Utile pour le responsive du header seulement-->
<div class="site-pusher"><!--Utile pour le responsive du header seulement-->

<?php include("header1-responsive.php"); ?>

<div class="site-content"><!--Utile pour le responsive du header seulement-->
	<div class="container"><!--Utile pour le responsive du header seulement-->


<?php include("recherche-avance.php"); ?>


<!--///////////////////////////////////////////////////////////////////////////////
//////////////////////////////     Les différentes annonces   /////////////////////
///////////////////////////////////////////////////////////////////////////////////-->
<div class="wrap-lesoffres">
	<div class ="offres">
		<h3 class="title-lesoffres">Les offres</h3>
	</div>
	
	<?php include("connexion_bdd.php");
		$annonce = $bdd->query("SELECT * FROM annonce ORDER BY date_ajout DESC");
		foreach ($annonce as $produits) {?>
	<div class="produit">	
			<div class="column-left">
					<img src="images/petitpois.jpg" class="box-images"/>
					
					<div class="rectangle">
						<?php
							$annonce = $bdd->query("SELECT * FROM annonce");?>
							<?php echo'<a href="interface-mail.php?annonce='.$produits['id'].'">'?>
							Achat
							<?php '</a>'; ?>
					</div>


					<div class="rectangle">
						<a href="interface-mail_echange.php"> Echanger</a>
					</div>
					<div class="rectangle">
						<a href="Echanger.php"> + de détails</a>
					</div>
			</div>

		<div class="column-right">
			<h4 class="title-blocright">Ajouté le : <?php echo $produits['date_ajout']; ?></h4>
				<p class="description-offre">
					<?php echo $produits['choix_produits']; ?></br>
					<span><?php echo $produits['NOM']; ?> </span></br>
					Poids : <?php echo $produits['pdsKg']; ?>Kg et <?php echo $produits['pdsG']; ?>g
					Quantité : <?php echo $produits['qte']; ?></br>
					Prix (au killo) : 5 € le killo</br>
					Lieu : <?php echo $produits['adresse_de_vente']; ?>
					<!--Commentaire :</br>
					<?php echo $produits['comment']; ?>-->
				</p>	
		</div>	
	</div>
<?php } $annonce->closeCursor();?>
</div>  <!-- fin du wrap -->


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