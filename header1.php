<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="header1.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>

    <body>



<header class = "header">
			<a href="index.php" >
				<img src="images/pp_blanc.png" class="header-logo"/>
			</a>
				<nav class="nav-header">
					<a href="header1-responsive.php" class="menu-item">Forum</a>
					<a href="depot_offre.php" class="menu-item">Déposer une annonce</a>
					<a href="Lesoffres.php" class="menu-item">Les offres</a>
					<a href="Pres_chez_vous.php" class="menu-item">Près de chez vous</a>
					<a href="index.php" class="menu-item">Accueil</a>

						<div id="search">	
					<form class="barre-recherchetxt" method="post" action="traitement.php">
					   <p>
					 	<label id="label-header" for ="recherche">
						   		<!--<img src="images/loupe.png" <class="image-loupe">-->
						</label> <input class="input-recherche" type="text" name="recherche" id="recherche" placeholder="Recherche" style="height: 24px " />
							<input type="submit" value="">
					   </p>
					</form>
				</div>
				</nav>

		</header>
	</body>