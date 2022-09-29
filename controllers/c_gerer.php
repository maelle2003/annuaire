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
        $prenom = $_REQUEST['prenom'];

        if (empty($nom) || empty($prenom)) {
            require "views/v_saisie.php";
        } else {
            $resultat = $pdo->insertMembre($nom, $prenom);
            $message = 'le nouveau membre est enregistré';
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

    case 'controlesupprimer':
    {
        $id = $_REQUEST['id'];
        $nom = $_REQUEST['nom'];
    
        if (empty($id) || empty($nom)) {
            require "views/v_supprimer.php";
        } else {
            $resultat = $pdo->insertMembre($nom, $prenom);
            $message = 'le membre a été supprimé';
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
