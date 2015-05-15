<?php 
session_start();?>

<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8" />
        <title>Proxipotage</title>
		<link rel = "stylesheet" href="Lesoffres.css" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300' rel='stylesheet' type='text/css'>
		<link rel="icon" type="image/png" href="favicon.png" />
			<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
    </head>
<body>

<h2> Produit</h2>
				    			<FORM>
							    	<SELECT class="liste-fruit"name="les produits" size="1">
							    		<OPTION selected>Fruits
							    		<OPTION>Choux
							    		<OPTION>Tomate
							    		<OPTION>Pomme
							    		<OPTION>salade
							    		<OPTION>carotte    <!-- certainement faire UNE option avec une vairable $produits -->
							    	</SELECT>
				    			</FORM>


<select name="listefruits" style="width:200px">

<?php
include("connexion_bdd.php");
 
 	$reponse = $bdd->query('SELECT * FROM fruits');
 	foreach ($reponse as $donnees)	
	//while ($donnees =  mysql_fetch_array($reponse))
		{
?>
	<option value="<?php echo $donnees['fruit'] ?>"><?php echo $donnees['fruit'] ?></option>
   <?php
   		}
   ?>
</select>





</body>
</html>