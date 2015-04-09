$prenom = $_POST[prenom];

bdd = new PDO()

bdd -> prepare('INSERT INTO (user) name, lastname values (:name, :lastname)'');
bdd -> execute (Array({
	name : $prenom
}))