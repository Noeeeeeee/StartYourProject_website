<?php


class FrontControleur
{
    public function __construct()
    {
        global $rep, $vues;
        session_start();
        try {
            $listeActions = array(
                'VisiteurControleur' => array(NULL, 'AfficherConnexion','SeConnecter', 'AfficherInscription'),
                'UtilisateurControleur' => array('Deconnecter', 'PageProjet', 'PageMesProjet', 'creerTache' , 'afficherPageProjet', 'AjouterProjet', 'AfficherPageCreationProjet', 'AffichePageCreationTache'),
                'ChefEquipeControleur' => array(''),
                'ChefProjetControleur' => array(''));

            $utilisateur = ModelUtilisateur::isUtilisateur();
            $chefEquipe = false;
            $chefProjet = false;
            if (isset($_REQUEST["action"])) {
                $action = $_REQUEST["action"];
            }
            else {
                $action = NULL;
            }

           $ctrl = $this->rechAction($listeActions, $action, $utilisateur, $chefEquipe, $chefProjet);

            if (!isset($ctrl)) {
                $Vueerreur[] = "action inconnue";
                exit(1);
            }

            new $ctrl;

        } catch (Exception $exception) {
            $Vueerreur[] = "Action ...";
        }
    }

    public function rechAction($listeActions, $action, $utilisateur, $chefEquipe, $chefProjet)
    {
        global $rep, $vues;
        foreach ($listeActions as $key => $value) {
            if (in_array($action, $value)) {
                if ($key == 'UtilisateurControleur') {
                    if (!$utilisateur) {
                        require($rep.$vues['pageConnexion']);
                    }
                }
                if ($key == 'ChefEquipeControleur') {
                    if (!$chefEquipe) {
                        require($rep.$vues['pageConnexion']);
                    }
                }
                if ($key == 'ChefProjetControleur') {
                    if (!$chefProjet) {
                        require($rep.$vues['pageConnexion']);
                    }
                }
                return $key;
            }
        }
        return NULL;
    }
}