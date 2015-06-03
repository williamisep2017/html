<!DOCTYPE html>
<?php session_start(); ?>

<html>
 <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/detail-offre.css" />
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

<!--///////////////////////////////////////////////////////////////////////////////
//////////////////////////////     Résultas   /////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////-->
<?php $id_annonce = $_GET['annonce']; ?>

<div class="wrap-depo">
	<div class ="offres">
		<h3 class="title-lesoffres">Détails de l'offre N°<?php echo $id_annonce; ?></h3>
	</div>


		<div class="liste-detail">	
			<?php include("connexion_bdd.php"); ?>
<?php
				$annonce = $bdd->query("SELECT * FROM annonce INNER JOIN fruits ON annonce.NOM = fruits.fruit WHERE id_annonce='$id_annonce]'");
			
$annonce = $annonce->fetchAll();
		foreach ($annonce as $produits) {?>

	<div class="produit">	
			<div class="column-left">
					<img src="<?php echo $produits['image_fruit']?>" class="box-images"/>
					
					<div class="rectangle">
						<?php
							$annonce = $bdd->query("SELECT id_annonce FROM annonce");?>
							<?php echo'<a href="interface-mail.php?annonce='.$produits['id_annonce'].'">'?>
							Envoyer un mail au vendeur
							<?php '</a>'; ?>
					</div>
					<div class="rectangle">
						<a href="interface-mail_echange.php"> Téléphone — <?php echo $produits['num_tel']; ?></a>
					</div>
					<div class="rectangle">
						<a href="Echanger.php"> + de détails</a>
					</div>
			</div>

		<div class="column-right">
			<h4 class="title-blocright">Ajouté le : <?php echo $produits['date_ajout']; ?></h4>
				<p class="description-offre">


					<span>Type d'offre : <?php echo $produits['choix_vente']; ?></span><br/>
					<?php echo $produits['choix_produits']; ?><br/>
					<span><?php echo $produits['NOM']; ?> </span><br/>
					Poids : <?php echo $produits['pdsKg']; ?>Kg et <?php echo $produits['pdsG']; ?>
					Quantité : <?php echo $produits['qte']; ?><br/>
					Prix (au killo) : 5 € le killo<br/>
					Lieu : <?php echo $produits['REGIONS'];?> — <?php echo $produits['VILLES'];   ?><br/>
					Commentaire :</br>
					<?php echo $produits['comment']; ?>

	
				
				</p>	
		</div>	
	</div>
<?php } $annonce->closeCursor();?>


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