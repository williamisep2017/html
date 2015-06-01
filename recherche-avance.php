<!DOCTYPE html>
<?php session_start(); ?>

<html>
 <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/recherche-avance.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
  </head>

<body>
<div class="recherche-avance">
	<div class="wrap">
		<form metode="POST" action="traitement_recherche(avance).php">
			<h1 class="title-recherche-avance">Recherche avancée</h1>
			
					<div class="liste">
						<div class="liste-left">
							<h2 class="title-bis"> Produit</h2>
				    			<select name="NOM" style="width:200px">
				    				<option selected>Fruits
												<?php
													include("connexion_bdd.php");	 
												 	$reponse = $bdd->query('SELECT * FROM fruits');
												 	foreach ($reponse as $donnees)	
													{
													?>
													<option value="<?php echo $donnees['fruit'] ?>"><?php echo $donnees['fruit'] ?></option>
												   <?php
												   	}
												   ?>
								</select> 
				    		 
						</div>
			
					<div class="liste-right">
							<h2 class="title-bis">lieu</h2>
					  						<select name="REGIONS" style="width:200px">
												<option selected>Régions
												<?php
												include("connexion_bdd.php");
												 	$reponse = $bdd->query('SELECT * FROM regions');
												 	foreach ($reponse as $donnees)	
													{
												?>	
												<option value="<?php echo $donnees['nom_regions'] ?>"><?php echo $donnees['nom_regions'] ?></option>
												   <?php
												   	}
												   ?>
											</select> 
											<select name="VILLES" style="width:200px">
												<option selected>Villes
												<?php
												include("connexion_bdd.php");	
												 	$reponse = $bdd->query('SELECT * FROM villes');
												 	foreach ($reponse as $donnees)	
													{
												?>	
												<option value="<?php echo $donnees['nom_villes'] ?>"><?php echo $donnees['nom_villes'] ?></option>
												   <?php
												   	}
												   ?>
											</select> 
				
							</div>
					</div>
					<input class="RA-button" name="searchpush" type="submit" value="Rechercher">
			</form>
	</div>
</div>
</body>
</html>

