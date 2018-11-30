<?php

require_once 'session.php';
require_once("database.php");

$_SESSION['login_session'] = $_POST['login'];
$requeteid = "SELECT id_utilisateur FROM compte WHERE login = '$_POST[login]'";
$idarray = mysqli_fetch_all(requete($database, $requeteid));
$id = implode($idarray[0]);
$_SESSION['id_session'] = $id;
$requeteid = "SELECT utilisateur FROM compte WHERE login = '$_POST[login]'";
$typearray = mysqli_fetch_all(requete($database, $requeteid));
$type = implode($typearray[0]);
$_SESSION['type_session'] = $type;

$login = $_POST['login'];
$mdp = $_POST['mdp'];

$requete = "select utilisateur from compte where login='$login' AND mdp='$mdp'";
$resultat = mysqli_query($database, $requete)or die(mysql_error());
$ligne = mysqli_fetch_array($resultat, MYSQLI_ASSOC);

function rediriger($utilisateur) {
    if ($utilisateur == "admin") {
        header("Location: accueil_admin.php");
    }
    if ($utilisateur == "parent") {
        header("Location: accueil_parent.php");
    }
    if ($utilisateur == "nounou") {
        header("Location: reservation_nounou.php");
    }
}

if ($resultat) {
    $utilisateur = $ligne["utilisateur"];
    rediriger($utilisateur);
} else {
    echo("erreur connexion...");
    header("Location: login.html");
}

mysqli_close($database);





