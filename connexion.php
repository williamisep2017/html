
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Se connecter</title>
		<link rel = "stylesheet" href="connexion.css" />
    </head>
<a href="index.php" >
		<img src="images/LogoPPblacknom2.png" class="header-logo"/>
	</a>
    <body>
<div align="center">
			<section >  
				 <fieldset class="zone-connexion">
				 	</br> 
				<p class = "bienvenue">  Bienvenue ! </p>
					<form  action="traitement_connexion.php"  method ="post"  > 
						<p>  
						 <input class="rect_input" type="email" name="adresse_mail" placeholder="   Entrez votre Adresse Email"> </br> </br> 
						 <input class="rect_input" type="password" name= "mot_de_passe" placeholder="  Tapez votre mot de passe"></br>  
						</p>
						<input href="inscription.php" class="bouton_connexion" type="submit" value="Se connecter" >
					</form> <br/> <br/>
					<a href="inscription.php" class="Supp"> Créer un compte </a> </br> </br> 
					<a href="#" class="Supp"> Mot de passe oublié</a>
				</fieldset>
			</section> 	
</div>
		</body>	
</html>	