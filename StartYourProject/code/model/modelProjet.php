<?php

/**
 * classe contenant les fonctions pour un projet
 * Class ModelListeTaches
 */
class ModelProjet
{

    /**
     * Permet de récupérer un projet en fonction d'un idProjet
     * @param int $idProjet id du projet
     * @return Projet
     */
    static function getProjetbyID( $idProjet)
    {
        global $dsn, $login, $mdp;
        $gateway = new ProjetGateway(new Connexion($dsn, $login, $mdp));
        $result = $gateway->getProjetbyID($idProjet);
        return new Projet($result['idProjet'], $result['nomProjet']);
    }

    /**
     * Permet de récupérer les projets propres à un utilisateur
     * @param string $pseudo pseudo de l'utilisateur
     * @return array
     */
    static function getAllProjetByMail(string $mail): array
    {
        global $dsn, $login, $mdp;
        $tabP = array();
        $gateway = new ProjetGateway(new Connexion($dsn, $login, $mdp));
        $results = $gateway->getAllProjetByMail($mail);
        foreach ($results as $row) {
            $tabP[] =  new Projet($row['idProjet'], $row['nomProjet']);
        }
        return $tabP;
    }

    /**
     * Permet d'ajouter un projet dans la base de données
     * @param $nomprojet // nom du projet
     * @param $mail // mail user
     * @param $description // description du projet
     * @param $budget // budget du projet
     */
    static function ajouterProjet($nomprojet, $mail, $description, $budget)
    {
        global $dsn, $login, $mdp;
        $gateway = new ProjetGateway(new Connexion($dsn, $login, $mdp));
        $gateway->ajouterProjet($nomprojet, $mail, $description, $budget);
    }

    /**
     * Permet de supprimer un projet et ses tâches associées
     * @param int $idListeTaches id du projet à supprimer
     */
    static function deleteProjet(int $idProjet)
    {
        global $dsn, $login, $mdp;
        $gateway = new ProjetGateway(new Connexion($dsn, $login, $mdp));
        // ModelTache::deleteTachesByIdProjet($idProjet); // suppression de toutes les tâches du projet
        $gateway->deleteProjet($idProjet); // suppression du projet
    }

    /**
     * Permet de récupérer le nombre de projets
     * @return mixed
     */
    static function nbProjet()
    {
        global $dsn, $login, $mdp;
        $gateway = new ProjetGateway(new Connexion($dsn, $login, $mdp));
        $results = $gateway->nbProjet();
        return $results[0]["count(*)"];
    }

}