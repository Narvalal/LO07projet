<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Page d'accueil</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="accueil_admin.php">Accueil</a></li>
        <li><a href="login.html">Déconnexion</a></li>
        <li>Admin</li>
      </ul>
    </div>
  </nav>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Admin</h1>
      <div>
        <h5 class="header col s10 m4 ">
<?php 

require_once("database.php");

debug($_POST);

$requete = "SELECT * from nounou";
$resultat = mysqli_query($database, $requete)or die(mysql_error());
$ligne = mysqli_fetch_array($resultat, MYSQLI_ASSOC);
$donnees_recherchees =array();
foreach($ligne as $cle=>$val){
    if($_POST[$cle] == "" or $_POST[$cle]==" ") {
        $_POST[$cle] = NULL;
    }
    if(is_null($_POST[$cle]) == FALSE){
        $donnees_recherchees [$cle] =$_POST[$cle];

        }
}


$requete3="select * from nounou where ";
foreach($donnees_recherchees as $cle => $val){
        $requete3 .= "$cle='$val' AND ";    
  
}
$clean = rtrim($requete3, " AND ");
echo"<pre>";
$resultat2 = mysqli_query($database, $clean)or die(mysql_error());
echo"<div class='section'><div class='row' >";
if($resultat2){
    $i=1;

    while($ligne2 = mysqli_fetch_array($resultat2, MYSQLI_ASSOC)){
        echo"<div class='col s12 m4'>";
        foreach ($ligne2 as $cle => $val){
           echo"<p class='light'>$cle : $val </p>";
        }    
        modifier_candidature($ligne2);
        echo"<br>";
        voir_dossier($ligne2);     
        echo"</div>";
        $i++;
        echo"<br>";
    }
  
}
else {
    echo"pas de résultats";
}
function modifier_candidature($tab){
    echo("<form method='post' action='modifier_candidature.php'>");
    $id_nounou = $tab["id_nounou"];
    echo"<input type='hidden' name='id_nounou' value='$id_nounou'>";
    if($tab["candidature"] == 'En attente'){
        echo"Accepter candidature";
        $modif = array('oui','non');
        select('modifier',$modif);
        echo"<button class='btn waves-effect waves-light' type='submit' name='action'> Modifier";
        echo"<br>";
    }

    echo"</form>";
}
function select ($name, $data) {
   echo"<div class='input-field col s12' style='width:70%'>";
   echo ("<select name = '$name'><br/>");
   foreach ($data as $elm) {
       echo ("<option value='$elm'>$elm</option>\n");
   }
   echo ("</select>");
   echo("</div>");
}

function voir_dossier($tab){
    echo("<form method='post' action='dossier_nounou.php'>");
    $id_nounou = $tab["id_nounou"];
    echo"<input type='hidden' name='id_nounou' value='$id_nounou' >";
    echo"<button class='btn waves-effect waves-light' type='submit' name='action'> Voir dossier complet ";        
    echo"</form>";
    echo"<br>";
}
?>
        </h5>
        <a class='waves-effect waves-light btn' href=accueil_admin.php>Retour</a>
      </div>

    </div>

  </div>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript" src="biblio_js.js"></script>
  </body>
</html>
