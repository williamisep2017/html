<?php session_start();?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
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
					<a href="#">
					<div class="box-new" style="background-image:url(images/fraise2.jpg);">
							<h4 class="paragraph_white-text">Tomate, <br/> Prix 5 euros <br/> poids: <?php echo $produits['pdsKg']?>kg <br/> quantité: 1</h4>
							<p class="link_offre-new"><a href="">Voir l'offre &gt;</a></p>
					</div></a>
					<?php } ?>
    			</div>
    	</div>
   


    </body>
</html>



