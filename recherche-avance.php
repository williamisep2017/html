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
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>

<body>

<!--/////////////////////////////////////////////////////////////////////////////
//////////////////////////////     Bloc recherche avancée   /////////////////////
/////////////////////////////////////////////////////////////////////////////////-->
<div class="recherche-avance">
	<div class="wrap">
			<h1 class="title-recherche-avance">Recherche avancée</h1>
			
					<div class="liste">
						<div class="liste-left">
							<h2 class="title-bis"> Produit</h2>
				    			<FORM>
							    	<SELECT class="liste-fruit"name="les produits" size="1">
							    		<OPTION selected>Fruits
							    		<OPTION>Choux
							    		<OPTION>Tomate
							    		<OPTION>Pomme
							    		<OPTION>salade
							    		<OPTION>carotte    <!-- certainement faire UNE option avec une vairable $produits -->
							    	</SELECT>
				    			</FORM>
				    			<FORM>
				    	<SELECT class="liste-legume"name="les produits" size="1">
				    		<OPTION selected>Légumes
				    		<OPTION>Aucun
				    		<OPTION>Tomate
				    		<OPTION>Pomme
				    		<OPTION>salade
				    		<OPTION>carotte    <!-- certainement faire UNE option avec une vairable $produits -->
				    	</SELECT>
				    			</FORM>
						</div>
			
						<div class="liste-right">
							<h2 class="title-bis">lieu</h2>
					  		<FORM>
				    			<SELECT class="liste-lieu"name="les lieux" size="1">
						    		<OPTION selected>Lieux
						    		<OPTION>Aucun
						    		<OPTION>Tomate
						    		<OPTION>Pomme
						    		<OPTION>salade
						    		<OPTION>carotte    <!-- certainement faire UNE option avec une vairable $produits -->
				    			</SELECT>
				    		</FORM>
				    		<FORM>
				    			<SELECT class="liste-producteur"name="les producter" size="1">
						    		<OPTION selected>producteurs
						    		<OPTION>Aucun
						    		<OPTION>Tomate
						    		<OPTION>Pomme
						    		<OPTION>salade
						    		<OPTION>carotte    <!-- certainement faire UNE option avec une vairable $produits -->
				    			</SELECT>
				    		</FORM>
							</div>
					
					</div>	
	</div>
</div>
</body>
</html>

