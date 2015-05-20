<?php

function creationPanier(){
	if (!isset($_SESSION['panier'])){
		$_SESSION['panier']=array();
		$_SESSION['panier']['nomProduit']=array();
		$_SESSION['panier']['qteProduit']=array();
		$_SESSION['panier']['prixProduit']=array();
		$_SESSION['panier']['verrou']=false; // la variable verrou permet de verrouiller toute action sur le panier
	}
	return true;
}

function ajout($select) 
{ 
    $ajout = false; 
    if(!isset($_SESSION['panier']['verrouille']) || $_SESSION['panier']['verrouille'] == false) 
    { 
        if(!verif_panier($select['id'])) 
        { 
            array_push($_SESSION['panier']['id_article'],$select['id']); 
            array_push($_SESSION['panier']['qte'],$select['qte']); 
            array_push($_SESSION['panier']['taille'],$select['taille']); 
            array_push($_SESSION['panier']['prix'],$select['prix']); 
            $ajout = true; 
        } 
        else 
        { 
            $ajout = modif_qte($select['id'],$select['qte']); 
        } 
    } 
    return $ajout; 
}

function modif_qte($ref_article, $qte) 
{ 
    /* On initialise la variable de retour */ 
    $modifie = false; 
    if(!isset($_SESSION['panier']['verrouille']) || $_SESSION['panier']['verrouille'] == false) 
    { 
        if(nombre_article($ref_article) != false && $qte != nombre_article($ref_article)) 
        { 
            /* On compte le nombre d'articles différents dans le panier */ 
            $nb_articles = count($_SESSION['panier']['id_article']); 
            /* On parcoure le tableau de session pour modifier l'article précis. */ 
            for($i = 0; $i < $nb_articles; $i++) 
            { 
                if($ref_article == $_SESSION['panier']['id_article'][$i]) 
                { 
                    $_SESSION['panier']['qte'][$i] = $qte; 
                    $modifie = true; 
                } 
            } 
        } 
        else 
        { 
            /* L'article est absent du panier, donc on ne peut pas modifier la quantité ou bien 
            * le nombre est exactement le même et il est inutile de le modifier 
            * Si l'article est absent, comme on a ni la taille  ni le prix, on ne peut pas l'ajouter 
            * Si le nombre est le même, on ne fait pas de changement. On peut donc retourner un autre 
            * type de valeur pour indiquer une erreur qu'il faudra traiter à part lors du retour d'appel 
            */ 
            if(nombre_article($ref_article) != false) 
            { 
                $modifie = "absent"; 
            } 
            if($qte != nombre_article($ref_article)) 
            { 
                $modifie = "qte_ok"; 
            } 
        } 
    } 
    return $modifie; 
} 

function supprim_article($ref_article) 
{ 
    $suppression = false; 
    if(!isset($_SESSION['panier']['verrouille']) || $_SESSION['panier']['verrouille'] == false) 
    { 
        /* On vérifie que l'article à supprimer est bien présent dans le panier */ 
        if(nombre_article($ref_article) != false) 
        { 
            /* création d'un tableau temporaire de stockage des articles */ 
            $panier_tmp = array("id_article"=>array(),"qte"=>array(),"taille"=>array(),"prix"=>array()); 
            /* Comptage des articles du panier */ 
            $nb_articles = count($_SESSION['panier']['id_article']); 
            /* Transfert du panier dans le panier temporaire */ 
            for($i = 0; $i < $nb_articles; $i++) 
            { 
                /* On transfère tout sauf l'article à supprimer */ 
                if($_SESSION['panier']['id_article'][$i] != $ref_article) 
                { 
                    array_push($panier_tmp['id_article'],$_SESSION['panier']['id_article'][$i]); 
                    array_push($panier_tmp['qte'],$_SESSION['panier']['qte'][$i]); 
                    array_push($panier_tmp['taille'],$_SESSION['panier']['taille'][$i]); 
                    array_push($panier_tmp['prix'],$_SESSION['panier']['prix'][$i]); 
                } 
            } 
            /* Le transfert est terminé, on ré-initialise le panier */ 
            $_SESSION['panier'] = $panier_tmp; 
            /* Option : on peut maintenant supprimer notre panier temporaire: */ 
            unset($panier_tmp); 
            $suppression = true; 
        } 
        else 
        { 
            $suppression == "absent"; 
        } 
    } 
    return $suppression; 
} 

function vider_panier() 
{ 
    $vide = false; 
    if(!isset($_SESSION['panier']['verrouille']) || $_SESSION['panier']['verrouille'] == false) 
    { 
        if(isset($_SESSION['panier'])) 
        { 
            unset($_SESSION['panier']); 
            if(!isset($_SESSION['panier'])) 
            { 
                $vide = true; 
            } 
        } 
        else 
        { 
            /* Le panier était déjà détruit, on renvoie une autre valeur exploitable au retour */ 
            $vide = "inexistant"; 
        } 
    } 
    return $vide; 
}


?>