<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/Pres_chez_vous.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>

    <body>
<!--/////////////////////////////////////////////////////////////
//////////////////////////////     HEADER.php   /////////////////////
/////////////////////////////////////////////////////////////////-->
<?php include("header1.php"); ?>

<!--/////////////////////////////////////////////////////////////
//////////////////////////////     content   /////////////////////
/////////////////////////////////////////////////////////////////-->
<div class="wrap">

	<div class="title">
		<h1>Consultez les offres près de chez vous</h1>
	</div>
		<div class="content">
			<div class="column-left">
				<div class="sous-title">
					<h2>Renseignez une adresse</h2>
				</div>

					<section class="local-search">
						<form class="region" method="post" action="traitement.php">
							   <p>
							   <label for ="region"> Région : </label> <input type="text" name="region" id="Region" placeholder="Région"/>
							   </p>
						</form>
						<form class="codeP" method="post" action="traitement.php">
							   <p>
							   <label for ="codeP"> Code P : </label> <input type="text" name="codeP" id="codeP" placeholder="codeP"/>
							   </p>
						</form>
						<form class="ville" method="post" action="traitement.php">
							   <p>
							   <label for ="ville"> Ville : </label> <input type="text" name="ville" id="ville" placeholder="Ville" />
							   </p>
						</form>

					</search>
			</div>
			<div class ="column-right">
				<div class="sous-title">
					<h2>Connectez-vous pour découvrir les offres près de chez vous</h2>
					<div class="box-co">
					<a href="connexion.php" > 
						<div class="co">Connectez-vous
						</div> </a></br>
						<a href="inscription.php" > Pas encore inscrit ?
						</a>
					</div>
				</div>
			</div>
		</div>
</div>








<!--/////////////////////////////////////////////////////////////
//////////////////////////////     footer   /////////////////////
/////////////////////////////////////////////////////////////////-->


    </body>