<?php session_start();?>


<?php
include("connexion_bdd.php");

if(isset($_POST['searchpush']))
	{
		$REGIONS=($_POST['REGIONS']);
		$VILLES=($_POST['VILLES']);
		$fruits=($_POST['fruit']);




		?>
		<div class="wrap-lesoffres">
	<div class ="offres">
		<h3 class="title-lesoffres">Les offres</h3>
	</div>
	
	<?php
		$annonce = $bdd->query("SELECT * FROM annonce  WHERE fruit='figue' AND REGIONS='Alsace' AND VILLES='Paris' ORDER BY date_ajout DESC");
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
<?php } $annonce->closeCursor();?>
</div>  <!-- fin du wrap -->


<?php


			
	}

?>