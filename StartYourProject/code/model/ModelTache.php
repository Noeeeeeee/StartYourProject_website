<?php


class ModelTache
{
    public static function ajouterTache($email, $idProjet, $nomTache, $description, $cout, $dateDebut, $duree)
    {

        global $dsn, $login, $mdp;
        $tachegw = new TacheGateway(new Connexion($dsn, $login, $mdp));
        $tachegw->ajouterTache($email, $idProjet, $nomTache, $description, $cout, $dateDebut, $duree);
    }

    public static function displayTache($idprojet, $login)
    {
        $taches = array();
        global $dsn, $login, $mdp;
        $tachegw = new TacheGateway(new Connexion($dsn, $login, $mdp));
        $projet = ModelProjet::getProjetbyID($idprojet);
        $results = $tachegw->displayTacheById($idprojet, $login);
        foreach ($results as $row) {
            $taches[] = new Tache($row['idTache'], $row['email'], $row['idProjet'], $row['nomTache'], $row['description'],
                $row['cout'], $row['dateDebut'], $row['duree'] );
        }
        $projet->setListeTaches($taches);
        return $projet;


    }

}