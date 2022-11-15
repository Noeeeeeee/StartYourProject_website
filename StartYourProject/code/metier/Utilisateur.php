<?php


class Utilisateur
{
    private $login;
    private $email;
    private $motdepasse;
    private $nom;
//    private array $listeProjet = [];
//    private Role $role;
    private array $array ;//tableau de keyValue dont la key est le projet

    public function __construct($login, $email, $motdepasse,$nom){
        $this->login = $login;
        $this->email = $email;
        $this->motdepasse = $motdepasse;
        $this->nom = $nom;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getNom()
    {
        return $this->nom;
    }
}