<?php


class VisiteurControleur
{
    function __construct()
    {
        global $rep, $vues;

        try {
            if (isset($_REQUEST["action"])) {
                $action = $_REQUEST["action"];
            } else {
                $action = NULL;
            }
            switch ($action) {
                case NULL:
                    $this->afficherAccueil();
                    break;
                case "AfficherInscription" :
                    $this->afficherInscription();
                    break;
                case "AfficherConnexion":
                    $this->afficherConnexion();
                    break;
                case "SeConnecter":
                    $this->seConnecter();
                    break;
            }
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
            require($rep . $vues['pageErreur']);
        }
    }

    private function afficherAccueil()
    {
        global $rep, $vues;
        $isUtilisateur = ModelUtilisateur::isUtilisateur();
        require($rep . $vues['pageAccueil']);
    }

    private function afficherInscription()
    {
        global $rep, $vues;
        require($rep . $vues['inscription']);
    }

    private function seConnecter()
    {
        global $rep, $vues;
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        if (!ModelUtilisateur::connexion($email, $mdp)) {
            $erreur = "problème de connexion";
            require($rep . $vues['pageErreur']);
        } else {
            $tabProjets = ModelProjet::getAllProjetByMail($email);
            require($rep . $vues['pageMesProjets']);
        }
    }

    private function afficherConnexion()
    {
        global $rep, $vues;
        require($rep . $vues['pageConnexion']);
    }




}