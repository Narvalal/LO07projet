<?php
require_once 'session.php';
require_once 'database.php';
debug($_SESSION);
?>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Faites garder vos enfants</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="accueil_parent.php">Accueil</a></li>
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li><a href="#">Navbar Link</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Créneaux disponibles</h1>
                <div class="row center">
                    <?php
                    $requete = "select * from agenda where id_parent = 0";
                    $result = mysqli_fetch_all(requete($database, $requete));
                    $j=0;
                    foreach ($result as $key) {
                         echo"<h5>Disponibilité $j</h5>";
                        $resultat = $result[$j];
                        debug($resultat);
                        $requete_nounou = "select nom,prenom from nounou where id_nounou = $resultat[0]";
                        $nounou = mysqli_fetch_all(requete($database, $requete_nounou));                       
                        debug($nounou);
                        $requete_idlangue = "select ref_langues from langues_nounou where ref_nounou = $resultat[0]";
                        $idlangue = mysqli_fetch_all(requete($database, $requete_idlangue));
                        $i = 0;
                        foreach ($idlangue as $elm) {
                            $idlg = $elm[0];
                            echo"Langues parlées : <br>";
                            $requete_langue = "SELEct langue FROM langues where id_langue = $idlg";
                            $resultat_langue = mysqli_fetch_all(requete($database, $requete_langue));
                            $langue[$i] = $resultat_langue[0];
                            $i = $i + 1;
                        }
                        debug($langue);
                        $j=$j+1;
                        
                        
                    }
                    ?>


                </div>

            </div>

            <!--  Scripts-->
            <script src="js/jquery.js"></script>
            <script src="js/materialize.js"></script>
            <script src="js/init.js"></script>

    </body>
</html>