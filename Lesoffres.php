<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="Lesoffres.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>
<!--/////////////////////////////////////////////////////////////////////////////
//////////////////////////////     HEADER   /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////-->


<a href="index.php" >
	
    <body>
 <!--/////////////////////////////////////////////////////////////
//////////////////////////////     HEADER.php  /////////////////////
/////////////////////////////////////////////////////////////////-->
<?php include("header1.php"); ?>
<div class="cb"></div>  	
  


<!--/////////////////////////////////////////////////////////////////////////////
//////////////////////////////     Bloc recherche avancée   /////////////////////
/////////////////////////////////////////////////////////////////////////////////-->



<div class="recherche-avance">
	<div class="wrap">
			<h1>Recherche avancée</h1>
			
					<div class="liste">
						<div class="liste-left">
							<h2> Produit</h2>
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
							<h2>lieu</h2>
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




<!--///////////////////////////////////////////////////////////////////////////////
//////////////////////////////     Les différentes annonces   /////////////////////
///////////////////////////////////////////////////////////////////////////////////-->
<div class="wrap">

	<div class ="offres">
		<h3>Les offres</h3>
	</div>
<div class="produit">
	<div class="column-left">
	<td>
		<img src="images/petitpois.jpg" class="AR-logo"/></td>
		
		<div class="rectangle">
			<a href="Acheter.php"> Achat
		</a>
		</div>
		<div class="rectangle">
			<a href="Echanger.php"> Echange
		</a>
		</div>


		</div>
				<div class="column-right">
			<p>
				Information sur le produit :</br>
	Petit pois</br>
	Quantité : 2 kg</br>
	Quotas : 1 kg</br>
	Prix (au killo) : 5 € le killo</br>
	Rammassé le ../../..</br>
 
Description:</br>
Petit pois rammassées ce matin dans mon jardin, sans traitement...</br>
			</p>
			<div class="rectangle-offre">
		<a href="pageoffre.html"> voir l'offre
		</a>
		</div>
		</div>

</div>

<!--///////////////////////////////////////////////////////////////////////////////
//////////////////////////////      annonces 2  /////////////////////
///////////////////////////////////////////////////////////////////////////////////-->
</br>
</br>
</br>




<div class="produit">
	<div class="column-left">
	<td>
		<img src="images/FRAISE.jpg" class="AR-logo"/></td>
		
		<div class="rectangle">
			<a href="pageoffre.html"> Achat
		</a>
		</div>
		<div class="rectangle">
			<a href="pageoffre.html"> Echange
		</a>
		</div>


		</div>
				<div class="column-right">
			<p>
				Information sur le produit :</br>
	Fraise</br>
	Quantité : 5 kg</br>
	Quotas : 1 kg</br>
	Prix (au killo) : 5 € le killo</br>
	Rammassé le ../../..</br>
 
Description:</br>
Fraises rammassées ce matin dans mon jardin, sans traitement...</br>
			</p>
			<div class="rectangle-offre">
		<a href="pageoffre.html"> voir l'offre
		</a>
		</div>
		</div>

</div>



<div class="cb"></div>


</div>  <!-- fin du wrap -->



<!--/////////////////////////////////////////////////////////////
//////////////////////////////     FOOTER   /////////////////////
/////////////////////////////////////////////////////////////////-->


<footer>
	<table class="tabcenter-footer"><tr>
		<td> <a href="#" class="footer-txt">Plan du site</a> </td>
		<td> <a href="#" class="footer-txt">A Propos</a> </td>
		<td> <a href="#" class="footer-txt">Aide</a> </td>
	</tr></table>
</footer>

	</body>
</html>