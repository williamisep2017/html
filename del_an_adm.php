<?php
session_start();
include("connexion_bdd.php"); 
?>

   <?php $bdd->query("DELETE FROM annonce WHERE id_annonce='".$_GET['id_annonce']."'");
   include("administrateur.php");
  //echo "votre annonce a bien été supprimée";
    //exit;
  
?>