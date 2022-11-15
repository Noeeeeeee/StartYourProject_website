<?php


class ProjetGateWay
{    private $con;

    function __construct(Connexion $con)
    {
        $this->con = $con;
    }
    /**
     * Permet de récupérer un projet en fonction d'un idProjet
     * @param int $idProjet id du projet
     * @return Projet
     */
    public function getProjetbyID($idProjet){
        $query = 'SELECT * FROM projet where idProjet=:idProjet';
        $this->con->executeQuery($query, array(':idProjet' => array($idProjet, PDO::PARAM_INT)));
        return $this->con->getResult();
    }

    /**
     * Permet d'ajouter un projet dans la base de données
     * @param $nomprojet // nom du projet
     * @param $mail // login user
     */
    public function ajouterProjet($nomprojet, $mail, $description, $budget)   { //l'ajout marche

        $query = "insert into projet values(NULL, :nomprojet, :description, :budget, :mail)"; //INSERT ID AUTO INCREMENT
        $this->con->executeQuery($query, array( ':nomprojet' =>  array($nomprojet, PDO::PARAM_STR), ':description' => array($description, PDO::PARAM_STR), ':budget' => array($budget, PDO::PARAM_INT),
            ':mail' =>  array($mail, PDO::PARAM_STR)));

        $idProjet = $this->con->lastInsertId();
        $role = $_SESSION['role'];
        $query = "insert into estMembre values(:idProjet, :mail, :role)";
        $this->con->executeQuery($query, array(':idProjet' => array($idProjet, PDO::PARAM_INT),
            ':mail' =>  array($mail, PDO::PARAM_STR), ':role' =>  array($role, PDO::PARAM_STR)));

    }

    /**
     * Permet de récupérer les projets propres à un utilisateur
     * @param string $email mail de l'utilisateur
     * @return mixed
     */
    public function getAllProjetByMail($email)
    {
        $query = 'SELECT * FROM projet p, estmembre e where  e.email=:email and e.idProjet = p.idProjet order by e.idProjet';
        $this->con->executeQuery($query, array(':email' => array($email, PDO::PARAM_STR)));
        return $this->con->getResults();
    }

    /**
     * Permet de supprimer un projet et ses tâches associées
     * @param int $idListeTaches id du projet à supprimer
     */
    public function deleteProjet($idProjet)
    {
        $query = 'DELETE FROM projet where idProjet=:idProjet';
        $this->con->executeQuery($query, array(':idProjet' => array($idProjet, PDO::PARAM_INT)));
    }

    /**
     * Permet de récupérer le nombre de projets
     * @return mixed
     */
    public function nbProjet()
    {
        $query = 'SELECT count(*) FROM projet';
        $this->con->executeQuery($query, array());
        return $this->con->getResults();
    }
}
