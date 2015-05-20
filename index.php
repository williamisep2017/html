<?php
//On démarre la session
session_start();
 
//On se connecte à MySQL
try
	{
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Proxipotage;charset=utf8', 'root', 'root');

	}
catch(Exception $e)
	{
       die('Erreur : '.$e->getMessage());
	}

 
//On inclut le logo du site et le menu
include 'vues/logo.php';
include 'vues/menu.php';
 
//On inclut le contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('contrôleurs/'.$_GET['page'].'.php'))
{
        include 'contrôleurs/'.$_GET['page'].'.php';
}
else
{
        include 'contrôleurs/accueil.php';
}
 
//On inclut le pied de page
include 'vues/pied.php';
 
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