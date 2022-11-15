<?php


class UtilisateurGateway
{
    private $con;
    private $tabU;

    public function __construct($c)
    {
        $this->con = $c;
    }

    public function rechercherUtilisateur($email, string $mdp) :bool
    {
        $query = 'SELECT * FROM utilisateur WHERE email=:email';
        $this->con->executeQuery($query, array(':email' => array($email, PDO::PARAM_STR)));
        $result = $this->con->getResult();
        if(isset($result['email'])) {
            return password_verify($mdp, $result['motdepasse']);
        }
        else return false;
    }
}