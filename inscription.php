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
    
<script type="text/javascript">
<!--
function verifPseudo(champ)
{
   if(champ.value.length < 2 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifPass(champ)
{
   if(champ.value.length < 6 || champ.value.length > 255)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function verifForm(f)
{
   var pseudoOk = verifPseudo(f.pseudo);
   var mailOk = verifMail(f.mail);
   var pass1Ok = verifAge(f.password1);
   

   if(pseudoOk && mailOk && pass1Ok)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}




-->
</script>
    </head>
   

    <body>


<!--/////////////////////////////////////////////////////////////
//////////////////////////////     HEADER.php  //////////////////
/////////////////////////////////////////////////////////////////-->
<?php include("header2.php"); ?>

<!--/////////////////////////////////////////////////////////////
//////////////////////////////     CONTENT  /////////////////////
/////////////////////////////////////////////////////////////////-->
<div class="centrage">
		
			<section> 
				<h1> Créer votre compte ProxiPotage </h1>
				 <div id="zone-inscription">
					<form method ="post" action="traitement_inscription.php" onsubmit="return verifForm(this)">
						<div class="wrap">
							<div class="wrap2">
								<p>
							<!--<label>Nom:</label> </br>--> <input class="identite" type="text" name="pseudo" placeholder="Nom complet / Pseudo" onblur="verifPseudo(this)" required> <!--<input class="identite" type="text" name="nom" placeholder="Nom" required> -->
							<!--<label>Localisation automatique:</label>    <input href="#" type="checkbox" /><label>autoriser</label>  </br></br>-->
							<!--<label>Adresse:</label> <input id="localisation" type="text" name="localisation" placeholder="Adresse exemple : 52 Avenue du Général Leclerc"></br></br>-->

							<!-- <label>Adresse mail:</label></br>--> <input id="mail" type="email" name="mail" placeholder="Adresse Mail"  onblur="verifMail(this)" required> 
							<!--<label>Mot de passe:</label></br>--> <input id="password1" type="password" name= "password1" placeholder="Mot de passe (6 carractères minimum)" onblur="verifPass(this)" required> 
							<!--<label>Confirmation Mot de passe:</label></br>--> <input id="password2" type="password" name= "password2" placeholder="Confirmation mot de passe"required>  
							<!--<label>Numéros de téléphone</label>:<input id="number" type="tel" name="numéros" placeholder="Télephone">--></br>  
							<input type="checkbox"  id="conditions-utilisation"  name="connditions" required/> <label class="condition1" for="conditions-utilisation" required>J'accepte les <a href="#" class="condition">Condition d'utilisation</a> et les <a href="#" class="condition">Règles de confidentialitées</a> de ProxiPotage </label>
							<input name="envoyer" class="bouton_inscrire" type="submit" value="Valider" /></br>
							</p>
						</div>
					</div>
					</form>
				</div>
			</section>
</div>


<footer>
	
</footer>


	</body>
</html>