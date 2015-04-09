<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="style.css" />
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
//////////////////////////////     HEADER-BOTTOM  ///////////////
/////////////////////////////////////////////////////////////////-->

		<section class="header-bottom">
			<div class="header-bottom_bienvenue">
				<h1>Bienvenue sur ProxiPotage,</h1>
				<p>votre potager à proximité de chez vous !</p>

			</div>
				<div id="header-bottom_inscription-txt">
				<a href="connexion.php">Se Connecter  | </a>
				<a href="inscription.php">S'inscrire</a> 
				</div>
					
		</section>

		<section class="clic">
			<a href="Lesoffres.php">
						<div class="clic_bouton"> 
							Consulter les offres
						</div>
					</a>
					<a href="depot_offre.php">
						<div class="clic_bouton"> 
							Déposer une annonce
						</div>
					</a>
		</section>

<!--/////////////////////////////////////////////////////////////
//////////////////////////////     MAIN-CONTENT  ///////////////
/////////////////////////////////////////////////////////////////-->
<section class="presentation">
			<div class="presentation-text">
				<h2>ProxiPotage : Achat, Echange de fruits et légumes entre particulier</h2>
				<p>Avec Proxipotage acheter, échanger ou vendez des fruits et légumes fraichement rammassés. 
				Que ça soit votre propre culture ou celle d'un autre, profiter d'internet pour acheter, échanger ou vendre
				des produits sains. 
				</p>

				<a href="#">
					<div class="presentation-text_bouton"> 
						En savoir plus
					</div>
				</a>

			</div>
			
	    	<img src="images/tomate1200x750.jpg" class="presentation-picture"/>
   	
</section>



<div class="wrap">
	<div class="content">	
<div class="cb"></div>
		<h1>Parcourir les offres récemment mis en ligne</h1>
		<p>ProxiPotage vous permet en un clin d'oeil de voir les derniers offres mis en ligne par les internautes ! De nouvelles récoltes qui vous raviront les papilles.
		</p>
	</div>
		<section class="recement-mis-ligne">		
					<div id="global">
						<table>
							<tr>
							<td><img src="images/petitpois.jpg" class="AR-logo"/></td>
							<td><img src="images/pommeterre.jpg" class="AR-logo"/></td>
							<td><img src="images/HARICOT.jpg" class="AR-logo" ></td>
							<td><img src="images/FRAISE.jpg" class="AR-logo" ></td>
							<td><img src="images/pommes-granny.jpg" class="AR-logo"/></td>
							<td><img src="images/ARTUCHOT.jpg" class="AR-logo"/></td>
							<td><img src="images/oranges.jpg" class="AR-logo"/></td>
							<td><img src="images/ARTUCHOT.jpg" class="AR-logo"/></td>
							<td><img src="images/ARTUCHOT.jpg" class="AR-logo"/></td>
							<td><img src="images/ARTUCHOT.jpg" class="AR-logo"/></td>
							<td><img src="images/ARTUCHOT.jpg" class="AR-logo"/></td> 
							</tr>

							<tr>
								<td>	
									<a href="#">
										<div class="rectangle">
											<h3>Voir l'offre</h3>
										</div>
									</a>
								</td>

								<td>
									<a href="#">
										<div class="rectangle">
											<h3>Voir l'offre</h3>
										</div>
									</a>
								</td>

								<td>
									<a href="#">
										<div class="rectangle">
											<h3>Voir l'offre</h3>
										</div>
									</a>
								</td>

								<td>
									<a href="#">
										<div class="rectangle">
											<h3>Voir l'offre</h3>
										</div>
									</a>
								</td>

								<td>
									<a href="#">
										<div class="rectangle">
											<h3>Voir l'offre</h3>
										</div>
								</td>	
								
								<td>
									<a href="#">
										<div class="rectangle">
											<h3>Voir l'offre</h3>
										</div> 
								</td>
								
								<td>
									<a href="#">
										<div class="rectangle">
											<h3>Voir l'offre</h3>
										</div>
								</td>
								
								<td>
									<a href="#">
										<div class="rectangle">
											<h3>Voir l'offre</h3>
										</div>
								</td>
								
								<td>
									<a href="#">
										<div class="rectangle">
											<h3>Voir l'offre</h3>
										</div>
								</td>

								<td>
									<a href="#">
										<div class="rectangle">
											<h3>Voir l'offre</h3>
										</div>
								</td>
								
								<td>
									<a href="#">
										<div class="rectangle">
											<h3>Voir l'offre</h3>
										</div>

								</td>
							</tr>
						</table>
					</div>						
		</section>
			
		<div id="bouton-voir-toutes-les-offres"> 
						<p>Voir toutes les offres</p> 
		</div>
</div>

		



<!--/////////////////////////////////////////////////////////////
//////////////////////////////     FOOTER   /////////////////////
/////////////////////////////////////////////////////////////////-->
		<footer>
			<table class="tabcenter-footer">
				<tr>
					<td> <a href="#" class="footer-txt">Plan du site</a> </td>
					<td> <a href="#" class="footer-txt">A Propos</a> </td>
					<td> <a href="Aide.php" class="footer-txt">Aide</a> </td>
				</tr>
			</table>
		</footer>


   	</body>
</html>
