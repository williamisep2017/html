<!DOCTYPE html>
<html>

<!--/////////////////////////////////////////////////////////////////////////////
//////////////////////////////     HEADER   /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////-->
<head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="Lesoffres.css" />
    </head>

<a href="index.html" >
	
    <body>

				Information sur le produit</br>
<?php
 $connect = mysqli_connect( "localhost", "root", "root","Proxipotage" ) OR die( "la co a la bdd a ap marcher.<br />\nErreur MySQL '" . "'" );
 
 $articles=$_GET['recherche'];

    $sql = "SELECT * FROM annonce WHERE NOM LIKE '%$articles%'"; // stripslashs =(evite les injections SQL)
    // Création d'une variable sql qui selectionne toute les infos de la table 'produit' et qui compare le login de la bbd avec le mot taper par l'utilisateur ('%le mot en question%')
    $action = mysqli_query($connect,$sql) OR die( "Impossible d'exécuter la requête !" ); // Envoie la requête au serveur MySQL avec en paramètre la bdd et la table
    $nbr_resultat = mysqli_num_rows( $action ); // compte le nombre de résultats 
    if( $nbr_resultat > 0 )  //cherche le nombre de résultats trouvé
    {

      echo "<b>$nbr_resultat</b> article(s) trouvé.<br /><br/>\n";// On commence notre boucle avec le tableau avec en parametre notre $action qui rassemble $sql + $connect

      while( $affichage = mysqli_fetch_array( $action ) ) // retourne un tableau contenant la ligne demandé dans le résultat
      {
                echo " id du produit : " . $affichage["id"] . "</b><br />\n"; 
                ?>
                <?php $affichage["id"]=$idoffre;
                echo " id du produit 2 : " . $idoffre . "</b><br />\n"; ?>
                <?php

        echo " NOM du produit : " . $affichage["NOM"] . "</b><br />\n"; 
         echo "Choix de vente : " . $affichage["choix_vente"] . "<br />\n"; 
       echo "Choix du produit : ". $affichage["choix_produits"] . "<br />\n<br />\n"; 
       echo "Poids au kilos " . $affichage["pdsKg"] . "<br />\n";
       echo "Poids en gramme : " . $affichage["pdsG"] . "<br />\n";
       echo "Quantité : " . $affichage["qte"] . "<br />\n";  
       echo "Commentaires : " . $affichage["comment"] . "<br />\n<br />\n"; 	
      }

      //mysqli_free_result( $action ); //libère le résultat de la mémoire
    }
    else {
      echo " Pas de résultats pour votre recherche<br />Refaire une recherche en cliquant <a href='Lesoffres.php'>ici</>\n";
  }
?>


	</body>
</html>