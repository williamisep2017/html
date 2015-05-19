<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1; user-scalable=0"/>
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="css/header1-responsive.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>
		<body>





<?php
 
  {
  	
    $sql = "SELECT * FROM annonce WHERE NOM LIKE '%". stripslashes( $articles ) . "%'"; // stripslashs =(evite les injections SQL)
    // Création d'une variable sql qui selectionne toute les infos de la table 'produit' et qui compare le login de la bbd avec le mot taper par l'utilisateur ('%le mot en question%')
    $action = mysql_query( $sql, $connect) OR die( "Impossible d'exécuter la requête !" ); // Envoie la requête au serveur MySQL avec en paramètre la bdd et la table
    

    $nbr_resultat = mysql_num_rows( $action ); // compte le nombre de résultats 
    

    if( $nbr_resultat > 0 )  //cherche le nombre de résultats trouvé
    {

      echo "<b>$nbr_resultat</b> article(s) trouvé.<br /><br/>\n";// On commence notre boucle avec le tableau avec en parametre notre $action qui rassemble $sql + $connect

      while( $affichage = mysql_fetch_array( $action ) ) // retourne un tableau contenant la ligne demandé dans le résultat
      {
       echo " NOM du produit : " . $affichage["NOM"] . "</b><br />\n"; 
       echo "Choix de vente : " . $affichage["choix_vente"] . "<br />\n"; 
       echo "Choix du produit : ". $affichage["choix_produits"] . "<br />\n<br />\n"; 
       echo "Poids au kilos " . $affichage["pdsKg"] . "<br />\n";
       echo "Poids en gramme : " . $affichage["pdsG"] . "<br />\n";
       echo "Quantité : " . $affichage["qte"] . "<br />\n";  
       echo "Commentaires : " . $affichage["comment"] . "<br />\n<br />\n"; 	
      }

      mysql_free_result( $action ); //libère le résultat de la mémoire
    }
    else 
      echo " Pas de résultats pour votre recherche<br />Refaire une recherche en cliquant <a href='Lesoffres.php'>ici</>\n";
  }
?>
			


	</body>
</html>