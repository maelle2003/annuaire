<?php
switch ($action) {
    case 'accueil':
    {
        $message="Ce site permet d'enregistrer les participants à une épreuve.";
        include("views/v_accueil.php");
        break;
    }
    case 'lister': {
        $les_membres=$pdo->getLesMembres();
        require 'views/v_listemembres.php';
        break;
    }
    case 'saisir':
    {
        require "views/v_saisie.php";
        break;
    }
    case 'controlesaisie':
    {
        $nom = $_REQUEST['nom'];
        // affecter $prenom

        if (empty($nom) || empty($prenom)) {
            require "views/v_saisie.php";
        } else {
            $resultat = $pdo->insertMembre($nom, $prenom);
            include("views/v_accueil.php");
        }
        break;
    }
    default:
    {
        $_SESSION["message_erreur"] = "Site en construction";
        include("views/404.php");
        break;
    }


}
