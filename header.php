<header>
    <link rel="stylesheet" href="header.css" media="screen" type="text/css" />
    <a id="logo" href="accueil.php"><img id="img2" src="ressources/img/Bully-logo.png" alt="Bully-logo.png"/img></a>
    <div class="topnav" id="MyTopNav">
        <a id="Acceuil" href="accueil.php">Accueil</a>
        <a href="newRes.php">Créer une Réservation</a>
        <?php    
            if(isset($rang)){
                echo"<a>$rang</a>";
                if(strcmp($rang,"admin")==0){
                    echo'';
                }
            }
        ?>
        <a id="droite" href='deconnexion.php'>Déconnexion</a>
        <div id= "droite" class="dropdown">
            <button class="dropbtn">Mon compte<i class="caret"></i></button>
            <div class="dropdown-content">
                <a href="#">Profil</a>
                <a href="mdp.php">Changer de mot de passe</a>
            </div>
        </div>
    </div>
    <?php
        if(isset($_GET['accueil']))
            echo'<a id="accueil" color="black">';
    ?>
</header>
<br/><br/><br/><br/>