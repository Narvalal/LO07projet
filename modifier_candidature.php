<?php

require_once 'database.php';

$id_nounou = $_POST["id_nounou"];
echo"$id_nounou";

if($_POST['modifier'] == 'oui'){
    $requete = "update nounou set candidature='Acceptée' where id_nounou='$id_nounou'";
    $resultat = mysqli_query($database, $requete)or die(mysql_error());
    header("Location: accueil_admin.php");
}

if($_POST['modifier'] == 'non'){
    $requete = "delete from nounou where id_nounou='$id_nounou'";
    $resultat = mysqli_query($database, $requete)or die(mysql_error());
    header("Location: voir_nounou.php");
}

if($_POST['modifier'] == ' '){
    header("Location: voir_nounou.php");    
}