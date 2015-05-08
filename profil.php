<?php session_start();?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>

    <body>


<!--////////////////////////////////////////////////////////////////
//////////////////////////////     HEADER.php  /////////////////////
////////////////////////////////////////////////////////////////////-->
<?php include("header1.php"); ?>

<!--////////////////////////////////////////////////////////////////
//////////////////////////////     Content  ////////////////////////
////////////////////////////////////////////////////////////////////-->
<h1>Mon profil</h1>

<p>
    Bonjour, votre adresse mail est la suivante : 
    	<?php echo $_SESSION['adresse_mail']; ?><br />
    Votre identifiant d'utilisateur est le numéros ID=  
    	<?php echo $_SESSION['id']; ?> <br />
 </p>



   	</body>
</html>

