<?php session_start();?>



<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Enregistrement de l'annonce dans la basse de donnée   //////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<?php

//Connection au serveur de base de donnée
include("connexion_bdd.php");
// Vérification de la validité des informations
if(isset($_POST['formpush']))
	{
		/*if(isset($_POST['choix_vente']) AND !empty($_POST['choix_vente'])
			AND isset($_POST['choix_produits']) AND !empty($_POST['choix_produits'])
			AND isset($_POST['NOM']) AND !empty($_POST['NOM'])
			AND isset($_POST['pdsKg']) AND !empty($_POST['pdsKg'])
			AND isset($_POST['pdsG']) AND !empty($_POST['pdsG'])
			AND isset($_POST['qte']) AND !empty($_POST['qte']))
		{*/
			
			

				//Tous les champs obligatoire  sont remplis
				$choix_vente=mysql_real_escape_string($_POST['choix_vente']);
				$choix_produits=mysql_real_escape_string($_POST['choix_produits']);
				$NOM=mysql_real_escape_string($_POST['NOM']);
				$pdsKg=mysql_real_escape_string($_POST['pdsKg']);
				$pdsG=mysql_real_escape_string($_POST['pdsG']);
				$qte=mysql_real_escape_string($_POST['qte']);
				$comment=mysql_real_escape_string($_POST['comment']);
				$adresse_de_vente=mysql_real_escape_string($_POST['adresse_de_vente']);
<<<<<<< HEAD


					$req = $bdd->prepare('INSERT INTO annonce(adresse_de_vente, userid, choix_vente, choix_produits, NOM, pdsKg, pdsG, qte, comment, date_ajout) VALUES(:adresse_de_vente, :userid, :choix_vente, :choix_produits, :NOM, :pdsKg, :pdsG, :qte, :comment, NOW())');
=======
				

					$req = $bdd->prepare('INSERT INTO annonce(adresse_de_vente, userid, choix_vente, choix_produits, NOM, pdsKg, pdsG, qte, comment, date_ajout) 
						VALUES(:adresse_de_vente, :userid, :choix_vente, :choix_produits, :NOM, :pdsKg, :pdsG, :qte, :comment, NOW())');
>>>>>>> origin/master
					$req->execute(array(
							'adresse_de_vente' => $adresse_de_vente,
							'userid'=> $_SESSION['id'],
			   			 	'choix_vente' => $choix_vente,
			    			'choix_produits' => $choix_produits,
			    			'NOM' => $NOM,
			    			'pdsKg' => $pdsKg,
			    			'pdsG' => $pdsG,
			    			'qte' => $qte,
			    			'comment' => $comment));

					echo 'Votre annonce a été enrigestrée';
					//include("index.php");
			}
		/*			
		else{
					$erreur='Tous les champs sont obligatoire.';
			}
		}*/
	
	
			?>

<?php
if(isset($erreur)) {
	echo 'Erreur : '. $erreur;
}
?>

<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Fin de l'enregistrement de l'annonce dans la basse de donnée   //////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->