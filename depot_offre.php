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

<!--////////////////////////////////////////////////////////////////
//////////////////////////////     HEADER.php  /////////////////////
////////////////////////////////////////////////////////////////////-->
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
						<h2> Que souhaitez-vous faire?</h2>
					</div>
<form action="traitement_depot-offre.php" method="post">
	
						<section class="QVF">
							<div class="QVF-left">
								
									<input type="radio" name="choix_vente" value="Vendre"> Vendre
									<input type="radio" name="choix_vente" value="Echanger"> Echanger
									<input type="radio" name="choix_vente" value="Vendre et Echanger"> Vendre et Echanger
							</div>
									<div class="QVF-right">
										<div class="helpme">
											<a href="Aide.php" >?</a>
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
								<fieldset>
									<p>
										<label for="Cat"> Catégorie : </label>
											<input type="radio" name="choix_produits" value="Fruits"> Fruit
											<input type="radio" name="choix_produits" value="Légumes"> légume </br>
										<label for"NOM"> Nom :</label> 
											<input type="text" name="NOM" id="NOM-detail_offre" placeholder="ex: Tomate" /> </br>
										<!-- <label for:"VAR"> Variété : </label> 
											<input type="text" name="VAR" id="VAR-detail_offre" placeholder="ex:Cerise" /> </br> -->
										<label for:"Poids"> Poids : </label> 
											<input name="pdsKg" id="Pds-detail_offre" type="number" min="0"/> <span> : Kilogrammes</span>
											<input name="pdsG" id="Pds-detail_offre" type="number" step="100" min="0"/> <span> : Grammes</span></br>
										<label for:"Poids"> Quantité : </label> 
											<input name ="qte" id="Pds-detail_offre" type="number" step="1" min="0")/></br>
										<label for:"Date"> Rammassé le : </label> <input id="NOM-detail_offre" type="date" name="date-ramassage"></br>
									</p>
								</fieldset>
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
								<fieldset>
						   			<p>
						   				<label id="label-exception" for="commentaire"> Ce commentaire apparaîtra dans l'annonce</label><br/>
											<textarea name="commentaire" id="comentaire-bloc"></textarea>
						   			</p>
								</fieldset>
							</div>

							<div class="commentaire-right">
								<div class="detail_offre-right">
									<div class="helpme"> 
										<a href="Aide.php" >?</a>
									</div>
								</div>
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

		<fieldset>
			<p>
				<input class="submit" type="submit" value="Continuer >" />
			</p>
		</fieldset>
		</div>



</form>


		</div>



<!--/////////////////////////////////////////////////////////////
//////////////////////////////     FOOTER.php  //////////////////
/////////////////////////////////////////////////////////////////-->

    </body>