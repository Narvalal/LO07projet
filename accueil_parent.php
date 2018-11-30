<?php
require_once 'session.php';
require_once 'database.php';
?>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Acceuil parent</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="login.html">Accueil</a></li>
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
                <h1 class="header center orange-text">Liste de vos enfants</h1>
                <div class="row center"> 
                    <div class="row" style="width:100%">
                        <div class="col s12">
                            <div class="row">
                                <?php
                                $requete = "select * from enfant where id_parent = $_SESSION[id_session]";
                                $enfants = mysqli_fetch_all(requete($database, $requete));
                                $nombre = count($enfants);
                                
                                for($i=0; $i <$nombre; $i++){
                                    $width = 12/$nombre;
                                    echo("<div class='col s$width'>");                                    
                                    $enfant= $enfants[$i];                                    
                                    echo("<h6> $enfant[0]</h6>");
                                    echo("<strong> Date de naissance </strong>");
                                    echo("$enfant[2]");
                                    echo"</p>";
                                    echo("<strong> Indications: </strong>");
                                    echo("$enfant[3]");                                    
                                    echo("</div>");                                    
                                }                                
                                ?>
                                
                                
                            </div>
                            <a class="waves-effect waves-light btn" href="reservation_parent.php">Réservation</a>
                        </div>
                    </div> 
                </div>

            </div>

            <!--  Scripts-->
            <script src="js/jquery.js"></script>
            <script src="js/materialize.js"></script>
            <script src="js/init.js"></script>

    </body>
</html>
