<?php 
//Connection au serveur de base de donnée
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ProxyPotage;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// Vérification de la validité des informations
if(isset($_POST['envoyer'])) {
	if(isset($_POST['pseudo']) AND !empty($_POST['pseudo'])
		AND isset($_POST['mail']) AND !empty($_POST['mail'])
		AND isset($_POST['password1']) AND !empty($_POST['password1'])
		AND isset($_POST['password2']) AND !empty($_POST['password2']));
	
{
		//Tous les champs sont remplis
		$pseudo=mysql_escape_string($_POST['psuedo']);
		$mail=mysql_escape_string($_POST['mail']);
		$password1=mysql_escape_string(sha1($_POST['password1']));
		$password2=mysql_escape_string(sha1($_POST['password2']));

		$longueur_pseudo = strlen($longueur_pseudo);
		if($longueur_pseudo <=30)
{
		//le pseudo respect le format
		if($password1 == $password2);
{
		//les mots de passe sont identique
		$req = $bdd->prepare('INSERT INTO user(pseudo, pass, email,) VALUES(:pseudo, :pass, :email)');
		$req->execute(array(
   			 	'pseudo' => $pseudo,
    			'pass' => $password1,
    			'email' => $mail));
}

else{
		$erreur='Le mot de passe et le mot de pase de confirmation de corresponde pas'
}
}

else{
		$erreur='Le pseudo est trop long';
}
}
else{
		$erreur='Tous les champs sont obligatoire.';
}
}




/*

// Hachage du mot de passe
$pass_hache = sha1($_POST['pass']);

// Insertion
$req = $bdd->prepare('INSERT INTO user(pseudo, pass, email,) VALUES(:pseudo, :pass, :email)');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache,
    'email' => $email));

echo 'votre inscription a été pris en compte'
*/
?>


<?php
if(isset($erreur)) {
	echo 'Erreur'. $erreur;
}
?>






