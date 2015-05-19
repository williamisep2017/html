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
    	<div class="wrap-new">
    		
    			<div class="column-new">
    				
    				<?php include("connexion_bdd.php");

					$annonce = $bdd->query("SELECT * FROM annonce ORDER BY date_ajout DESC LIMIT 12");
					foreach ($annonce as $produits) {?>
					
					<?php echo'<a href="detail-offre.php?annonce='.$produits['id'].'">' ?>  
						
						<div class="box-new" style="background-image:url(images/fraise2.jpg);">
								<div class="paragraph_white-text">
									<?php echo $produits['NOM']?><br/> 
									Prix:<?php echo $produits['prix']?>€<br/> 
									poids: <?php echo $produits['pdsKg']?>kg<?php echo $produits['pdsG']?>g<br/>
									quantité: <?php echo $produits['qte']?><br/> 
									<!--Voir l'offre &gt;-->
								</div>
						</div> 
					
					<?php '</a>'; ?>
					<?php } ?>
    			</div>
    	</div>
   
    </body>
</html>


<!--<div style="background-image: url('<?php //echo $query['background']; ?>');>
	style="background-image: url('RaccourcieVersDossierImg/<?php //echo $donneeImg['bg_image']; ?>')-->
