<?php
require_once 'session.php';
require_once 'database.php';
debug($_SESSION);
?>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Inscription nounous</title>

        <!-- CSS  -->

        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>
    </head>
    <body>
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="login.html">Accueil</a></li>
                </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li><a href="login.html">Accueil</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Indiquez vos disponiblités</h1>
                <div class="row center">
                    <h5 class="header col s12 light">Attention toutes les heures de l'intervalle seront remplies</h5>
                </div>
                <div class='row center'>
                    <div class="row" style="width:100%">
                        <div class="col s12">                            
                            </p>

                            <form method="post" action='reservation_nounou.php'>
                                <input type="hidden" id="type" name="type" value="particulier"/>
                                <div class="col s3">
                                    <h6>Jour particulier</h6> 
                                </div>
                                <div class="col s2">
                                    <label for="jour_particulier"> Jour </label>
                                    <input type="text" class="datepicker" name="jour_particulier" id="jour_particulier"/>
                                </div>
                                <div class="col s2">
                                    <label for="heure_debut">Heure de début</label>
                                    <input id="heure_debut" name="heure_debut" type="text" class="timepicker">

                                </div>
                                <div class="col s2">
                                    <label for="heure_fin"> Heure de fin </label>
                                    <input type="text" class="timepicker" name="heure_fin" id="heure_fin"/>
                                </div>
                                <div class="col s2">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter</button>
                                </div>
                            </form>                                               
                        </div>
                        <p/>
                        <div class="col s12">
                            <form method="post" action='reservation_nounou.php'>
                                <input type="hidden" name="type" id="type" value="recurrent"/>
                                <div class="col s3">
                                    <h6>Jour récurrent</h6> 
                                </div>
                                <div class="input-field col s2">
                                    <select>
                                        <option value="" disabled selected>Choisissez un jour</option>
                                        <option value="1">Monday</option>
                                        <option value="2">Tuesday</option>
                                        <option value="3">Wednesday</option>
                                        <option value="3">Thursday</option>
                                        <option value="3">Friday</option>
                                        <option value="3">Saturday</option>
                                        <option value="3">Sunday</option>
                                    </select>
                                    <label>Jour</label>
                                </div>
                                <div class="col s2">
                                    <label for="heure_debut">Heure de début</label>
                                    <input id="heure_debut" name="heure_debut" type="text" class="timepicker">

                                </div>
                                <div class="col s2">
                                    <label for="heure_fin"> Heure de fin </label>
                                    <input type="text" class="timepicker" name="heure_fin" id="heure_fin"/>
                                </div>
                                <div class="col s2">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter</button>
                                </div>
                            </form>
                        </div>

                        <div class="col s12">
                            <form method="post" action='reservation_nounou.php'>
                                <input type="hidden" name="type" id="type" value="jour_travaillés"/>
                                <div class="col s3">
                                    <h6>Tous les jours travaillés</h6> 
                                </div>
                                <div class="input-field col s2">                                    
                                    <label>Lundi, mardi, mercredi, jeudi, vendredi</label>
                                </div>
                                <div class="col s2">
                                    <label for="heure_debut">Heure de début</label>
                                    <input id="heure_debut"name="heure_debut" type="text" class="timepicker">

                                </div>
                                <div class="col s2">
                                    <label for="heure_fin"> Heure de fin </label>
                                    <input type="text" class="timepicker" name="heure_fin" id="heure_fin"/>
                                </div>
                                <div class="col s2">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter</button>
                                </div>
                            </form>
                        </div>

                        <div class="col s12">
                            <form method="post" action='reservation_nounou.php'>
                                <input type="hidden" name="type" id="type" value="semaine"/>
                                <div class="col s3">
                                    <h6>Tous les jours</h6> 
                                </div>
                                <div class="input-field col s2">                                    
                                    <label>Lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche</label>
                                </div>
                                <div class="col s2">
                                    <label for="heure_debut">Heure de début</label>
                                    <input id="heure_debut" name="heure_debut" type="text" class="timepicker">

                                </div>
                                <div class="col s2">
                                    <label for="heure_fin"> Heure de fin </label>
                                    <input type="text" class="timepicker" name="heure_fin" id="heure_fin"/>
                                </div>
                                <div class="col s2">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>



                <br><br>

            </div>
        </div>




        <!--  Scripts-->
        <script src="js/jquery.js"></script> 
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>

    </body>
</html>

<?php
;

if ($_POST != null) {
    debug($_POST);
    if ($_POST['type'] == 'particulier') {
        $requete = "insert into agenda (id_nounou, id_parent, date, heure_debut, heure_fin) values ($_SESSION[id_session], 0, '$_POST[jour_particulier]', '$_POST[heure_debut]', '$_POST[heure_fin]')";
        requete($database, $requete);
    }

    if ($_POST['type'] == 'recurrent') {
        echo"jour recurrent";
        echo date("l");
    }

    if ($_POST['type'] == 'jour_travaillés') {
        echo"jour travaillés";
    }

    if ($_POST['type'] == 'semaine') {
        echo"semaine";
    }
}

function jour(){
    $ajd =  date("l");
    $jour = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    $i=0;
    while($ajd != $jour[$i]){
        $i++;
    }
    
}