<?php session_start(); ?>
<!DOCTYPE html>
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

<?php
include("connexion_bdd.php");

if(isset($_GET['searchpush'])){
		?>
		<div class="wrap-lesoffres">
	<div class ="offres">
		<h3 class="title-lesoffres">Les offres correspondantes à votre recherche</h3>
	</div>
	
	<?php
		$annonce = $bdd->query("   SELECT * FROM annonce  INNER JOIN fruits ON annonce.NOM = fruits.fruit 
								WHERE   NOM='".$_GET['NOM']."' OR REGIONS='".$_GET['REGIONS']."' OR VILLES='".$_GET['VILLES']."'
								ORDER BY date_ajout DESC");

		//$annonce = $bdd->query("SELECT * FROM annonce  WHERE NOM='".$_GET['NOM']."' OR  REGIONS='".$_GET['REGIONS']."' OR VILLES='".$_GET['VILLES']."' ");
		//echo "SELECT * FROM annonce  WHERE NOM='".$_GET['NOM']."' AND  REGIONS='".$_GET['REGIONS']."' AND VILLES='".$_GET['VILLES']."' ";
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
					Poids : <?php echo $produits['pdsKg']; ?>Kg et <?php echo $produits['pdsG']; ?>g
					Quantité : <?php echo $produits['qte']; ?><br/>
					Prix (au killo) : 5 € le killo<br/>
					Lieu : <?php echo $produits['REGIONS'];?> — <?php echo $produits['VILLES'];   ?><br/>
					Commentaire :</br>
					<?php echo $produits['comment']; ?>

				</p>	
		</div>	
	</div>
<?php 	
}
	
}
?>
</div>  <!-- fin du wrap -->



</body>
</html>
