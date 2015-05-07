<?php include("connexion_bdd.php");?>
<?php 
$pass_hache = sha1($_POST['mot_de_passe']);
			$req = $bdd->prepare('SELECT adresse_mail, mot_de_passe FROM utilisateurs');
			$req-> execute(array(
				'adresse_mail' => $adresse_mail,
				'mot_de_passe' => $pass_hache)); 
 			$resultat = $req->fetch();
 			//if (isset($_POST['adresse_mail']) && isset($_POST['mot_de_passe'])) {
 			if(resultat){
				//header('Location: html/index.php');
				session_start();
				include('index.php');
				$_SESSION['adresse_mail']=$resultat['adresse_mail'];
				$_SESSION['mot_de_passe']=$resultat['mot_de_passe'];
				
 			}
			
			
			else{
				//$_SESSION['adresse_mail']=null;	
				echo "désolé vous n'êtes pas encore inscrit";	 
			}
			?>
