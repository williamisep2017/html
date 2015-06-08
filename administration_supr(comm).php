<?php
session_start();
include("connexion_bdd.php"); 
?>

   <?php $bdd->query("DELETE FROM sujet WHERE id_com='".$_GET['id_comm']."'");
   include("administration_forum2.php");

  
?>