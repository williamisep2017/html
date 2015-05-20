<?php

class DB{

		private $host='localhost';
		private $username='root';
		private $password='';
		private $database='products';
		private $db;

		public function __construct($host=null, $username=null, $password=null, $database=null){
			if($host != null){
				$this ->host=$host; //on fait ça pour avoir à la fois une classe qui aura une configuration par défaut mais qui pourra aussi me servir si j'ai envie de me connecter à plusieurs BD.
				$this->username=$username;
				$this->password=$password;
				$this->database=$database;   
			}

		try{
		$this->db=new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password, array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
		}
		catch(PDOException $e){
			die('<h1>Impossible de se connecter à la base de donnee</h1>');
		}
		
		}

	public function query ($sql){
		$req=$this->db->prepare($sql);
		$req->execute();
		return($req->fetchAll(PDO::FETCH_OBJ));
	}


}

// ////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////
////////////A METTRE DANS L'INDEX OU LES OFFRES ? /////////////////////////////
/////////////////////////////////////////////////////////////

/*<?php require 'header.php'; ?>

<?php
$require =$DB->db->prepare('SELECT * FROM products');
$req->execute();
var_dump($rq->fetchAll());
*/