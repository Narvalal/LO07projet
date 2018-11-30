<?php ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Starter Template - Materialize</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right ">
                    <li><a href=inscription_nounou.php>Devenez nounou</a></li>
                    <li><a href=inscription_parent.php>Inscription parent</a></li>
                </ul>
            </div>
        </nav>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container" style="width:20%">
                <br><br>
                <h1 class="header center orange-text">Blabla nounou</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Un moyen morderne de mise en relation entre parents et nounous</h5>
                    <a href=inscription_nounou.php class="waves-effect waves-light btn">Connection nounou</a>
                    <p/>
                    <a class="waves-effect waves-light btn">Connection parents</a>
                </div>
                <br><br>
            </div>
        </div>


        <div class="container">
            <div class="section">

                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">Rapidité</h5>

                            <p class="light">Nos bases de données sont mises à jour en temps réel afin de vous procurer la meilleure expérience possible.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">Expérience multilingues</h5>

                            <p class="light">Nous permettons à nous utilisateurs de rechercher des personnes parlant certaines langues afin de procurer une expérience optimale à nos utlisateurs. </p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                            <h5 class="center">Paramètres</h5>

                            <p class="light">Ouais ouais les paramètres de recherche</p>
                        </div>
                    </div>
                </div>

            </div>
            <br><br>
        </div>
        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="../../bin/materialize.js"></script>
        <script src="js/init.js"></script>

    </body>
</html>
