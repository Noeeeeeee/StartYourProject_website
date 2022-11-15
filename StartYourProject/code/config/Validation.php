<?php


class Validation
{

    public static function ValidationLogin(string $email, string $password)
    {

        if(!isset($email)||($email=""))
        {
            $vueErreur[] = "Le login n'est pas valide.";
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $vueErreur[] = "Format de l'email invalide";
        }

        if($email != Nettoyage::NettoyageEmail($email))
        {
            $vueErreur[] = "Email erroné";
        }

        if(!isset($password)||$password="")
        {
            $vueErreur[] = "Pas de mot de passe";
        }
    }

    public static function ValidationInt(int $nombre)
    {
        $nombre = Nettoyage::NettoyageInt($nombre);

        if(!isset($nb) or empty($nb))
            return false;

        if(filter_var($nombre, FILTER_VALIDATE_INT))
        {
            return true;
        }

        return false;


    }

    public static function ValidationBoolean(bool $boolean):bool
    {
        if (!isset($boolean) or empty($boolean))
            return false;


        if (filter_var($boolean, FILTER_VALIDATE_BOOLEAN)) {
            return true;
        }

        return false;

    }

    public static function ValidationString(string $val):bool{

        $val = Nettoyage::NettoyageString($val);

        if(!isset($val) or empty($val)) {
            return false;
        }
        else return true;
    }


}