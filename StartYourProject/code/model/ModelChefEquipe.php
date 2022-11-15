<?php


class ModelChefEquipe
{
    static function isChefEquipe():bool{
        return ($_SESSION['role'] == "chefEquipe" && isset($_SESSION['email']));
    }
}