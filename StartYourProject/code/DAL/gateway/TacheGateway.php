<?php


class TacheGateway
{

    public function __construct(Connexion $con)
    {
        $this->con = $con;

    }

    /**
     * @param $email
     * @param $idProjet
     * @param $nomTache
     * @param $description
     * @param $cout
     * @param $dateDebut
     * @param $duree
     * @return mixed
     */
    public function ajouterTache($email, $idProjet, $nomTache, $description, $cout, $dateDebut, $duree)
    {
        $query = 'insert into tache values(NULL,:email,:idProjet,:nomtache,:description, :cout, :dateDebut, :duree)';
        $this->con->executeQuery($query, array(':email' => array($email, PDO::PARAM_STR),
            ':idProjet' => array($idProjet, PDO::PARAM_INT),
            ':nomtache' => array($nomTache, PDO::PARAM_STR),
            ':description' => array($description, PDO::PARAM_STR),
            ':cout' => array($cout, PDO::PARAM_INT),
            ':dateDebut' => array($dateDebut, PDO::PARAM_STR),
            ':duree' => array($duree, PDO::PARAM_INT)));
    }

    public function displayTacheById($idprojet, $login): array
    {
        $query = 'select * from tache where idProjet=:idprojet'; //à rajouter l'affichage des tâches en fonction de l'utilisateur AUSSI.
        $this->con->executeQuery($query, array(':idprojet' => array($idprojet, PDO::PARAM_INT)));
        return $this->con->getResults();

    }


}