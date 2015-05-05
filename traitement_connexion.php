<?php session_start();?>
<?php include("connexion_bdd.php");?>
<?php 
			$reponse = $bdd->query('SELECT adresse_mail, mot_de_passe FROM utilisateurs');
 			$donnees = $reponse->fetch();
 			$reponse->closeCursor();

			if ($_POST['adresse_mail']==$donnees['adresse_mail'] AND $_POST['mot_de_passe']==$donnees['mot_de_passe']){
				$_SESSION['adresse_mail']=$_POST['adresse_mail'];
				$_SESSION['mot_de_passe']=$_POST['mot_de_passe'];			
				include("index.php");
			}
			else{
				echo "désolé vous n'êtes pas encore inscrit";
			}
			?>
