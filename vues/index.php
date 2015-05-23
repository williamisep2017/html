<?php
//On démarre la session
session_start();
 
//On se connecte à MySQL
require("contrôleurs/connexion_bdd");

 ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta id="viewport" name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/Accueil.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>

 <body>


 <?php

 
//On inclut le contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('contrôleurs/'.$_GET['page'].'.php'))
{
        include 'contrôleurs/'.$_GET['page'].'.php';
}
else
{
        include 'contrôleurs/Accueil.php';
}
 
//On inclut le pied de page
?>
<footer>
	<?php include("vues/footer.php"); ?>
</footer>

</body>
<html>
	<?php 
//On ferme la connexion à MySQL
/*mysql_close();*/

// Réinitialisation du tableau de session
// On le vide intégralement
$_SESSION = array();
// Destruction de la session
session_destroy();
// Destruction du tableau de session
unset($_SESSION);
include ('vues/Accueil.php');