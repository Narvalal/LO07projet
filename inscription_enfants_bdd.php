<?php

require_once 'database.php';
debug($_POST);

for ($i = 1; $i <= $_POST['nombre']; $i++) {
    $prenom = "prénom$i";
    $naissance = "naissance$i";
    $indications = "indications$i";
    $requete = "insert into enfant (prenom, nom, date_naissance, restriction_alimentaire, id_parent) values ('$_POST[$prenom]','$_POST[nom]', '$_POST[$naissance]', '$_POST[$indications]', '$_POST[id_parent]')";
    requete($database, $requete);
    
    debug($requete);
    debug($prenom);
    debug($naissance);
    debug($indications);
}

echo("<script>alert('Votre formulaire a bien été envoyé')</script>");
echo("<script> document.location.href='login.html'</script>");

