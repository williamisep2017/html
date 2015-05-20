<?php
session_start();
include("connexion_bdd.php");

if(isset($_POST['formconnexion']))
{
	$adresse_mailconnect=htmlspecialchars($_POST['adresse_mailconnect']);
	$mot_de_passeconnect = sha1($_POST['mot_de_passeconnect']);

	if(!empty($adresse_mailconnect) AND !empty($mot_de_passeconnect))
	{

		$requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE adresse_mail=? AND mot_de_passe=?");
		$requser->execute(array($adresse_mailconnect, $mot_de_passeconnect));
		$userexist = $requser->rowCount();
		if($userexist == 1)
		{
			$userinfo = $requser->fetch();
			$_SESSION['id'] = $userinfo['id'];
			$_SESSION['adresse_mail'] = $userinfo['adresse_mail'];
			
			header('Location: Accueil.php');
			//header("Location : profil.php?id=" . $_SESSION['id']);
			
			echo "bonjour : " . $userinfo['adresse_mail'] . $userinfo['id'] ;
		}
		else{
			$erreur = "mauvais mail ou mots de passe";
		}

	}
	else{
		$erreur = "Tous les champs doivent être complétés";
	}
}
if(isset($erreur)) {
	echo 'Erreur : '. $erreur;
}
?>
