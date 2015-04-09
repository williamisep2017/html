X
header{ /* Le rectangle gris du top*/

 .wrap{    /* SERT a faire un rail de 960 le tout centrer au millieu de page*/

    position: relative;
    width: 960px;
    margin: 0px auto;	
}
.content{
	padding: 1.25em 5em;  /*Pb dans .content mais pas dans . content p*//*PAS METTRE DE WIDTH 100%!!!!!*/
    text-align: justify;
}

/*  //////////Permet d'ajouter une image en before/////////
.content h1::before { 
  content:url(images/potfleur.png);
  width: 20%;
}*/

.content p{
	margin-bottom: 1.25rem;
	font-weight: 300;
    line-height: 1.6em;
}
#presentation{
	max-width: 960px;
	margin: 0px auto;
	position: relative;
}
.presentation-text{
	text-align: right justify;
	padding-right: 2em;
	margin-right:50%; 
	float: left;
	
}
.presentation-text h2{
border-bottom: 1px solid;
}
.presentation-picture{
	height: 220px;
	float: right;
	margin-top: -231px;
	padding-bottom: 50px;
}

h2{
	font-size: 1.3em;
}

h1{
	font-size: 1.8rem;
	font-family: "Titillium Web", helvetica, Arial, sans-serif; /*oxygen;*/
	font-weight: 300;
	color:#0eb377;
	margin: 0px;
}
/* /// LES COULEURS UTILISES///
	Texte en gris clair #616972
   	Le vert #0eb377
   	Le rouge #e56262*/

a{
	color : inherit; 
	text-decoration: none;
}

body{
  
    font-family: "oxygen" ,helvetica, Arial, sans-serif;
    font-weight: lighter;
    color:  #616972;
 	margin: 0;
	padding: 0;
	margin-bottom: 80px;
	background-color: #F4F4F7; /*#e9e5e7;*/
	/*background-image:url(images/tomate1200x750.jpg);
	background-size: 94%;
 	background-repeat:no-repeat;
 	background-position: center top;*/
 	overflow-X:hidden;
 	
 }

.cb{  /* cb qui sert à éviter que le header déscende*/
	clear: both;
}

 header{ /* Le rectangle gris du top*/

		position: relative; 
		background-color:#666666;
		height: 60px;
		
		/*border-bottom: 5px solid #565656;*/
		margin-top: -16px;
	 } 

.header-logo{
	display: block;
	float: left;
	height: 100%;
	margin-left: 40px;


}
.header-accroche{
	position: relative;
	color:white;
	color:#616972;
    padding-left: 10em;
    padding-top: 1.3em;
    padding-bottom: 1.3em;
    background-color: #e9e5e7;
    box-shadow: 0px 15px 15px -10px rgba(0, 0, 0, 0.35) inset;
    
}
.header-image_backgroundTOP{
position: relativme;
margin: auto;
padding: auto;
text-align: center;
box-shadow: 0px 15px 15px -10px rgba(0, 0, 0, 0.35) inset;
}

.menu-item{  
	 /* Le menu*/
	font-size: 16px;
	font-family: Oxygen; 
	font-weight: lighter;
	float : right;
	color:#FFF;
	padding-bottom: 0.938em;
	margin-top:1.250em;
	margin-right: 40px;
	margin-left: 30px;
}




	.menu-item:hover {

		color: gray;
		border-bottom: 6px solid #0eb377;                              		 -webkit-transition-duration: 0.5s; 
		 -moz-transition-duration: 0.5s; 
		 -ms-transition-duration: 0.5s; 
		 -o-transition-duration: 0.5s; 
		 transition-duration: 0.5s;

	}

	}
	a:active {color: white;
		border-bottom: 15px solid #e56262;
	}	

input{
	/*margin-left: 370px;*/
	/*margin-top: 200px;*/
	margin-top: 18px;
	margin-left: 5.6em;

    background-color: #e9e5e7;
	border: 1px;
	border-style: solid;
	border-color: #565656;

	outline-color: none;
	outline-width: thin;
	width:150px;
	height: 1.8em;
    transition:width .5s;
    position: absolute;
}

input:hover{color: #0eb377;
	/*background-color: #565656;
	border-color: #565656;*/
		 -webkit-transition-duration: 0.5s; 
		 -moz-transition-duration: 0.5s; 
		 -ms-transition-duration: 0.5s; 
		 -o-transition-duration: 0.5s; 
		 transition-duration: 0.5s;
		}

input:focus {
	color:black;
   width:320px;
   background-color: white;
}

.image-loupe{
	margin-left: 304;/*400px*/
	margin-top: 18px;
	background-color: #565656;
	border-right: 4px solid #565656;
	border-left:4px solid #565656;
	 /*200px*/

	width: 35%;
}

label {
	display: block;
    width: 50px;
    float: left;
}

.Thematiques{
	margin : 0 auto;
	max-width : 960px;

}

.theme{
	font-size : 1.5em;
}

p {
	text-align : justify;
}

