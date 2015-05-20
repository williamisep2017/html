<?php session_start();?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="profil.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>

    <body>


<!--////////////////////////////////////////////////////////////////
//////////////////////////////     HEADER.php  /////////////////////
////////////////////////////////////////////////////////////////////-->
<div class="site-container"> <!--Utile pour le responsive du header seulement-->
<div class="site-pusher"><!--Utile pour le responsive du header seulement-->

<?php include("header1-responsive.php"); ?>

<div class="site-content"><!--Utile pour le responsive du header seulement-->
    <div class="container"><!--Utile pour le responsive du header seulement-->


<!--////////////////////////////////////////////////////////////////
//////////////////////////////     Content  ////////////////////////
////////////////////////////////////////////////////////////////////-->
<div class="wrap-profil">
    <section id="header-bottom-profil">
        <section id="containers"> 
            <ul id="secondmenu" class="list-tabs">
                <li><a href="profil.php">Profil</a></li>
                <li><a href="modification_profil.php">Modifier</a></li>
                <li><a href="#">Panier</a></li>
                <li><a href="offres_profil.php">Offres</a></li>
            </ul>
        </section>
    </section>
<h1 class="title-profil">Mon profil</h1>
</div>
 

<div class="page-profil">
    <div class="infos-profil">
            <div class="infos-tittle"> 
            <h3> Informations personnelles </h3>
            </div>
            <div class="elements"> pseudo : <?php echo $_SESSION['pseudo'];?> </div>
            <div> Né(e) le : <?php echo $_SESSION['dte_de_naissance'];?> </div>
    </div>

    <div class="infos-profil">
            <div class="infos-tittle">
            <h3> Mes cordonnés</h3>
            </div>
            <div class="elements"> adresse de localisation : <?php echo $_SESSION['adresse'];?> </div>
            <div> teléphone : <?php echo $_SESSION['num_tel'];?> </div>
    </div>

    <div class="infos-profil">
            <div class="infos-tittle">
            <h3>Email</h3>
            </div>
            <div class="elements"> Votre adresse email est : <?php echo $_SESSION['adresse_mail'];?> </div>
    </div>


    <div class="infos-profil">
            <div class="infos-tittle">
            <h3>Mot de passe</h3>
            </div>
            <div class="elements"> ********* </div>
    </div>

</div>

<div class="section-footer">
    <?php include("footer.php");?>


</div><!-- container-->
</div> <!-- site content-->

<div class="site-cache" id="site-cache"></div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/responsive_header.js"></script>
</div> <!-- site pusher-->
</div> <!-- site container-->
</div>
    
   	</body>
</html>

