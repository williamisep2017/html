<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8" />
        <title>Inscription</title>
		<link rel = "stylesheet" href="inscription.css" />
    </head>

    <body>


<!--/////////////////////////////////////////////////////////////
//////////////////////////////     HEADER.php  /////////////////////
/////////////////////////////////////////////////////////////////-->
<?php include("header1.php"); ?>


<!--/////////////////////////////////////////////////////////////
//////////////////////////////     CONTENT  /////////////////////
/////////////////////////////////////////////////////////////////-->
			<div class="centrage">
				</br></br><h1 class= h1-inscription> Créer votre compte ProxiPotage </h1>
			<section>  
				 <fieldset class="zone-inscription">
				<h2 class = h2-inscription>  Vos coordonnées </h2>
					<form method ="post" action="traitement.php"> 
						<p>
							<label id="label">Nom:</label> </br> <input id="identite2" type="text" name="prénom" placeholder="   Prénom" required> <input id="identite2" type="text" name="nom" placeholder="   Nom" required>     </br></br>
							<label>Localisation automatique:</label>    <input href="#" type="checkbox" /><label>autoriser</label>  </br></br>
							<label class="label">Adresse:</label> <input id="nom-rue" type="text" name="adresse1" placeholder="           			exemple : 52 Avenue du Général Leclerc"></br></br>
							<label class="label">Adresse mail:</label></br> <input id="mail" type="email" name="mail" required> </br></br>  
							<label class="label">Mot de passe:</label></br> <input id="password1" type="password" name= "mot de passe" required></br></br>  
							<label class="label">Confirmation Mot de passe:</label></br> <input id="password2" type="password" name= "confirmation Mot de passe" required> </br></br>  
							<label >Numéros de téléphone</label>: <input id="number" type="tel" name="numéros"></br>  
						</p>
						<input href="#" class="bouton_inscrire" type="submit" value="S'inscrire" /></br></br></br>
						<input type="checkbox"  id="conditions-utilisation" required name="connditions"  /> <label for="conditions-utilisation" required>J'accepte les <a id="conditions">conditions d'utilisation</a> et les <a id="conditions">Règles de confidentialité</a> de ProxiPotage </label></div>
					</form>
				</fieldset>
			</section> 


<footer>
	<table class="tabcenter-footer"><tr>
		<td> <a href="#" class="footer-txt">Plan du site</a> </td>
		<td> <a href="#" class="footer-txt">A Propos</a> </td>
		<td> <a href="#" class="footer-txt">Aide</a> </td>
	</tr></table>
</footer>


	</body>
</html>