<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Inscription nounous</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Navbar Link</a></li>
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
                <h1 class="header center orange-text">Starter Template</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Ville</th>
                            <th>mail</th>
                            <th>tel</th>
                            <th>langues</th>
                            <th>age</th>
                            <th>présentation</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <?php
                            afficher_nounous();
                            ?>

                        </tr>
                    </tbody>
                </table>
                <br><br>

            </div>
        </div>




        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../../bin/materialize.js"></script>
        <script src="js/init.js"></script>

    </body>
</html>

<?php

function afficher_nounous() {
    require_once 'database.php';
    $requete = 'SELECT * FROM nounou';
    $resultat = mysqli_query($database, $requete);
    if ($resultat) {
        while ($ligne = mysqli_fetch_array($resultat, MYSQLI_NUM)) {
            echo("<tr>");
            for ($j = 1; $j <= 7; $j++) {
                echo("<td>$ligne[$j]</td>");
            }
            echo("</tr>");
        }
    } else {
        echo ("Il y a un probleme...<br/>\n");
        echo (mysqli_error($database));
    }
}
?>