<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="inscription.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>
   

    <body>


<!--/////////////////////////////////////////////////////////////
//////////////////////////////     HEADER.php  /////////////////////
/////////////////////////////////////////////////////////////////-->
<?php include("header2.php"); ?>

<!--/////////////////////////////////////////////////////////////
//////////////////////////////     CONTENT  /////////////////////
/////////////////////////////////////////////////////////////////-->
<div class="centrage">
		
			<section> 
				<h1> Créer votre compte ProxiPotage </h1>
				 <div class="zone-inscription">
					<form method ="post" action="traitement_inscription.php">
						<div class="wrap">
						<p>
							<label>Nom:</label> </br> <input class="identite" type="text" name="prenom" placeholder="Prénom" required> <input class="identite" type="text" name="nom" placeholder="Nom" required>     </br></br>
							<!--<label>Localisation automatique:</label>    <input href="#" type="checkbox" /><label>autoriser</label>  </br></br>-->
							<label>Adresse:</label> <input id="localisation" type="text" name="localisation" placeholder="exemple : 52 Avenue du Général Leclerc"></br></br>
							<label>Adresse mail:</label></br> <input id="mail" type="email" name="mail" required> </br></br>  
							<label>Mot de passe:</label></br> <input id="password1" type="password" name= "mot de passe" required></br></br>  
							<label>Confirmation Mot de passe:</label></br> <input id="password2" type="password" name= "confirmation Mot de passe" required> </br></br>  
							<label>Numéros de téléphone</label>: <input id="number" type="tel" name="numéros"></br>  
						</p>

						<input href="#" class="bouton_inscrire" type="submit" value="S'inscrire" /></br></br></br>
						<input type="checkbox"  id="conditions-utilisation" required name="connditions"  /> <label for="conditions-utilisation" required>J'accepte les <a href="#" class="condition">Condition d'utilisation</a> et les <a href="#" class="condition">Règles de confidentialitées</a> de ProxiPotage </label></div>
					</div>
					</form>
				</div>
			</section>
</div>


<footer>
	
</footer>


	</body>
</html>