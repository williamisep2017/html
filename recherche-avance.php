<div class="recherche-avance">
	<div class="wrap">
		<form method="GET" action="traitement_recherche_avance.php">
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
					<?php
					if (isset($_GET['msg']))
		{
			echo $_GET['msg'];
		}?>
			</form>
	</div>
</div>


