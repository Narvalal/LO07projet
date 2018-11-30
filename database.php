<?php


define('LO07_DB_USER', 'root');
define('LO07_DB_PASSWORD','');
define('LO07_DB_HOST', 'localhost');
define('LO07_DB_NAME', 'projet');

$database = mysqli_connect(LO07_DB_HOST, LO07_DB_USER, LO07_DB_PASSWORD, LO07_DB_NAME) or die ('Impossible de se connecter à MySQL : ' + mysqli_connect_error());
$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    
echo"<link rel='stylesheet' type='text/css'href='style.css'/>";
if ($database == TRUE) {
} else {
    echo'Echec<br/>';
}

function requete($database,$requete) {
	$resultat = mysqli_query($database, $requete);
	if($resultat){
		$requete;
	}
	else{
		if (mysqli_errno($database)==1062){
			echo "Il y a un doublon ! </br>";
			return 1062;
		}
		else{
			echo $requete;
		}
	}
	return $resultat;
}
function debug($array){
	echo '<pre>';
	var_dump($array);
	echo '</pre>';
}


