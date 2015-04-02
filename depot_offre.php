<html>
    <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="depot_offre.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>

    <body>
<!--/////////////////////////////////////////////////////////////
//////////////////////////////     HEADER.php  /////////////////////
/////////////////////////////////////////////////////////////////-->
<?php include("header1.php"); ?>




<!--/////////////////////////////////////////////////////////////
//////////////////////////////     CONTENU  /////////////////////
/////////////////////////////////////////////////////////////////-->

<div class="wrap">

<!--///////////////////////////
/////////    ETAPE 1   ////////
///////////////////////////////-->

	<div class ="title">
		<h1>Déposer une annonce</h1>
	</div>
	<div class="sous-title">
		<h2> Que souaitez-vous faire?</h2>
	</div>

	<section class="QVF">
		<div class="QVF-left">
		<FORM class="checkbox">
			<INPUT type="checkbox" name="choix1" value="1"> Vendre
			<INPUT type="checkbox" name="choix2" value="2"> Echanger
		</FORM>
		</div>
		<div class="QVF-right">
			<div class="helpme">
				<a href="Aide.html" >?</a>
			</div>
		</div>	
	</section>


	<div class="sous-title">
		<h2> Détail de l'offre</h2>
	</div>

<!--///////////////////////////
/////////    ETAPE 2   ////////
///////////////////////////////-->
	<section class="detail_offre">
		<div class="detail_offre-left">
		<form class="checkbox">
			<label for="Cat"> Catégorie : </label>
			<INPUT type="checkbox" name="choix1" value="1"> Fruit
			<INPUT type="checkbox" name="choix2" value="2"> légume
		</form>
		
		<form class="barre-detail_offre" method="post" action="traitement.php">
			<p>
				<label for"NOM"> Nom :</label> <input type="text" name="NOM" id="NOM-detail_offre" placeholder="ex: Tomate" />
			</p>
		</form>
		
		<form class="barre-detail_offre" method="post" action="traitement.php">
			<p>
				<label for:"VAR"> Variété : </label> <input type="text" name="NOM" id="VAR-detail_offre" placeholder="ex:Cerise" />
			</p>
		</form>

		<form class="barre-detail_offre" method="post" action="traitement.php">
			<p>
				<label for:"Poids"> Poids : </label> <input id="Pds-detail_offre" type="number" min="0"/> <span> : Kilogrammes</span>
														 <input id="Pds-detail_offre" type="number" step="100" min="0")/> <span> : Grammes</span>
				</p>
				<p>
				<label for:"Poids"> Quantité : </label> <input id="Pds-detail_offre" type="number" step="1" min="0")/>
			</p>
		</form>

		<form class="barre-detail_offre" method="post" action="traitement.php">
			<p>
				<label for:"Date"> Rammassé le : </label> <input id="NOM-detail_offre" type="date" name="Date">
			</p>
		</form>
	</div>

	<div class="detail_offre-right">
		<div class="helpme"> 
			<a href="Aide.html" >?</a>
	</div>
	</div>
</section>

<!--///////////////////////////
/////////    ETAPE 3   ////////
///////////////////////////////-->

<div class="sous-title">
		<h2> Commentaire (facultatif)</h2>
	</div>

<section class="commentaire">
		
	<div class="commentaire-left">
		<form method="post" action="traitement.php">
   			<p>
   				<label id="label-exception" for="commentaire"> Ce commentaire apparaîtra dans l'annonce</label>
   				<br/>
			<textarea name="comentaire" id="comentaire-bloc"></textarea>
   			</p>
		</form>
	</div>

	<div class="commentaire-right">
		<div class="detail_offre-right">
		<div class="helpme"> 
			<a href="Aide.html" >?</a>
	</div>
	</section>

<!--//////////////////////////////////////////////////
/////////   ETAPE 4 Information Personnelle   ////////
//////////////////////////////////////////////////////-->

<div class ="title2">
		<h1>Informations personnelles</h1>
	</div>
<section class="Identite">
	<div class="Identite-left">
		<h3>Localisation</h3>
	</div>
		<div class="Identite-right">
			<h3>Profil</h3>
	</div>

</section>

<!--///////////////////////////
/////////    VALIDER   ////////
///////////////////////////////-->

<div class="bouton">
<input class="submit" type="submit" value="Valider" />
</div>

</div>



<!--/////////////////////////////////////////////////////////////
//////////////////////////////     FOOTER.php  //////////////////
/////////////////////////////////////////////////////////////////-->



    </body>