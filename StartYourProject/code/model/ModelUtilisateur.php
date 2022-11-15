<?php


class ModelUtilisateur
{
    static function isUtilisateur():bool{
        if(isset($_SESSION['role']) && isset($_SESSION['email'])){
            if($_SESSION['role'] == "utilisateur"){
                return true;
            }
        }
        else return false;
    }

    static function connexion(string $email, string $motDePasse):bool
    {
        global $dsn, $login, $mdp;
        $gateway = new UtilisateurGateway(new Connexion($dsn, $login, $mdp));
        //$email = Nettoyage::NettoyageString($email);
        //$motDePasse = Nettoyage::NettoyageString($motDePasse);
        $result = $gateway->rechercherUtilisateur($email, $motDePasse);
        if ($result) {
            $_SESSION['role'] = 'utilisateur';
            $_SESSION['email'] = $email;
            return true;
        }
        return false;
    }
}