
<!DOCTYPE html>
<html>
    <head>
        <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/connexion.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>
<a href="accueil.php" >
		<img src="images/LogoPPblacknom2.png" class="header-logo"/>
	</a>
    <body>
<div align="center">
			<section >  
				 <fieldset class="zone-connexion">
				 	</br> 
				<p class = "bienvenue">  Bienvenue ! </p>
					<form  action="traitement_connexion.php"  method ="post"> 
						<p>  
						 <input class="rect_input" type="email" name="adresse_mailconnect" placeholder="   Entrez votre Adresse Email"> </br> </br> 
						 <input class="rect_input" type="password" name= "mot_de_passeconnect" placeholder="  Tapez votre mot de passe"></br>  
						</p>
						<input href="inscription.php" class="bouton_connexion" type="submit" value="Se connecter" name="formconnexion">
					</form> <br/> <br/>
					<a href="inscription.php" class="Supp"> Créer un compte </a> </br> </br> 
					<a href="#" class="Supp"> Mot de passe oublié</a>
				</fieldset>
			</section> 	
</div>
		</body>	
</html>	