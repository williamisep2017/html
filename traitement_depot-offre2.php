<?php session_start();?>
<?php

//Connection au serveur de base de donnée
include("connexion_bdd.php");
// Vérification de la validité des informations
if(isset($_POST['formpush']))
	{
		if(isset($_POST['choix_vente']) AND !empty($_POST['choix_vente'])
			AND isset($_POST['choix_produits']) AND !empty($_POST['choix_produits'])
			AND isset($_POST['NOM']) AND !empty($_POST['NOM'])
			AND isset($_POST['pdsG']) AND !empty($_POST['pdsG'])
			AND isset($_POST['REGIONS']) AND !empty($_POST['REGIONS'])
			AND isset($_POST['VILLES']) AND !empty($_POST['VILLES'])
			AND isset($_POST['qte']) AND !empty($_POST['qte']))
		{
			
			

				//Tous les champs obligatoire  sont remplis
				$choix_vente=mysql_real_escape_string($_POST['choix_vente']);
				$choix_produits=mysql_real_escape_string($_POST['choix_produits']);
				$NOM=mysql_real_escape_string($_POST['NOM']);
				$pdsKg=mysql_real_escape_string($_POST['pdsKg']);
				$pdsG=mysql_real_escape_string($_POST['pdsG']);
				$qte=mysql_real_escape_string($_POST['qte']);
				$comment=mysql_real_escape_string($_POST['comment']);
				$REGIONS=mysql_real_escape_string($_POST['REGIONS']);
				$VILLES=mysql_real_escape_string($_POST['VILLES']);
				$adresse_de_vente=mysql_real_escape_string($_POST['adresse_de_vente']);
				$prix=mysql_real_escape_string($_POST['prix']);
		

					$req = $bdd->prepare('INSERT INTO annonce(REGIONS, VILLES, prix, adresse_de_vente, userid, choix_vente, choix_produits, NOM, pdsKg, pdsG, qte, comment, date_ajout) 
						VALUES(:REGIONS, :VILLES, :prix, :adresse_de_vente, :userid, :choix_vente, :choix_produits, :NOM, :pdsKg, :pdsG, :qte, :comment, NOW())');

					$req->execute(array(
							'REGIONS'=>$REGIONS,
							'VILLES'=>$VILLES,
							'prix' => $prix,
							'adresse_de_vente' => $adresse_de_vente,
							'userid'=> $_SESSION['id'],
			   			 	'choix_vente' => $choix_vente,
			    			'choix_produits' => $choix_produits,
			    			'NOM' => $NOM,
			    			'pdsKg' => $pdsKg,
			    			'pdsG' => $pdsG,
			    			'qte' => $qte,
			    			'comment' => $comment));

					header('Location: depot_offre.php?msg=Votre annonce a été pris en compte');
					//include("index.php");
			}
				
		else{
					header('Location: depot_offre.php?msg=Tous les champs sont obligatoire.');
			}
		}
	
	
			?>


<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Fin de l'enregistrement de l'annonce dans la basse de donnée   //////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->