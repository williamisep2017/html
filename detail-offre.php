<!DOCTYPE html>
<?php session_start(); ?>

<html>
 <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/detail-offre.css" />
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

<div class="wrap">
	<div class ="detail">
		<h3 class="title-detail">Détails de l'offre N°<?php echo $_GET['annonce']; ?></h3>
	</div>


		<div class="liste-detail">	
			<?php include("connexion_bdd.php"); ?>
<?php
				$reponse = $bdd->query("SELECT * FROM annonce WHERE id='$id_annonce]'");
				echo '<p>Voici les informations concernant cette annonce :</p>';
				while ($donnees = $reponse->fetch())
					{?>
						<p>Le vendeur propose de <?php echo $donnees['choix_vente']; ?> 
							des <?php echo $donnees['NOM']; ?>s (<?php echo $donnees['choix_produits']; ?>).
						Poids approximatif par lot : : <?php echo $donnees['pdsKg'], $donnees['pdsG']; ?>Grammes.<br/>
						Nombres de lots : <?php echo $donnees['qte']; ?><br/>
						Prix proposé : <?php echo $donnees['prix']; ?>.<br/>
						————————————<br/>
						Commentaire du vendeur :<br/>
						<?php echo $donnees['comment']; ?><br/>
						————————————<br/>
						Cordonnée et lieux de vente: <?php echo $donnees['adress_vente']; ?>.
						</p>

					<?php } ?>


<?php
				$reponse->closeCursor();
?>


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