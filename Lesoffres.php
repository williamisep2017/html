<!DOCTYPE html>
<?php session_start(); ?>

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
	<?php include("connexion_bdd.php"); 
$annonce = $bdd->query("SELECT * FROM annonce ORDER BY date_ajout DESC");

//$produits= $annonce->fetch();
foreach ($annonce as $produits) {?>
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
	<?php echo $produits['NOM']; ?></br>
	Quantité : <?php echo $produits['qte']; ?></br>
	Quotas : <?php echo $produits['pdsKg']; ?></br>
	Prix (au killo) : 5 € le killo</br>
	Rammassé le <?php echo $produits['NOM']; ?></br>
 
Description:</br>
<?php echo $produits['NOM']; ?> rammassées le <?php echo $produits['date_ajout']; ?></br>
			</p>

			<div class="rectangle-offre">
		<a href="pageoffre.html"> voir l'offre
		</a>
		</div>
		</div>
		
</div>
</br>
</br>
</br>
<?php } $annonce->closeCursor();?>

<!--///////////////////////////////////////////////////////////////////////////////
//////////////////////////////      annonces 2  /////////////////////
///////////////////////////////////////////////////////////////////////////////////-->









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