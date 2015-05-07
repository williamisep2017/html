<?php 

include("connexion_bdd.php");

// Hachage du mot de passe
$pass_hache = sha1($_POST['mot_de_passe']);

// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM utilisateurs WHERE adresse_mail = :adresse_mail AND mot_de_passe = :mot_de_passe');
$req->execute(array(
    'adresse_mail' => $adresse_mail,
    'mot_de_passe' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
    echo 'Vous êtes connecté !';
}