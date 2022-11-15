<?php


class Nettoyage
{
    public static function NettoyageString(string $val)
    {
        return filter_var($val, FILTER_SANITIZE_STRING);
    }

    public static function NettoyageEmail(string $email)
    {
        return filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    public static function NettoyageInt(string $nombre)
    {
        return filter_var($nombre, FILTER_SANITIZE_NUMBER_INT);
    }
}